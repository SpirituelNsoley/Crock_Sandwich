<?php

namespace App\Controller;

use Twig\Environment;
use App\Repository\MenuRepository;
use App\Repository\UserRepository;
use App\Repository\BreadRepository;
use App\Repository\JuiceRepository;
use App\Repository\ProfilRepository;
use App\Repository\SandwichRepository;
use App\Repository\IngredientRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminController  extends AbstractController
{
    /**
     *@var Environment
     */
    private $twig;

    public function __construct(Environment $twig)
    {
        $this->twig=$twig;
    }


    /**
     * @Route("/adminSection", name="AdminSection")
     * @return Response
     */
    public function index(UserRepository $repoUser):Response{
        $users=$repoUser->findAll();
        return new Response($this->renderView('pages/BackApp/admin.html.twig'));
    }

        /**
     * @Route("/adminSection/showProfil", name="showAllProfil")
     * @return Response
     */
    public function showProfil(ProfilRepository $repoProfil):Response{
        $profils=$repoProfil->findAll();    
        return new Response($this->renderView('pages/BackApp/Profil/show.html.twig', [
            'profils'=>$profils,
        ]));
    }
    
        /**
     * @Route("/adminSection/showUser", name="showAllUser")
     * @return Response
     */
    public function showUser(UserRepository $repoUser):Response{
        $users=$repoUser->findAll();       
        return new Response($this->renderView('pages/BackApp/User/show.html.twig', [
            'users'=>$users,
        ]));
    }

     /**
     * @Route("/adminSection/showSandwich", name="showAllSandwich")
     * @return Response
     */
    public function showSandwich(SandwichRepository $repoSandwich):Response{
        $sandwichs=$repoSandwich->findAll();
        return new Response($this->renderView('pages/BackApp/Sandwich/show.html.twig', [
            'sandwichs'=>$sandwichs,
        ]));
    }

     /**
     * @Route("/adminSection/showIngredient", name="showAllIngredient")
     * @return Response
     */
    public function showIngredient(IngredientRepository $repoIngredient):Response{
        $ingredients=$repoIngredient->findAll();  
        return new Response($this->renderView('pages/BackApp/Ingredients/show.html.twig', [
            'ingredients'=>$ingredients,
        ]));
    }

    /**
     * @Route("/adminSection/showBread", name="showAllBread")
     * @return Response
     */
    public function showBread(BreadRepository $repoBread):Response{
        $breads=$repoBread->findAll();       
        return new Response($this->renderView('pages/BackApp/Bread/show.html.twig', [
            'breads'=>$breads,
        ]));
    }

    /**
     * @Route("/adminSection/showJuice", name="showAllJuice")
     * @return Response
     */
    public function showJuice(JuiceRepository $repoJuice):Response{
        $juices=$repoJuice->findAll();  
        return new Response($this->renderView('pages/BackApp/Juice/show.html.twig', [
            'juices'=>$juices,
        ]));
    }

    /**
     * @Route("/adminSection/showMenu", name="showAllMenu")
     * @return Response
     */
    public function showMenu(MenuRepository $repoMenu):Response{
        $menus=$repoMenu->findAll();
       
        return new Response($this->renderView('pages/BackApp/Menu/show.html.twig', [
            'menus'=>$menus,
        ]));
    }
}


?>