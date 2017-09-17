<?php

require_once('Field.php');
require_once('Cell.php');

class FieldTest extends PHPUnit_Framework_TestCase
{
    public function test_次のターンのセルを返す()
    {
        $field = new Field(2, 2);
        $next_field = $field->generate();

        $expect_cells[1][1] = new Cell(1, 1, false);
        $expect_cells[2][1] = new Cell(2, 1, false);
        $expect_cells[1][2] = new Cell(1, 2, false);
        $expect_cells[2][2] = new Cell(2, 2, false);

        $this->assertEquals($expect_cells, $next_field);
    }
}
