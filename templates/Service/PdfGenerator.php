<?php
namespace App\Service;

use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class PdfGenerator
{
    private Environment $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    
public function generate(string $template, array $data = []): Response
{
    // Configure Dompdf options
    $options = new Options();
    $options->set('defaultFont', 'Arial');
    $options->setIsHtml5ParserEnabled(true);

    $dompdf = new Dompdf($options);

    // Render the HTML template
    $html = $this->twig->render($template, $data);

    // Load HTML into Dompdf
    $dompdf->loadHtml($html);

    // Set paper size and orientation
    $dompdf->setPaper('A4', 'portrait');

    // Render the PDF
    $dompdf->render();

    // Return the PDF as a Response
    return new Response(
        $dompdf->output(),
        Response::HTTP_OK,
        [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => sprintf(
                'attachment; filename="registration-%d.pdf"',
                $data['event_registration']->getId()
            ),
        ]
    );
}
}