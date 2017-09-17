<?php

class CellMediator
{
    public function __construct($center_cell, $arround_cells)
    {
        $this->center_cell = $center_cell;
        $this->arround_cells = $arround_cells;
    }
}
