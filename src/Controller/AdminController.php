<?php

namespace App\Controller;

use App\Entity\Menu;
use App\Entity\User;
use App\Entity\Bread;
use App\Entity\Juice;
use Twig\Environment;
use App\Entity\Profil;
use App\Form\UserType;
use App\Entity\Sandwich;
use App\Entity\Ingredient;
use App\Form\SandwichType;
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
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
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
        return new Response($this->renderView('pages/BackApp/admin.html.twig'));
    }



    /******************** ************************************* 
     ************************************************************
      ***********************************************************
    ALL FUNCTIONS PROFIL
    ***********************************************************
     ***********************************************************
      ***********************************************************
       *********************************************************** 
    */




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
     * @Route("/adminSection/addProfil", name="addProfil")
     * @return Response
     */
    public function addProfil( Request $request)
    {
         $profil=new Profil();
        
        $form = $this->createformBuilder($profil)
            ->add('libelle', TextType::class)
            ->add('statement', ChoiceType::class, [
                'choices'  => [
                    'Actif' => 1,
                    'Inactif' => 0,
                  
                ]
            ])
            ->getForm();


            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                 $entityManager = $this->getDoctrine()->getManager();
                 $entityManager->persist($profil);
                 $entityManager->flush();
                 return $this->redirectToRoute('showAllProfil');
            }           
        return new Response($this->renderView('pages/BackApp/Profil/add.html.twig', [
            'form' => $form->createView(),
        ]));

    }


    /**
     * @Route("/adminSection/profil/edit/{id}", name="editProfil")
     * @return Response
     */
    public function editProfil($id,Request $request,ProfilRepository $repo)
    {
         $profil=$repo->find($id);
        
        $form = $this->createFormBuilder($profil)
            ->add('libelle', TextType::class)
            ->add('statement', ChoiceType::class)
            ->add('save', SubmitType::class, ['label' => 'Enregistrer'])
            ->getForm();


            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                

                
                 $entityManager = $this->getDoctrine()->getManager();
                 $entityManager->persist($profil);
                 $entityManager->flush();

                return $this->redirectToRoute('showAllProfil');
            }
       
            return new Response($this->renderView('pages/BackApp/Profil/edit.html.twig', [
                'form' => $form->createView(),
            ]));
    }

    
    /**
     * @Route("/adminSection/deleteProfil/{id}", name="deleteProfil")
     * @param Profil $profil
     * @return Response
     */
    public function deleteProfil($id, ProfilRepository $repo)
    {
        $profil=$repo->find($id);
        
         
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($profil);
        $entityManager->flush();
   

       return $this->redirectToRoute('showAllProfil');
       
    }











    /******************** ************************************* 
     ************************************************************
      ***********************************************************
    ALL FUNCTIONS USER
    ***********************************************************
     ***********************************************************
      ***********************************************************
       *********************************************************** 
    */

     /**
     * @Route("/adminSection/addUser", name="addUser")
     * @return Response
     */

    public function addUser( Request $request)
    {
         $User=new User();
         $form = $this->createformBuilder($User)
         ->add('name')
         ->add('lastName')
         ->add('login')
         ->add('password')
         ->add('address')
         ->add('statement', ChoiceType::class, [
             'choices'  => [
                 "Actif" => 1,
                 "Inactif" => 0,    
             ]
         ])
         ->add('profil',  EntityType::class, [
             'class' => Profil::class,
             'choice_label'=> 'libelle',
         ])
            ->getForm();
         $form = $this->createForm(UserType::class, $User);

            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                
                 $entityManager = $this->getDoctrine()->getManager();
                 $entityManager->persist($User);
                 $entityManager->flush();

                return $this->redirectToRoute('showAllUser');
            }
       
            return new Response($this->renderView('pages/BackApp/User/add.html.twig', [
                'form'=> $form->createView(),
            ]));
    }


        /**
     * @Route("/adminSection/deleteUser/{id}", name="deleteUser")
     * @param User $user
     * @return Response
     */
    public function deleteUser($id,UserRepository $repo)
    {
        $user=$repo->find($id);
        
         
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($user);
        $entityManager->flush();
   

       return $this->redirectToRoute('showAllUser');
       
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






    /******************** ************************************* 
     ************************************************************
      ***********************************************************
    ALL FUNCTIONS SANDWICH
    ***********************************************************
     ***********************************************************
      ***********************************************************
       *********************************************************** 
    */





    
     /**
     * @Route("/adminSection/addSandwich", name="addSandwich")
     * @return Response
     */

    public function addSandwich( Request $request)
    {
         $Sandwich=new Sandwich();
         $form = $this->createformBuilder($Sandwich)
         ->add('name')
         ->add('statement', ChoiceType::class, [
             'choices'  => [
                 'Actif' => 1,
                 'Inactif' => 0,
               
             ]
         ])
         ->add('ingredient', EntityType::class, [
             'class' => Ingredient::class,
             'choice_label'=> 'name',
             'multiple'=> true,
         ])
         ->add('bread' , EntityType::class, [
             'class' => Bread::class,
             'choice_label'=> 'name',
         ])->getForm();
         $form = $this->createForm(SandwichType::class, $Sandwich);

            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                
                 $entityManager = $this->getDoctrine()->getManager();
                 $entityManager->persist($Sandwich);
                 $entityManager->flush();

                return $this->redirectToRoute('showAllSandwich');
            }
       
            return new Response($this->renderView('pages/BackApp/Sandwich/add.html.twig', [
                'form'=> $form->createView(),
            ]));
    }


     /**
     * @Route("/adminSection/showSandwich", name="showAllSandwich")
     * @return Response
     */
    public function showSandwich(SandwichRepository $repoSandwich):Response{
        $sandwichs=$repoSandwich->findAll();  
        foreach ($sandwichs as  $sandwich) {
            $breadsName[]=$sandwich->getNameBread();
            $ingredientNames[]=$sandwich->getNameIngredient();
            $prices[]=$sandwich->getPriceSandwich();
        } 
             
        return new Response($this->renderView('pages/BackApp/Sandwich/show.html.twig', [
            'sandwichs'=>$sandwichs,
            'prices'=>$prices,
        ]));
    }

    
    /**
     * @Route("/adminSection/deleteSandwich/{id}", name="deleteSandwich")
     * @param Sandwich $sandwich
     * @return Response
     */
    public function deleteSandwich($id,SandwichRepository $repo)
    {
        $sandwich=$repo->find($id);
        
         
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($sandwich);
        $entityManager->flush();
   

       return $this->redirectToRoute('showAllSandwich');
       
    }
    
    
    
    
    
    
    




    /******************** ************************************* 
     ************************************************************
      ***********************************************************
    ALL FUNCTIONS INGREDIENT
    ***********************************************************
     ***********************************************************
      ***********************************************************
       *********************************************************** 
    */

    /**
     * @Route("/adminSection/addIngredient", name="addIngredient")
     * @return Response
     */

    public function addIngredient( Request $request)
    {
         $Ingredient=new Ingredient();
        
        $form = $this->createformBuilder($Ingredient)
            ->add('name', TextType::class)
            ->add('price', IntegerType::class)
            ->add('statement', ChoiceType::class, [
                'choices'  => [
                    'Actif' => 1,
                    'Inactif' => 0,
                  
                ]
            ])
            ->getForm();


            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                 $entityManager = $this->getDoctrine()->getManager();
                 $entityManager->persist($Ingredient);
                 $entityManager->flush();
                 return $this->redirectToRoute('showAllIngredient');
            }           
        return new Response($this->renderView('pages/BackApp/Form/add.html.twig', [
            'form' => $form->createView(),
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
     * @Route("/adminSection/deleteIngredient/{id}", name="deleteIngredient")
     * @param Ingredient $ingredient
     * @return Response
     */
    public function deleteIngredient($id,IngredientRepository $repo)
    {
        $ingredient=$repo->find($id);
        
         
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($ingredient);
        $entityManager->flush();
   

       return $this->redirectToRoute('showAllIngredient');
       
    }



    /******************** ************************************* 
     ************************************************************
      ***********************************************************
    ALL FUNCTIONS BREAD
    ***********************************************************
     ***********************************************************
      ***********************************************************
       *********************************************************** 
    */
    /**
     * @Route("/adminSection/addBread", name="addBread")
     * @return Response
     */

    public function addBread( Request $request)
    {
         $Bread=new Bread();
        
        $form = $this->createformBuilder($Bread)
            ->add('name', TextType::class)
            ->add('price', IntegerType::class)
            ->add('statement', ChoiceType::class, [
                'choices'  => [
                    'Actif' => 1,
                    'Inactif' => 0,
                  
                ]
            ])
            ->getForm();


            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                 $entityManager = $this->getDoctrine()->getManager();
                 $entityManager->persist($Bread);
                 $entityManager->flush();
                 return $this->redirectToRoute('showAllBread');
            }           
        return new Response($this->renderView('pages/BackApp/Form/add.html.twig', [
            'form' => $form->createView(),
        ]));

    }

     /**
     * @Route("/adminSection/deleteBread/{id}", name="deleteBread")
     * @param Bread $bread
     * @return Response
     */
    public function deleteBread($id,BreadRepository $repo)
    {
        $bread=$repo->find($id);
        
         
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($bread);
        $entityManager->flush();
   

       return $this->redirectToRoute('showAllBread');
       
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









    /*
    ******************* ************************************* 
     ************************************************************
      ***********************************************************
    ALL FUNCTIONS JUICE
    ***********************************************************
     ***********************************************************
      ***********************************************************
       *********************************************************** 
    */


    /** 
     * @Route("/adminSection/addJuice", name="addJuice")
     * @return Response
     */

    public function addJuice( Request $request)
    {
         $Juice=new Juice();
        
        $form = $this->createformBuilder($Juice)
            ->add('name', TextType::class)
            ->add('price', IntegerType::class)
            ->add('statement', ChoiceType::class, [
                'choices'  => [
                    'Actif' => 1,
                    'Inactif' => 0,
                  
                ]
            ])
            ->getForm();


            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                 $entityManager = $this->getDoctrine()->getManager();
                 $entityManager->persist($Juice);
                 $entityManager->flush();
                 return $this->redirectToRoute('showAllJuice');
            }           
        return new Response($this->renderView('pages/BackApp/Form/add.html.twig', [
            'form' => $form->createView(),
        ]));

    }
         /**
     * @Route("/adminSection/deleteJuice/{id}", name="deleteJuice")
     * @param Juice $juice
     * @return Response
     */
    public function deleteJuice($id,JuiceRepository $repo)
    {
        $juice=$repo->find($id);
        
         
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($juice);
        $entityManager->flush();
   

       return $this->redirectToRoute('showAllJuice');
       
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







    /******************** ************************************* 
     ************************************************************
      ***********************************************************
    ALL FUNCTIONS MENU
    ***********************************************************
     ***********************************************************
      ***********************************************************
       *********************************************************** 
    */

 /**
     * @Route("/adminSection/addMenu", name="addMenu")
     * @return Response
     */

    public function addMenu( Request $request)
    {
         $Menu=new Menu();
        
        $form = $this->createformBuilder($Menu)
            ->add('name', TextType::class)
            ->add('link', TextType::class)
            ->add('statement', ChoiceType::class, [
                'choices'  => [
                    'Actif' => 1,
                    'Inactif' => 0,
                  
                ]
            ])
            ->getForm();


            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                 $entityManager = $this->getDoctrine()->getManager();
                 $entityManager->persist($Menu);
                 $entityManager->flush();
                 return $this->redirectToRoute('showAllMenu');
            }           
        return new Response($this->renderView('pages/BackApp/Menu/add.html.twig', [
            'form' => $form->createView(),
        ]));

    }


         /**
     * @Route("/adminSection/deleteMenu/{id}", name="deleteMenu")
     * @param Menu $menu
     * @return Response
     */
    public function deleteMenu($id,MenuRepository $repo)
    {
        $menu=$repo->find($id);
        
         
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($menu);
        $entityManager->flush();
   

       return $this->redirectToRoute('showAllMenu');
       
    }



    /**
     * @Route("/adminSection/Menu/show", name="showAllMenu")
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