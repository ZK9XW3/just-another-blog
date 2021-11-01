<?php

namespace App\Controller\Admin;

use App\Entity\Posts;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PostsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Posts::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
