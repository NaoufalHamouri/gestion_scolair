<?php

namespace App\Controller\Admin;

use App\Entity\Niveau;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class NiveauCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Niveau::class;
    }

   
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('nom'),
            TextEditorField::new('description'),
        ];
    }
  
    public function persistEntity(EntityManagerInterface $em, $entityInstance): void
    {
        if(!$entityInstance instanceof Niveau) return;
        $entityInstance->setCreatedAt(new \DateTimeImmutable);
        parent::persistEntity($em,$entityInstance);

        
    }
}
