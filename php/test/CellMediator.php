<?php

require_once('CellCreator.php');
require_once('CellMediators.php');

class CellMediatorTest extends PHPUnit_Framework_TestCase
{
    public function test_セルの次のステータスをチェック()
    {
        $cell_creator = new CellCreator(2, 2);
        $cell_mediators = new CellMediators(2, 2, $cell_creator->initialize());

        foreach($cell_mediators->initialize() as $cell_mediator)
        {
            echo('---------------------------------');
            var_dump($cell_mediator);
        }
    }
}

