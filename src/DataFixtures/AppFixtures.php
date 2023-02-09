<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for($i = 0; $i < 10; $i++) {
            $user = new User();
            $user->setUsername("User{$i}");

            $user->setBirthday(date("Y-m-d H:i:s",random_int(1262055681,1262055681)));

            $manager->persist($user);

        }

        $manager->flush();
    }
}
