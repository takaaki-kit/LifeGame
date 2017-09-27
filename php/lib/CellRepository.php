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

	public function set_alive($x, $y)
	{
		foreach ($this->cells as $cell) {
			if ($cell->has_position($x, $y)) {
				$cell->set_alive();
				return true;
			}
		}
		return false;
	}
}
