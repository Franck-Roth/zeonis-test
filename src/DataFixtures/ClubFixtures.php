<?php

namespace App\DataFixtures;

use App\Entity\Player;
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
            $club->setName($faker->colorName);
            $club->setPlayer($this->getReference('player_'.rand(1,20)));
            $manager->persist($club);
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return [PlayerFixtures::class];
    }

}
