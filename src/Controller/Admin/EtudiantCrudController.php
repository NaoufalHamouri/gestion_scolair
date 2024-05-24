<?php

namespace App\Controller\Admin;

use App\Entity\Etudiant;
use App\Entity\Tuteur;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class EtudiantCrudController extends AbstractCrudController
{
    public const ETUDIANT_BASE_PATH ="upload/images/Etudiants";
    public const ETUDIANT_UPLOAD_DIR ="public/upload/images/Etudiants";

    public static function getEntityFqcn(): string
    {
        return Etudiant::class;
    }

   
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('nom'),
            TextField::new('prenom'),
            TextField::new('cne'),
            ImageField::new('image')->setBasePath(self::ETUDIANT_BASE_PATH)
            ->setUploadDir(self::ETUDIANT_UPLOAD_DIR)->setSortable(false),
            DateTimeField::new('createdAt')->hideOnForm(),
            DateTimeField::new('updatedAt')->hideOnForm(),
            AssociationField::new('Niveau'),
            AssociationField::new('Tuteur')
    
        ];
    }
  
    public function persistEntity(EntityManagerInterface $em, $entityInstance): void
    {
        if(!$entityInstance instanceof Etudiant) return;
        $entityInstance->setCreatedAt(new \DateTimeImmutable);
        parent::persistEntity($em,$entityInstance);
        
    }
}
