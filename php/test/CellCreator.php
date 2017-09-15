<?php

require_once('CellCreator.php');

class CellCreatorTest extends PHPUnit_Framework_TestCase
{
    public function test_指定した数のセルを作成する()
    {
        $cell_creator = new CellCreator(2, 2);
        $cells = $cell_creator->execute();

        $this->assertCount(4, $cells);
    }
}
