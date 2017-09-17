<?php

require_once('Cell.php');
require_once('NullCell.php');

class CellCreator
{
    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function initialize()
    {
        $cells = [];
        for($x = 0; $x <= $this->width+1; $x++){
            for($y = 0; $y <= $this->height+1; $y++){
                if($x == 0 || $y == 0 || $x > $this->width || $y > $this->height){
                    $cells[$x][$y] = new NullCell($x, $y, false);
                } else {
                    $cells[$x][$y] = new Cell($x, $y, false);
                }
            }
        }

        return $cells;
    }

    public function set_alive($x, $y, $cells)
    {
        $cells[$x][$y]->set_alive();

        return $cells;
    }
}
