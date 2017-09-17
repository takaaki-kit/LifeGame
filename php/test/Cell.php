<?php

require_once('Cell.php');

class CellTest extends PHPUnit_Framework_TestCase
{
    public function test_セルを生状態にする()
    {
        $cell = new Cell(1, 1, false);
        $cell->set_alive();

        $this->assertTrue($cell->is_alive());
    }
}
