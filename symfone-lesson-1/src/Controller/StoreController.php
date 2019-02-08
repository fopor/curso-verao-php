<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class StoreController extends AbstractController{
  /**
   * @Route("/")
   */
  public function index(){
    return $this->render('store/index.html.twig', [
    ]); 
  }
}

