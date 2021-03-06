<?php

namespace App\Controller\Admin;

use App\Entity\Categories;
use App\Entity\Posts;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/superadmin", name="super-admin")
     */
    public function index(): Response
    {
        return $this->render('admin/dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Just Another Blog');
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
