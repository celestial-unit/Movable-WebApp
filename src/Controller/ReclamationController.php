<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Entity\User;
use App\Form\ReclamationType;
use App\Repository\ReclamationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

#[Route('/reclamation')]
class ReclamationController extends AbstractController
{
    private EntityManagerInterface $entityManager;
    private ReclamationRepository $reclamationRepository;

    public function __construct(
        EntityManagerInterface $entityManager,
        ReclamationRepository $reclamationRepository
    ) {
        $this->entityManager = $entityManager;
        $this->reclamationRepository = $reclamationRepository;
    }

    #[Route('/', name: 'app_reclamation_index')]
    public function index(Request $request): Response
    {
        /** @var User $user */
        $user = $this->getUser();
        
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }
        
        // Get filter parameters
        $status = $request->query->get('status');
        $category = $request->query->get('category');
        $sort = $request->query->get('sort', 'newest');
        $page = max(1, $request->query->getInt('page', 1));
        $limit = 10;
        
        // Prepare filters
        $filters = [];
        
        if ($status) {
            $filters['status'] = $status;
        }
        
        if ($category) {
            $filters['category'] = $category;
        }
        
        // Regular users can only see their own claims
        if (!$this->isGranted('ROLE_ADMIN')) {
            $filters['user'] = $user;
        }
        
        // Get paginated results
        $reclamations = $this->reclamationRepository->findPaginated($page, $limit, $filters);
        
        // Calculate total pages
        $total = $this->reclamationRepository->count($filters);
        $total_pages = ceil($total / $limit);
        
        // Get statistics
        $statsFilters = !$this->isGranted('ROLE_ADMIN') ? ['user' => $user] : [];
        $stats = [
            'total' => $this->reclamationRepository->count($statsFilters),
            'pending' => $this->reclamationRepository->countByStatus(Reclamation::STATUS_PENDING, $statsFilters),
            'resolved' => $this->reclamationRepository->countByStatus(Reclamation::STATUS_RESOLVED, $statsFilters),
            'rejected' => $this->reclamationRepository->countByStatus(Reclamation::STATUS_REJECTED, $statsFilters),
        ];
        
