<?php
// src/Service/PdfGenerator.php
namespace App\Service;

use Knp\Snappy\Pdf;
use Twig\Environment;
use Endroid\QrCode\Builder\Builder;
use Symfony\Component\HttpFoundation\Response;

class PdfGenerator
{
    private $pdf;
    private $templating;

    public function __construct(Pdf $pdf, Environment $templating)
    {
        $this->pdf = $pdf;
        $this->templating = $templating;
    }

    public function generate(string $template, array $data): Response
    {
        // Generate QR code directly in the PDF generator
        $qrCode = Builder::create()
            ->data($data['qr_code_data'])
            ->size(200)
            ->margin(10)
            ->build();

        // Add QR code to the template data
        $data['qr_code'] = $qrCode->getDataUri();

        // Render HTML with QR code
        $html = $this->templating->render($template, $data);

        // Generate PDF
        return new Response(
            $this->pdf->getOutputFromHtml($html),
            200,
            [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="registration.pdf"'
            ]
        );
    }
}