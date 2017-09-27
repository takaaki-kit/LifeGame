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
}
