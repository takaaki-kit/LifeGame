<?php

require_once('CellCreator.php');
require_once('CellMediators.php');

class CellMediatorTest extends PHPUnit_Framework_TestCase
{
    public function test_セルの次のステータスをチェック()
    {
        $cell_creator = new CellCreator(2, 2);
        $cell_mediators = new CellMediators(2, 2, $cell_creator->initialize());
        $cell_mediators = $cell_mediators->initialize();


        $cell_mediator = $cell_mediators[0];
        $this->assertInstanceOf('NullCell', $cell_mediator->arround_cells[0]);
        $this->assertInstanceOf('NullCell', $cell_mediator->arround_cells[1]);
        $this->assertInstanceOf('NullCell', $cell_mediator->arround_cells[2]);
        $this->assertInstanceOf('NullCell', $cell_mediator->arround_cells[3]);
        $this->assertInstanceOf('Cell', $cell_mediator->arround_cells[4]);
        $this->assertInstanceOf('NullCell', $cell_mediator->arround_cells[5]);
        $this->assertInstanceOf('Cell', $cell_mediator->arround_cells[6]);
        $this->assertInstanceOf('Cell', $cell_mediator->arround_cells[7]);
    }
}

