<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CVController extends AbstractController
{
    #[Route('/cv/{name?koubaa}/{firstname?fedi}/{age<\d{1,2}>?20}/{section<RT|GL>?RT}/{langue<fr|en>?fr}/{format?html}', name: 'cv')]
    public function cv($name,$firstname,$age,$section): Response
    {
        return $this->render('cv/index.html.twig', [
            'nom' => $name,
            'prenom' => $firstname,
            'age' => $age,
            'section' => $section
        ]);
    }
}
