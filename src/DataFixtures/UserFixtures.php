<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\EncoderFactoryInterface;

class UserFixtures extends Fixture
{
    private $encoderFactory;

    public function __construct(EncoderFactoryInterface $encoderFactory)
    {
        $this->encoderFactory = $encoderFactory;
    }

    public function load(ObjectManager $manager)
    {

        for ($i = 0; $i <= 10; $i++){
            $user = new User();
            $user->setRoles(['ROLE_USER']);
            $user->setUsername('Zeonis'.$i);
            $user->setPassword($this->encoderFactory->getEncoder(User::class)->encodePassword('userzeonis', null));
            $manager->persist($user);
        }


        $manager->flush();
    }
}
