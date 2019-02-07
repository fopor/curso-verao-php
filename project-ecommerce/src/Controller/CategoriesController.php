<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Product;

class CategoriesController extends AbstractController{
  /**
   * @Route("/categories/{id}")
   */
  public function index($id){

    return $this->render('store/categories.html.twig', [
    ]); 
  }
}

