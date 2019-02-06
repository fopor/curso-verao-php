<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LuckyController extends AbstractController{
	/**
	 * @Route("/lucky/number", name="app_lucky_number")
	 */

	public function number(){
		$number = random_int(0, 100);

		return $this->render('lucky/number.html.twig', [
			'number' => $number,
		]);	 
	}

	/**
	 * @Route("/lucky/number/{num}")
	 */
	public function show($num){
		if($num === "-1") {

			return $this->render('lucky/number.html.twig', [
				'number' => "olar",
			]);
		}

		return $this->render('lucky/number.html.twig', [
			'number' => $num,
		]);
	}	

}

