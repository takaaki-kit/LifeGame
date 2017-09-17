<?php

require_once('CellCreator.php');
require_once('CellMediators.php');

class CellMediatorsTest extends PHPUnit_Framework_TestCase
{
    public function test_中心セルとその周りのセルのやりとりをええ感じにするやつを作る()
    {
        $cell_creator = new CellCreator(2, 2);
        $cell_mediators = new CellMediators(2, 2, $cell_creator->initialize());

        $this->assertCount(4, $cell_mediators->initialize());
    }
}
