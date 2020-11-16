<?php

namespace App\DataFixtures;

use App\Entity\Player;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;

class PlayerFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create('fr_FR');

        for ($i = 1; $i <= 220; $i++){
            $player = new Player();
            $player->setFirstname($faker->firstNameMale);
            $player->setName($faker->lastName);
            $player->setNumber($faker->unique()->numberBetween(1, 220));

            $manager->persist($player);
            $this->addReference('player_' . $i, $player);
        }


        $manager->flush();
    }
}
