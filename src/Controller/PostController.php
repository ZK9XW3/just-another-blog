<?php

namespace App\Controller;

use App\Repository\PostsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    /**
     * @Route("/posts", name="posts_list")
     */
    public function postsList(PostsRepository $postsRepository): Response
    {
        $postsList = $postsRepository->findAll();

        return $this->render('post/posts-list.html.twig', [
            'postsList' => $postsList,
        ]);
    }

    /**
     * @Route("/post/{id}", name="post", methods={"GET"}, requirements={"id": "\d+"})
     */
    public function post(PostsRepository $postsRepository, int $id): Response
    {
        $post = $postsRepository->find($id);

        return $this->render('post/post.html.twig', [
            'post' => $post,
        ]);
    }

}


