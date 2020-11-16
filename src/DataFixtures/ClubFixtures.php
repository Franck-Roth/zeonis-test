<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Club;
use Faker;

class ClubFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        require ('vendor/autoload.php');

        $faker = Faker\Factory::create('fr_FR');

        for ($i = 1; $i <= 20; $i++){
            $club = new Club();
            $club->setLogo($faker->imageUrl(150,100));
            $club->setName($faker->city);
            for ($y = 1; $y <= 12; $y++){
                $club->addPlayer($this->getReference('player_'.rand(1, 220)));
            }
            $manager->persist($club);
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return [PlayerFixtures::class];
    }

}
