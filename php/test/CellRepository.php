<?php

require_once('CellRepository.php');
require_once('Cell.php');

class CellRepositoryTest extends PHPUnit_Framework_TestCase
{
	public function test_セルを追加する()
	{
		$cell_repository = new CellRepository();
		$cell_repository->add(new Cell(1, 1));

		$expect = array(new Cell(1, 1));
		$this->assertEquals($expect, $cell_repository->all());
	}
}