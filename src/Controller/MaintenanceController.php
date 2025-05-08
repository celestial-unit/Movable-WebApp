<?php
// src/Controller/MaintenanceController.php
namespace App\Controller;

use App\Entity\Transport;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Routing\Annotation\Route;
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel;
use Symfony\Component\Filesystem\Filesystem;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use Endroid\QrCode\Writer\PngWriter;

class MaintenanceController extends AbstractController
{
    private string $projectDir;
    private Filesystem $filesystem;
   
    public function __construct(string $projectDir, Filesystem $filesystem)
    {
        $this->projectDir = $projectDir;
        $this->filesystem = $filesystem;
    }

    #[Route('/api/transport/{id}/maintenance-report', name: 'api_transport_maintenance_report', methods: ['GET'])]
    public function generateMaintenanceReport(Transport $transport): BinaryFileResponse
    {
        $qrCodePath = $this->generateQrCode($transport);
        $excelPath = $this->generateExcelReport($transport, $qrCodePath);
        $response = $this->createFileResponse($excelPath, $transport->getId());
        $this->scheduleCleanup($qrCodePath, $excelPath);
        
        return $response;
    }

    private function generateQrCode(Transport $transport): string
{
    $qrCode = Builder::create()
        ->data($this->generateQrContent($transport))
        ->encoding(new Encoding('UTF-8'))
        ->errorCorrectionLevel(ErrorCorrectionLevel::High)
        ->size(200)
        ->build();

    // Ensure the tmp directory exists
    $tmpDir = $this->projectDir.'/var/tmp';
    if (!$this->filesystem->exists($tmpDir)) {
        $this->filesystem->mkdir($tmpDir);
    }

    $qrCodePath = $tmpDir.'/qrcode_'.$transport->getId().'.png';
    $qrCode->saveToFile($qrCodePath);

    return $qrCodePath;
}
   

    private function generateQrContent(Transport $transport): string
    {
        return sprintf(
            "Transport ID: %d\nType: %s\nLicense: %s\nLast Maintenance: %s\nNext Maintenance: %d km",
            $transport->getId(),
            $transport->getType(),
            $transport->getLicensePlate(),
            $transport->getLastMaintenanceDate()->format('Y-m-d'),
            $transport->getCurrentKilometers() + $transport->getMaintenanceInterval()
        );
    }

    private function generateExcelReport(Transport $transport, string $qrCodePath): string
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Transport Data
        $this->addTransportData($sheet, $transport);
        
        // Maintenance Info
        $this->addMaintenanceData($sheet, $transport);
        
        // Add QR Code
        $this->addQrCodeToSheet($sheet, $qrCodePath);

        $excelPath = $this->projectDir.'/var/tmp/maintenance_report_'.$transport->getId().'.xlsx';
        (new Xlsx($spreadsheet))->save($excelPath);

        return $excelPath;
    }

    private function addTransportData($sheet, Transport $transport): void
    {
        $sheet->setCellValue('A1', 'Maintenance Report');
        $sheet->setCellValue('A2', 'Transport ID')->setCellValue('B2', $transport->getId());
        $sheet->setCellValue('A3', 'Type')->setCellValue('B3', $transport->getType());
        $sheet->setCellValue('A4', 'Model')->setCellValue('B4', $transport->getModel());
        $sheet->setCellValue('A5', 'License Plate')->setCellValue('B5', $transport->getLicensePlate());
        $sheet->getColumnDimension('A')->setAutoSize(true);
        $sheet->getColumnDimension('B')->setAutoSize(true);
    }

    private function addMaintenanceData($sheet, Transport $transport): void
    {
        $sheet->setCellValue('A7', 'Maintenance Information');
        $sheet->setCellValue('A8', 'Current Kilometers')->setCellValue('B8', $transport->getCurrentKilometers());
        $sheet->setCellValue('A9', 'Last Maintenance Date')->setCellValue('B9', $transport->getLastMaintenanceDate()->format('Y-m-d'));
        $sheet->setCellValue('A10', 'Maintenance Interval')->setCellValue('B10', $transport->getMaintenanceInterval());
        $sheet->setCellValue('A11', 'Next Maintenance At')->setCellValue('B11', $transport->getCurrentKilometers() + $transport->getMaintenanceInterval());
    }

    private function addQrCodeToSheet($sheet, string $qrCodePath): void
    {
        $drawing = new Drawing();
        $drawing->setName('QR Code');
        $drawing->setDescription('Transport QR Code');
        $drawing->setPath($qrCodePath);
        $drawing->setCoordinates('D2');
        $drawing->setHeight(150);
        $drawing->setWorksheet($sheet);
    }

    private function createFileResponse(string $filePath, int $transportId): BinaryFileResponse
    {
        $response = new BinaryFileResponse($filePath);
        $response->setContentDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            sprintf('maintenance_report_%d.xlsx', $transportId)
        );
        
        return $response;
    }

    private function scheduleCleanup(string $qrCodePath, string $excelPath): void
    {
        register_shutdown_function(function() use ($qrCodePath, $excelPath) {
            if ($this->filesystem->exists($qrCodePath)) {
                $this->filesystem->remove($qrCodePath);
            }
            if ($this->filesystem->exists($excelPath)) {
                $this->filesystem->remove($excelPath);
            }
        });
    }
}