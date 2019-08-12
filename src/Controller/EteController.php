<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
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
     * @Route("/bla", name="bla")
     */
    public function bla() 
    {
        return $this->render("ete/home.html.twig");
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
     * @Route("/ete/admin", name="create")
     */
    public function create(Request $request, ObjectManager $manager) {
    $video = new Video();

    $form = $this->createFormBuilder($video)
             ->add('titre_video')
             ->add('date_upload')
             ->add('duree_video')
             ->add('coach_video')
             ->add('adresse_video')
             ->add('img_video')
             ->add('genre_video')
             ->add('description_video')
             ->getForm();


        return $this->render('ete/admin/create.html.twig', [
            'formVideo' => $form->createView()
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