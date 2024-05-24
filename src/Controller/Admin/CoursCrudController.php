<?php

namespace App\Controller\Admin;

use App\Entity\Cours;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class CoursCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Cours::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('nomCour'),
            NumberField::new('coeffictient'),
            DateField::new('createdAt')->hideOnForm(),
            DateField::new('updatedAt')->hideOnForm(),
            BooleanField::new('active')
        ];
    }
   
 
    public function persistEntity(EntityManagerInterface $em, $entityInstance): void
    {
        if(!$entityInstance instanceof Cours) return;
        $entityInstance->setCreatedAt(new \DateTimeImmutable);
        parent::persistEntity($em,$entityInstance);
        
    }
   
}
