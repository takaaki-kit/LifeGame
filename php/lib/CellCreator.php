<?php

require_once('Cell.php');

class CellCreator
{
    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function execute()
    {
        $cells = [];
        for($x = 1; $x <= $this->width; $x++){
            for($y = 1; $y <= $this->height; $y++){
                $cells[] = new Cell($x, $y, false);
            }
        }

        return $cells;
    }
}
