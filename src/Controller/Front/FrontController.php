<?php

namespace App\Controller\Front;

use App\Entity\Reclamation;
use App\Entity\User;
use App\Form\Front\ContactType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Routing\Attribute\Route;

class FrontController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/', name: 'app_front_home')]
    public function index(): Response
    {
        // Sample data for the front-office homepage
        $services = [
            [
                'icon' => 'fa-mail-bulk',
                'title' => 'Digital Marketing',
                'description' => 'We provide comprehensive digital marketing solutions to help your business grow online.'
            ],
            [
                'icon' => 'fa-search',
                'title' => 'SEO & Backlinks',
                'description' => 'Improve your search engine ranking with our proven SEO strategies and quality backlink building.'
            ],
            [
                'icon' => 'fa-laptop-code',
                'title' => 'Design & Development',
                'description' => 'Custom web design and development services tailored to your specific business needs.'
            ],
        ];
        
        $projects = [
            [
                'image' => 'portfolio-1.jpg',
                'category' => 'Web Design',
                'title' => 'E-commerce Platform',
                'class' => 'first'
            ],
            [
                'image' => 'portfolio-2.jpg',
                'category' => 'Mobile App',
                'title' => 'Delivery App',
                'class' => 'second'
            ],
            [
                'image' => 'portfolio-3.jpg',
                'category' => 'Web Design',
                'title' => 'Corporate Website',
                'class' => 'first'
            ],
        ];
        
        $testimonials = [
            [
                'content' => 'Working with Movable has been an incredible experience. Their team is professional and delivered beyond our expectations.',
                'image' => 'testimonial-1.jpg',
                'name' => 'John Smith',
                'position' => 'CEO, Tech Solutions'
            ],
            [
                'content' => 'The digital marketing campaign they created for us increased our conversion rate by 150%. Highly recommended!',
                'image' => 'testimonial-2.jpg',
                'name' => 'Lisa Johnson',
                'position' => 'Marketing Director'
            ],
        ];

        return $this->render('front/home/index.html.twig', [
            'services' => $services,
            'projects' => $projects,
            'testimonials' => $testimonials,
        ]);
    }

    #[Route('/services', name: 'app_front_services')]
    public function services(): Response
    {
        // Sample data for services page
        $services = [
            [
                'icon' => 'fa-search',
                'title' => 'SEO Optimization',
                'description' => 'Boost your website visibility and rank higher in search engine results with our comprehensive SEO services.'
            ],
            [
                'icon' => 'fa-laptop-code',
                'title' => 'Web Design',
                'description' => 'Custom responsive website designs that captivate your audience and provide exceptional user experience.'
            ],
            [
                'icon' => 'fa-facebook-f',
                'title' => 'Social Media Marketing',
                'description' => 'Engage with your audience effectively through strategic social media campaigns that drive results.'
            ],
            [
                'icon' => 'fa-mail-bulk',
                'title' => 'Email Marketing',
                'description' => 'Targeted email campaigns that nurture leads, build relationships, and drive conversions.'
            ],
            [
                'icon' => 'fa-thumbs-up',
                'title' => 'PPC Advertising',
                'description' => 'Strategic pay-per-click advertising to drive immediate traffic and conversions to your website.'
            ],
            [
                'icon' => 'fa-android',
                'title' => 'App Development',
                'description' => 'Custom mobile applications that enhance your business operations and customer engagement.'
            ],
        ];

        return $this->render('front/services/index.html.twig', [
            'services' => $services,
        ]);
    }

    #[Route('/portfolio', name: 'app_front_portfolio')]
    public function portfolio(): Response
    {
        // Sample data for portfolio page
        $projects = [
            [
                'image' => 'portfolio-1.jpg',
                'category' => 'Web Design',
                'title' => 'E-commerce Platform',
                'class' => 'first'
            ],
            [
                'image' => 'portfolio-2.jpg',
                'category' => 'Mobile App',
                'title' => 'Delivery App',
                'class' => 'second'
            ],
            [
                'image' => 'portfolio-3.jpg',
                'category' => 'Web Design',
                'title' => 'Corporate Website',
                'class' => 'first'
            ],
            [
                'image' => 'portfolio-4.jpg',
                'category' => 'Graphic Design',
                'title' => 'Brand Identity Package',
                'class' => 'second'
            ],
            [
                'image' => 'portfolio-5.jpg',
                'category' => 'Web Design',
                'title' => 'Portfolio Website',
                'class' => 'first'
            ],
            [
                'image' => 'portfolio-6.jpg',
                'category' => 'Graphic Design',
                'title' => 'Product Packaging',
                'class' => 'second'
            ],
        ];

        return $this->render('front/portfolio/index.html.twig', [
            'projects' => $projects,
        ]);
    }

    #[Route('/contact', name: 'app_front_contact')]
    public function contact(Request $request, MailerInterface $mailer): Response
    {
        $reclamation = new Reclamation();
        $reclamation->setCategory('Contact');
        
        $form = $this->createForm(ContactType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Get the user if authenticated, or use a default admin user for contacts
            if ($this->getUser()) {
                $user = $this->getUser();
            } else {
                // Find an admin user to assign contact messages to
                $user = $this->entityManager->getRepository(User::class)->findOneBy(['role' => 'ADMIN']);
                
                // If no admin exists, get the first user (or we could create a system user)
                if (!$user) {
                    $user = $this->entityManager->getRepository(User::class)->findOneBy([]);
                    
                    // If still no user found, we cannot proceed
                    if (!$user) {
                        $this->addFlash('error', 'Could not process your request. Please try again later.');
                        return $this->redirectToRoute('app_front_contact');
                    }
                }
            }
            
            // Set the user and prepare the reclamation
            $reclamation->setUser($user);
            $reclamation->setStatus(Reclamation::STATUS_PENDING);
            
            // Add info from non-mapped fields to description
            $name = $form->get('name')->getData();
            $email = $form->get('email')->getData();
            $originalDescription = $reclamation->getDescription();
            
            $enhancedDescription = "Contact from: $name\n";
            $enhancedDescription .= "Email: $email\n\n";
            $enhancedDescription .= "Message:\n$originalDescription";
            
            $reclamation->setDescription($enhancedDescription);
            
            // Save to database
            $this->entityManager->persist($reclamation);
            $this->entityManager->flush();
            
            // Optionally send email notification
            try {
                $email = (new TemplatedEmail())
                    ->from(new Address('noreply@movable.com', 'Movable Contact'))
                    ->to('admin@movable.com')
                    ->subject('New Contact Form Submission: ' . $reclamation->getTitle())
                    ->htmlTemplate('emails/contact.html.twig')
                    ->context([
                        'name' => $name,
                        'email' => $email,
                        'subject' => $reclamation->getTitle(),
                        'message' => $originalDescription,
                    ]);
                
                $mailer->send($email);
            } catch (\Exception $e) {
                // Log the error but don't inform the user as the message is already saved
                // We could log this properly in a production environment
            }

            $this->addFlash('success', 'Your message has been sent. Thank you for contacting us!');
            return $this->redirectToRoute('app_front_contact');
        }

        return $this->render('front/contact/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}

