<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PingPongFonctionalTest extends WebTestCase
{


    public function testPageSuccessful()
    {
        $client = self::createClient();
        $client->request('GET', '/scorePingPong/joueur1/11/joueur2/13');

        $this->assertTrue($this->client->getResponse()->isSuccessful());
    }

    public function urlProvider()
    {
        yield ['/scorePingPong/joueur1/11/joueur2/13'];
        yield ['/scorePingPong/player1/10/player2/12'];
        yield ['/scorePingPong/player1/11/player2/13'];
        yield ['/scorePingPong/player1/12/player2/6'];

        // return [
        //     ['/scorePingPong/joueur1/11/joueur2/13'],
        //     ['/scorePingPong/player1/10/player2/12'],
        //     ['/scorePingPong/player1/11/player2/13'],
        //     ['/scorePingPong/player1/12/player2/6']
        // ];
    }


    // /**
    //  * @dataProvider badUrlProvider
    //  */
    // public function testPageNotFound($url)
    // {
    //     self::ensureKernelShutdown();
    //     $client = self::createClient();
    //     $client->request('GET', $url);

    //     $this->assertFalse($client->getResponse()->isSuccessful());
    // }

    // public function badUrlProvider()
    // {
    //     yield ['/scorePingPong/player1/-10/player2/12'];
    //     yield ['/scorePingPong/player1/-5/player2/-3'];
    //     yield ['/scorePingPong/player1/-11/player2/-13'];
    // }
}
