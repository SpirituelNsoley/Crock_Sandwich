<?php

namespace App\Controller;

use App\Repository\MenuRepository;
use App\Repository\SandwichRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController  extends AbstractController
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
     * @Route("/", name="CrockSan")
     * @return Response
     */
    public function index(SandwichRepository $repoSandwich, MenuRepository $repoMenus):Response{
        $sandwichs=$repoSandwich->findAll();
        $menus=$repoMenus->findAll();
        return new Response($this->renderView('pages/FrontApp/home.html.twig', [
            'sandwichs'=>$sandwichs,
            'menus'=>$menus,
        ]));
    }   
}


?>