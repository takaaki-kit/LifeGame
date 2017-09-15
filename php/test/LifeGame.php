<?php

require_once('LifeGame.php');
require_once('Field.php');

class LifeGameTest extends PHPUnit_Framework_TestCase
{
    public function test_ゲームを始める()
    {
        $game = new LifeGame(2, 2);
        $game->start();

        $this->fail('はよ実装せえ');
    }
}
