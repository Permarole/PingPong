<?php

namespace App\Services;

class HandleScoreInterface
{
    public function HandleScore(int $score1, int $score2): string
    {
        if ($score1 < 0 || $score2 < 0) return "Scores are invalid";

        if ($score1 >= 12 || $score2 >= 12) {
            if (abs($score1 - $score2) < 2) return "The game is ongoing";

            if ($score1 > $score2) return "Player 1 wins";
            
            return "Player 2 wins";
        }
        return "The game is ongoing";
    }
    public function sayHello(): string
    {
        return "Hello John, ";
    }
}

