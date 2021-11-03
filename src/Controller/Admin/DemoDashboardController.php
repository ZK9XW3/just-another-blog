<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Entity\Posts;
use App\Entity\Categories;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DemoDashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return $this->render('admin/dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Just Another Blog - Demo Dashboard');
    }

    public function configureMenuItems(): iterable
    {
        return [
            MenuItem::linktoDashboard('Dashboard', 'fa fa-home'),
            MenuItem::section('Administrate'),
            MenuItem::linkToCrud('Posts', 'fas fa-pen-square', Posts::class),
            MenuItem::linkToCrud('User', 'fas fa-user', User::class),
            MenuItem::linkToCrud('Categories', 'fas fa-newspaper', Categories::class),
            MenuItem::section('Navigate'),
            MenuItem::linkToRoute('Back to main site', 'fa fa-home', 'main'),
            MenuItem::linkToLogout('logout', 'fa fa-sign-out'),
        ];
    }
}
