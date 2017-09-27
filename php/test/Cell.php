<?php

require_once('Cell.php');

class CellTest extends PHPUnit_Framework_TestCase
{
    public function test_セルを生状態にする()
    {
        $cell = new Cell(1, 1);
        $cell->set_alive();

        $this->assertTrue($cell->is_alive());
    }

	public function test_セルの位置があっていれば真()
	{
        $cell = new Cell(1, 1);

		$this->assertTrue($cell->has_position(1, 1));
	}
}
