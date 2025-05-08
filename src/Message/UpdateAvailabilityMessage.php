<?php

namespace App\Message;

class UpdateAvailabilityMessage
{
    private int $parkingSpotId;

    public function __construct(int $parkingSpotId)
    {
        $this->parkingSpotId = $parkingSpotId;
    }

    public function getParkingSpotId(): int
    {
        return $this->parkingSpotId;
    }
}
