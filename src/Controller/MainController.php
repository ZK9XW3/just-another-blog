<?php

namespace App\Controller;

use App\Repository\PostsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index(PostsRepository $postsRepository): Response
    {
        $postsToDisplay = $postsRepository->findBy(
            [],
            ['created_at' => 'DESC'],
            3,
        );

        return $this->render('main/index.html.twig', [
            'postsToDisplay' => $postsToDisplay,
        ]);
    }

}
