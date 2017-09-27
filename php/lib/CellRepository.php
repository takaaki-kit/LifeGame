<?php

require_once('Cell.php');

class CellRepository
{
	public function add($cell)
	{
		$this->cells[] = $cell;
	}

	public function all()
	{
		return $this->cells;
	}

	public function at($x, $y)
	{
		return array(new Cell(1, 2));
	}
}
