<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Developer;
use App\Entity\Project;
use Doctrine\ORM\EntityManagerInterface;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager ): void
    {
        $entityManager = EntityManagerInterface::class;

        $input_dev = array("Neo", "Morpheus", "Trinity", "Smit", "Vin");
        //array_rand($input_dev, 1);
        //dd($input_dev[$rand_dev]);

        $input_project = array("Netflix", "Kinopoisk", "Okko", "Flex", "Ivi");
        $rand_project = array_rand($input_project, 1);
        //dd($input_project[$rand_project]);

        // create 10 products! Bam!
        for ($i = 0; $i < 5; $i++) {

            $rand_dev = array_rand($input_dev, 1);
            $nameDev = $input_dev[$rand_dev].$i;
            $emailDev = $input_dev[$rand_dev].$i.'@mail.ru';
            $age = rand(20, 80);

            $developer = new Developer();
            $developer->setName($nameDev);
            $developer->setPostDev('dev');
            $developer->setEmail($emailDev);
            $developer->setPhone(1234567890);
            $developer->setAge($age);
            $manager->persist($developer);

        }

        $manager->flush();
    }
}
