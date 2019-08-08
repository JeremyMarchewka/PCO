<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\VideoRepository;
use App\Entity\Admin;
use App\Entity\Mutuelle;
use App\Entity\Video;
use App\Entity\Genre;

class EteController extends AbstractController
{

    /**
     * @Route("/", name="home")
     */
    public function home() {
        $repo = $this->getDoctrine()->getRepository(Admin::class);
        return $this->render('ete/home.html.twig');
    }

    /**
     * @Route("/ete", name="ete")
     */
    public function index(VideoRepository $repo)
    {


        $videos = $repo->findAll();


        return $this->render('ete/index.html.twig', [
            'controller_name' => 'EteController',
            'videos' => $videos
        ]);
    }

    /**
     * @Route("/content/{id}", name="content")
     */
    public function content($id) {
        $repo = $this->getDoctrine()->getRepository(Video::class);

        $video = $repo->find($id);

        return $this->render('ete/content.html.twig', [
            'video' => $video
        ]);
    }

}