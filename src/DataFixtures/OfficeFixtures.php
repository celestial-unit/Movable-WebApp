<?php

namespace App\DataFixtures;

use App\Entity\Office;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class OfficeFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Basic fixture implementation
        $manager->flush();
    }
}
