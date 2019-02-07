<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Product;

class ProductController extends AbstractController{
  /**
   * @Route("/product/{id}")
   */
  public function index($id){
    $product = new Product();
    $product->setName('Top Cellphone');

    return $this->render('store/product.html.twig', [
      'product' => $product
    ]); 
  }
}

