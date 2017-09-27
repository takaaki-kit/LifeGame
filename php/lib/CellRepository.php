<?php

require_once('Cell.php');

class CellRepository
{
	public function add()
	{
	}

	public function all()
	{
		return array(new Cell(1, 1));
	}
}
