<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    /**
     * @Route("/posts", name="posts_list")
     */
    public function postsList(): Response
    {
        return $this->render('post/posts-list.html.twig', [
            'controller_name' => 'PostController',
        ]);
    }

    /**
     * @Route("/post/id", name="post")
     */
    public function post(): Response
    {
        return $this->render('post/post.html.twig', [
            'controller_name' => 'PostController',
            // 'urlController' => $this->container->get('router')->getContext()->getBaseUrl(),
        ]);
    }

}


