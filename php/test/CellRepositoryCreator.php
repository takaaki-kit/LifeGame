<?php

require_once('CellRepositoryCreator.php');
require_once('Cell.php');

class CellRepositoryCreatorTest extends PHPUnit_Framework_TestCase
{
	public function test_指定したセルを作成する()
	{
		$cell_repository = CellRepositoryCreator::execute(2, 2);

		$expect = array(new Cell(1, 1), new Cell(1, 2), new Cell(2, 1), new Cell(2, 2));
		$this->assertEquals($expect, $cell_repository->all());
	}
}
