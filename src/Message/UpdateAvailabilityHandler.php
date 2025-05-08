<?php

namespace App\Message;

use App\Entity\Destination\Parkingspot;
use Doctrine\ORM\EntityManagerInterface;

class UpdateAvailabilityHandler
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function __invoke(UpdateAvailabilityMessage $message)
    {
        $parkingSpot = $this->entityManager->getRepository(Parkingspot::class)->find($message->getParkingSpotId());

        if (!$parkingSpot) {
            return;
        }

        // Update the availability status
        $parkingSpot->setIsAvailable('yes');
        $parkingSpot->setFreeAfter(null);
        $this->entityManager->flush();
    }
}
