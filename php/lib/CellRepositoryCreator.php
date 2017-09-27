<?php

require_once('Cell.php');
require_once('CellRepository.php');

class CellRepositoryCreator
{
	public static function execute($max_x, $max_y)
	{
		$cell_repository = new CellRepository();
		for ($x = 1; $x <= $max_x; $x++) {
			for ($y = 1; $y <= $max_y; $y++) {
				$cell = new Cell($x, $y);
				$cell_repository->add($cell);
			}
		}

		return $cell_repository;
	}
}
