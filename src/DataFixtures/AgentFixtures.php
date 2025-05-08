<?php

namespace App\DataFixtures;

use App\Entity\Agent;
use App\Entity\Office;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class AgentFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();

        // Create sample offices first
        $offices = [];
        for ($i = 0; $i < 3; $i++) {
            $office = new Office();
            $office->setName($faker->company);
            $office->setLocation($faker->city);
            $office->setContactNumber($faker->phoneNumber);
            $manager->persist($office);
            $offices[] = $office;
        }
        $manager->flush();

        // Create sample agents
        for ($i = 0; $i < 20; $i++) {
            $agent = new Agent();
            $agent->setName($faker->name);
            $agent->setEmail($faker->email);
            $agent->setType($faker->randomElement(['male', 'female', 'animal']));
            $agent->setPhone($faker->numerify('########'));
            $agent->setBirthdate($faker->dateTimeBetween('-50 years', '-18 years'));
            $agent->setPictureP('uploads/agents/default.jpg');
            $agent->setOffice($faker->randomElement($offices));
            
            $manager->persist($agent);
        }

        $manager->flush();
    }
} 