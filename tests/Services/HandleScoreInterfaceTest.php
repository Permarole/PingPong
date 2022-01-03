<?php

use App\Services\HandleScoreInterface;
use PHPUnit\Framework\TestCase;

final class HandleScoreInterfaceTest extends TestCase
{
    public function testHandleScore(): void
    {
        $handler = new HandleScoreInterface();


        $score1 = 0;
        $score2 = 4;
        $this->assertSame("The game is ongoing", $handler->HandleScore($score1, $score2));

        $score1 = 11;
        $score2 = 12;
        $this->assertSame("The game is ongoing", $handler->HandleScore($score1, $score2));

        $score1 = 13;
        $score2 = 10;
        $this->assertSame("Player 1 wins", $handler->HandleScore($score1, $score2));

        $score1 = 4;
        $score2 = 12;
        $this->assertSame("Player 2 wins", $handler->HandleScore($score1, $score2));

        $score1 = 4;
        $score2 = 4;
        $this->assertSame("The game is ongoing", $handler->HandleScore($score1, $score2));

        $score1 = -1;
        $score2 = 4;
        $this->assertSame("Scores are invalid", $handler->HandleScore($score1, $score2));
    }
}
