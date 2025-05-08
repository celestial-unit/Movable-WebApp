<?php

namespace App\DataFixtures;

use App\Entity\Destination\Parkingspot;
use App\Entity\Destination\Destination;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class ParkingSpotFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();

        // Fetch all existing destinations
        $destinations = $manager->getRepository(Destination::class)->findAll();

        // 👉 Check if destinations exist
        if (empty($destinations)) {
            throw new \Exception('No destinations found. Please create some Destination entries first.');
        }

        for ($i = 0; $i < 50; $i++) { 
            $parkingSpot = new Parkingspot();

            $parkingSpot->setIsAccessible($faker->randomElement(["yes", "no"]));
            $parkingSpot->setIsAvailable($faker->randomElement(["yes", "no"]));
            $parkingSpot->setSpotNumber('Spot ' . $faker->unique()->numberBetween(1, 9999));
            $parkingSpot->setParkingFees((string)$faker->randomFloat(2, 1, 10)); // Cast as string for your entity
            $parkingSpot->setSize((string)$faker->numberBetween(10, 100)); // Size in m²
            $parkingSpot->setNotes($faker->sentence(10)); 

            // 👉 Always assign a random valid Destination
            $randomDestination = $faker->randomElement($destinations);
            $parkingSpot->setIdDestination($randomDestination);

            $manager->persist($parkingSpot);
        }

        $manager->flush();
    }
}
