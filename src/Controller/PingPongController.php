<?php

namespace App\Controller;

use App\Services\HandleScoreInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PingPongController extends AbstractController
{
    /**
     * @Route("/scorePingPong/joueur1/{score1<^[0-9]+$>}/joueur2/{score2<^[0-9]+$>}", name="ping_pong")
     */
    public function index(HandleScoreInterface $handler, int $score1, int $score2): Response
    {
        $currentState = $handler->HandleScore($score1, $score2);
        $say = $handler->sayHello();
        return $this->render('ping_pong/index.html.twig', [
            'score1' => $score1,
            'score2' => $score2,
            'currentState' => $currentState,
            'say' => $say,
        ]);
    }
}
