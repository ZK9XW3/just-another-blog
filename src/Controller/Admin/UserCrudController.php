<?php

namespace App\Controller\Admin;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('email')->hideOnForm(),
            TextareaField::new('about'),
            TextField::new('social_link_1'), 
            TextField::new('social_link_2'), 
        ]; 
    }

    public function configureActions(Actions $actions): Actions 
    {

        return $actions
        ->disable(Action::NEW, Action::DELETE)
        ->setPermission(Action::EDIT, 'ROLE_ADMIN')
        ;

    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            // Maximize posts List display
            ->renderContentMaximized();
    }
    

}
