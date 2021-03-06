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

	public function test_指定したセルを生状態にする()
	{
		$cell_repository = new CellRepository();
		$cell_repository->add(new Cell(1, 1));
		$cell_repository->add(new Cell(1, 2));
		$cell_repository->add(new Cell(2, 1));

		$this->assertTrue($cell_repository->set_alive(1, 2));
	}

	public function test_指定したセルが存在しなければ何もしない()
	{
		$cell_repository = new CellRepository();
		$cell_repository->add(new Cell(1, 1));
		$cell_repository->add(new Cell(1, 2));
		$cell_repository->add(new Cell(2, 1));

		$this->assertFalse($cell_repository->set_alive(1, 3));
	}
}
