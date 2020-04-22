<?php

namespace App\Controller\Admin;


use App\Entity\Property ;
use App\Form\PropertyType;
use App\Repository\PropertyRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class AdminPropertyController extends AbstractController
{

/**
 *  @var PropertyRepository
 */
private $repository;
/**
 * @var EntityManager
 */
private $entityManager;

    public function __construct(PropertyRepository $repository, EntityManagerInterface $entityManager)
    {
        $this->repository = $repository;
        $this->entityManager = $entityManager;
    }

    /**
    * @Route("/admin" , name="admin.property.index")
    * @return Response
    */
    public function index ()

    {
        $properties = $this->repository->findAll();
        return $this->render('admin/property/index.html.twig', compact('properties'));
    }

    /**
    * @Route("/admin/property/create", name="admin.property.new")
    * @param Property $property
    * @param Request $request
    */
    public function new(Request $request)
    {
        $property = new Property;
        $form = $this->createForm(PropertyType::class, $property);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $this->entityManager->persist($property);
            $this->entityManager->flush();
            $this->addFlash ("success", "Votre bien a été créé avec succès");
            return $this->redirectToRoute('admin.property.index');
        }
            return $this->render('admin/property/new.html.twig',[
                'property' => $property,
                'form' => $form->createView()
            ]);
        }

    /**
    * @Route("/admin/property/{id}", name="admin.property.edit", methods="GET|POST")
    * @return Response
    * @param Property $property
    * @param Request $request
    */
    public function edit(Property $property, Request $request)
    {

        $form = $this->createForm(PropertyType::class, $property);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $this->entityManager->flush();
            $this->addFlash ("success", "Votre bien a été modifié avec succès");
            return $this->redirectToRoute('admin.property.index');

        }


        return $this->render('admin/property/edit.html.twig',[
            'property' => $property,
            'form' => $form->createView()
        ]);
    }
    /**
    * @Route("/admin/property/{id}", name="admin.property.delete", methods="DELETE")
    * @return Response
    * @param Property $property
    */
   public function delete(Property $property, Request $request)
   {
        if ($this->isCsrfTokenValid('delete' . $property->getId(), $request->get('_token'))) {
           
            $this->entityManager->remove($property);
            $this->entityManager->flush();
            $this->addFlash("success", "Votre bien a été supprimé avec succès");
        }
        
        return $this->redirectToRoute('admin.property.index');

    
   }


}
