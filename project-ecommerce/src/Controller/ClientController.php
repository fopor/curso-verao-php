<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Task;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class ClientController extends AbstractController{
  /**
   * @Route("/client/form")
   */
  function viewForm()
  {
    $form = $this->createFormBuilder()
      ->add('task', TextType::class)
      ->add('dueDate', DateType::class)
      ->add('save', SubmitType::class, ['label' => 'Create Task'])
      ->getForm();

    return $this->render('client/form.html.twig', [
      'form' => $form->createView(),
    ]);
  }

}

