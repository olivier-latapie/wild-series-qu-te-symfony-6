<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/', name: 'program_')]
class ProgramController extends AbstractController
{
    #[Route('/index', name: 'index')]
    public function index(): Response
    {
        $wild = '<h1> bonjour </h1>';

        if (isset ($_GET['id'])) {
            $id = intval($_GET['id']);
            return $this->redirectToRoute('program_show', ['id' => $id]);
        }
        return $this->render('home/index.html.twig', [
            'website' => $wild
        ]);

    }

    #[Route('index/show/{id}', methods: ['GET'], name: 'show')]
    public function show(int $id): Response
    {
        return $this->render('program/show.html.twig', [
            'page' => $id,
        ]);

    }

}