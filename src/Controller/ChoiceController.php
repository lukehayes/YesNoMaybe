<?php

namespace App\Controller;

use App\Service\RandomChoice;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ChoiceController extends AbstractController
{
    #[Route('/', name: 'app_choice')]
    public function index(RandomChoice $randomChoice): Response
    {
        return $this->render('choice/index.html.twig', [
            'controller_name' => 'ChoiceController',
            'choice' => $randomChoice->makeChoice()
        ]);
    }
}
