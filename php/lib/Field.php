<?php

require_once('Cell.php');
require_once('CellCreator.php');
require_once('CellMediators.php');

class Field
{
    private $cells;

    public function __construct($x, $y)
    {
        $this->width = $x;
        $this->height = $y;
        $this->cell_creator = new CellCreator($x, $y);
    }

    public function initialize()
    {
        $this->cells = $this->cell_creator->initialize();

        $cell_mediators = new CellMediators($this->width, $this->height, $this->cells);
        $this->cell_mediators = $cell_mediators->initialize();

        return $this->cells;
    }

    public function set_alive_cell($x, $y)
    {
        return $this->cell_creator->set_alive($x, $y, $this->cells);
    }

    public function generate()
    {
        return $this->cells;
        #foreach($cell_mediators as $cell_mediator){
        #    $cell_mediator->set_next_status();
        #}

        #foreach($cells as $cell){
        #    $cell->set_status();
        #}

        #return $cells;
    }
}
