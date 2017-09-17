<?php

require_once('CellMediator.php');

class CellMediators
{
    public function __construct($width, $height, $cells)
    {
        $this->width = $width;
        $this->height = $height;
        $this->cells = $cells;
    }

    public function initialize()
    {
        $cell_mediators = [];
        for($x = 1; $x <= $this->width; $x++){
            for($y = 1; $y <= $this->height; $y++){
                $cell_mediators[] = new CellMediator($this->cells[$x][$y], array(
                    $this->cells[$this->width-1][$this->height-1],
                    $this->cells[$this->width][$this->height-1],
                    $this->cells[$this->width+1][$this->height-1],
                    $this->cells[$this->width-1][$this->height],
                    $this->cells[$this->width+1][$this->height],
                    $this->cells[$this->width-1][$this->height+1],
                    $this->cells[$this->width][$this->height+1],
                    $this->cells[$this->width+1][$this->height+1],
                ));
            }
        }

        return $cell_mediators;
    }
}
