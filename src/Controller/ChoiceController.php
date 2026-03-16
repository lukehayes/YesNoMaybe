<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ChoiceController extends AbstractController
{
    #[Route('/', name: 'app_choice')]
    public function index(): Response
    {
        $rand = random_int(1,10);
        $choice = "...";

        if($rand < 5)
        {
            $choice = "No";
        }else if($rand > 5) {
            $choice = "Yes";
        }else {
            $choice = "Maybe";
        }

        return $this->render('choice/index.html.twig', [
            'controller_name' => 'ChoiceController',
            'choice' => $choice
        ]);
    }
}