        return $this->render('reclamation/index.html.twig', [
            'reclamations' => $reclamations,
            'status' => $status,
            'category' => $category,
            'sort' => $sort,
            'page' => $page,
            'limit' => $limit,
            'total_pages' => $total_pages,
            'stats' => $stats,
            'isAdmin' => $this->isGranted('ROLE_ADMIN')
        ]);
    }

    #[Route('/new', name: 'app_reclamation_new')]
    public function new(Request $request): Response
    {
        /** @var User $user */
        $user = $this->getUser();
        
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }
        
        $reclamation = new Reclamation();
        $reclamation->setUser($user);
        
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($reclamation);
            $this->entityManager->flush();
            
            $this->addFlash('success', 'Your claim has been submitted successfully.');
            return $this->redirectToRoute('app_reclamation_show', ['id' => $reclamation->getId()]);
        }
        
        return $this->render('reclamation/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_reclamation_show', requirements: ['id' => '\d+'])]
    public function show(Reclamation $reclamation): Response
    {
        // Only allow viewing if admin or the owner
        if ($reclamation->getUser() !== $this->getUser() && !$this->isGranted('ROLE_ADMIN')) {
            throw new AccessDeniedException('You cannot view this claim.');
        }
        
        return $this->render('reclamation/show.html.twig', [
            'reclamation' => $reclamation,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_reclamation_edit', requirements: ['id' => '\d+'])]
    public function edit(Request $request, Reclamation $reclamation): Response
    {
        // Only allow editing if admin or the owner and the claim is pending
        if (
            ($reclamation->getUser() !== $this->getUser() && !$this->isGranted('ROLE_ADMIN')) ||
            ($reclamation->getUser() === $this->getUser() && !$reclamation->isPending())
        ) {
            throw new AccessDeniedException('You cannot edit this claim.');
        }
        
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            // Update the claim
            $this->entityManager->persist($reclamation);
            $this->entityManager->flush();
            
            $this->addFlash('success', 'Claim has been updated successfully.');
            return $this->redirectToRoute('app_reclamation_show', ['id' => $reclamation->getId()]);
        }
        
        return $this->render('reclamation/edit.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/resolve', name: 'app_reclamation_resolve', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function resolve(Request $request, Reclamation $reclamation): Response
    {
        // Only admins can resolve claims
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        
        // Update the status and resolution date
        $reclamation->resolve();
        
        $this->entityManager->persist($reclamation);
        $this->entityManager->flush();
        
        $this->addFlash('success', 'Claim has been marked as resolved.');
        
        // Check if we should return to the dashboard or claim detail
        $referer = $request->headers->get('referer');
        if (strpos($referer, 'dashboard') !== false) {
            return $this->redirectToRoute('app_reclamation_dashboard');
        }
        
        return $this->redirectToRoute('app_reclamation_show', ['id' => $reclamation->getId()]);
    }

    #[Route('/{id}/reject', name: 'app_reclamation_reject', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function reject(Request $request, Reclamation $reclamation): Response
    {
        // Only admins can reject claims
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        
        // Update the status and resolution date
        $reclamation->reject();
        
        $this->entityManager->persist($reclamation);
        $this->entityManager->flush();
        
        $this->addFlash('success', 'Claim has been rejected.');
        
        // Check if we should return to the dashboard or claim detail
        $referer = $request->headers->get('referer');
        if (strpos($referer, 'dashboard') !== false) {
            return $this->redirectToRoute('app_reclamation_dashboard');
        }
        
        return $this->redirectToRoute('app_reclamation_show', ['id' => $reclamation->getId()]);
    }

    #[Route('/{id}/delete', name: 'app_reclamation_delete', methods: ['POST'])]
    public function delete(Request $request, Reclamation $reclamation): Response
    {
        // Only allow deleting if admin or the owner and the claim is pending
        if (
            ($reclamation->getUser() !== $this->getUser() && !$this->isGranted('ROLE_ADMIN')) ||
            ($reclamation->getUser() === $this->getUser() && !$reclamation->isPending())
        ) {
            throw new AccessDeniedException('You cannot delete this claim.');
        }
        
        if ($this->isCsrfTokenValid('delete'.$reclamation->getId(), $request->request->get('_token'))) {
            $this->entityManager->remove($reclamation);
            $this->entityManager->flush();
            
            $this->addFlash('success', 'Claim has been deleted successfully.');
        }
        
        return $this->redirectToRoute('app_reclamation_index');
    }

    #[Route('/dashboard', name: 'app_reclamation_dashboard')]
    public function dashboard(Request $request): Response
    {
        // Only admins can access the dashboard
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        
        // Get query parameters for pagination and filtering
        $page = max(1, $request->query->getInt('page', 1));
        $status = $request->query->get('status');
        $category = $request->query->get('category');
        $limit = 10;
        
        // Prepare filters
        $filters = [];
        if ($status) {
            $filters['status'] = $status;
        }
        
        if ($category) {
            $filters['category'] = $category;
        }
        
        // Get all claims with pagination 
        $allClaims = $this->reclamationRepository->findPaginated($page, $limit, $filters);
        
        // Calculate total pages
        $total = $this->reclamationRepository->count($filters);
        $total_pages = ceil($total / $limit);
        
        // Get statistics
        $stats = $this->reclamationRepository->getStatistics();
        
        // Get status counts
        $pendingCount = $this->reclamationRepository->countByStatus(Reclamation::STATUS_PENDING);
        $resolvedCount = $this->reclamationRepository->countByStatus(Reclamation::STATUS_RESOLVED);
        $rejectedCount = $this->reclamationRepository->countByStatus(Reclamation::STATUS_REJECTED);
        
        return $this->render('admin/reclamation_dashboard.html.twig', [
            'stats' => $stats,
            'claims' => $allClaims, // More descriptive variable name
            'pendingCount' => $pendingCount,
            'resolvedCount' => $resolvedCount,
            'rejectedCount' => $rejectedCount,
            'page' => $page,
            'limit' => $limit,
            'total_pages' => $total_pages,
            'status' => $status,
            'category' => $category,
        ]);
    }

    #[Route('/user/{id}', name: 'app_reclamation_user', requirements: ['id' => '\d+'])]
    public function userClaims(User $user): Response
    {
        // Only allow viewing if admin or the user themselves
        if ($user !== $this->getUser() && !$this->isGranted('ROLE_ADMIN')) {
            throw new AccessDeniedException('You cannot view these claims.');
        }
        
        $reclamations = $this->reclamationRepository->findByUser($user);
        
        return $this->render('reclamation/user_claims.html.twig', [
            'user' => $user,
            'reclamations' => $reclamations,
        ]);
    }
}
