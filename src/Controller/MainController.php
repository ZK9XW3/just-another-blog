<?php

namespace App\Controller;

use App\Repository\PostsRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index(PostsRepository $postsRepository, UserRepository $userRepository): Response
    {
        // Get 3 last posts from db
        $postsToDisplay = $postsRepository->findBy(
            [],
            ['created_at' => 'DESC'],
            3,
        );

        // Get Admin user's data by email
        $user = $userRepository->findOneBy(['email' => 'john@doe.com']);


        return $this->render('main/index.html.twig', [
            'postsToDisplay' => $postsToDisplay,
            'user' => $user,
        ]);
    }

}
