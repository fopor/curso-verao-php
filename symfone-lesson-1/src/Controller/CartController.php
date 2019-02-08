<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CartController extends AbstractController{
  /**
   * @Route("/cart")
   */
  public function index(){
    return $this->render('store/cart.html.twig', [
    ]); 
  }
}

