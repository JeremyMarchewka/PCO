<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Video;

class EteFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i = 1; $i <= 10; $i++){
            $video = new Video();
            $video->setTitreVideo("Vidéo n°$i")
                  ->setDateUploadVideo(new \Datetime())
                  ->setCoachVideo("Jimmy")
                  ->setAdresseVideo("http://placehold.it/350x150")
                  ->setImgVideo("http://placehold.it/350x150")
                  ->setGenreVideo("sport")
                  ->setDescriptionVideo("<p>lorem40</p>");

            $manager->persist($video);
        }

        $manager->flush();
    }
}
