<?php

require_once('CellCreator.php');
require_once('Cell.php');

class CellCreatorTest extends PHPUnit_Framework_TestCase
{
    public function test_指定した数のセルを作成する()
    {
        $cell_creator = new CellCreator(2, 2);
        $cells = $cell_creator->initialize();

        $expect_cells[1][1] = new Cell(1, 1, false);
        $expect_cells[2][1] = new Cell(2, 1, false);
        $expect_cells[1][2] = new Cell(1, 2, false);
        $expect_cells[2][2] = new Cell(2, 2, false);

        $this->assertEquals($expect_cells, $cells);
    }

    public function test_指定したセルを生状態にする()
    {
        $cell_creator = new CellCreator(2, 2);
        $cells = $cell_creator->set_alive(1, 2, $cell_creator->initialize());

        $this->assertTrue($cells[1][2]->is_alive());
    }
}
