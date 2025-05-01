<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Liip\ImagineBundle\Imagine\Cache\CacheManager;
use Liip\ImagineBundle\Binary\Loader\LoaderInterface;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\DependencyInjection\Attribute\Autowire;

class ImageController extends AbstractController
{
    #[Route('/image/{filename}', name: 'app_image_display')]
    public function image(string $filename): Response
    {
        return $this->redirectToRoute('liip_imagine_filter', [
            'filter' => 'watermark.png',
            'path' => 'uploads/destinations/' . $filename,
        ]);
    }
    #[Route('/image/download/{filename}', name: 'app_image_download')]
    public function downloadImage(
        string $filename,
        CacheManager $cacheManager
    ): Response {
        $relativePath = 'uploads/destinations/' . $filename;
    
        try {
            // This ensures the image is processed and cached if not already
            $resolvedPath = $cacheManager->resolve($relativePath, 'watermarked');
    
            // Return the actual cached file as download
            return new BinaryFileResponse($resolvedPath);
        } catch (\Exception $e) {
            throw new NotFoundHttpException('Could not process watermark image: ' . $e->getMessage());
        }
    }
}
