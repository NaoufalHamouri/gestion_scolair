<?php

namespace App\Controller\Admin;

use App\Entity\Etudiant;
use App\Entity\Tuteur;
use App\Entity\Niveau;
use App\Entity\Note;
use App\Entity\Cours;
use App\Entity\Enseignant;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    public function __construct(private AdminUrlGenerator $adminUrlGenerator)
    {
        
    }
    #[Route('/dashboard', name: 'admin')]
    public function index(): Response
    {
      
        $url = $this->adminUrlGenerator->setController(EtudiantCrudController::class)->generateUrl();

       
       return $this->redirect($url);

       
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Gestion Scolair');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::section("PERSONNELS");
        yield MenuItem::subMenu('Etudiants','fa-solid fa-user-graduate')->setSubItems( [
            MenuItem::linkToCrud('ajouter Etudiant','fas fa-plus',Etudiant::class)
            ->setAction(Crud::PAGE_NEW),
            MenuItem::linkToCrud('afficher Etudiant','fas fa-eye',Etudiant::class)]);

            yield MenuItem::subMenu('Tuteurs','fa-solid fa-person')->setSubItems( [
                MenuItem::linkToCrud('ajouter Tuteur','fas fa-plus',Tuteur::class)
                ->setAction(Crud::PAGE_NEW),
                MenuItem::linkToCrud('afficher tuteur','fas fa-eye',Tuteur::class)]);
                yield MenuItem::subMenu('Enseignant','fa-solid fa-person')->setSubItems( [
                    MenuItem::linkToCrud('ajouter Enseignant','fas fa-plus',Enseignant::class)
                    ->setAction(Crud::PAGE_NEW),
                    MenuItem::linkToCrud('afficher Enseignants','fas fa-eye',Enseignant::class)]);



                yield MenuItem::section("School Management");
                yield MenuItem::subMenu('Niveau','fa-solid fa-graduation-cap')->setSubItems( [
                    MenuItem::linkToCrud('ajouter Niveau','fas fa-plus',Niveau::class)
                    ->setAction(Crud::PAGE_NEW),
                    MenuItem::linkToCrud('afficher Niveau','fas fa-eye',Niveau::class)]);

                
                    yield MenuItem::subMenu('Note','fa-solid fa-graduation-cap')->setSubItems( [
                        MenuItem::linkToCrud('ajouter Note','fas fa-plus',Note::class)
                        ->setAction(Crud::PAGE_NEW),
                        MenuItem::linkToCrud('afficher Notes','fas fa-eye',Note::class)]);

                        yield MenuItem::subMenu('Cours','fa-solid fa-graduation-cap')->setSubItems( [
                            MenuItem::linkToCrud('ajouter Cour','fas fa-plus',Cours::class)
                            ->setAction(Crud::PAGE_NEW),
                            MenuItem::linkToCrud('afficher Cours','fas fa-eye',Cours::class)]);
          
       
    }
}
