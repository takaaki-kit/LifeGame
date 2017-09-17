<?php

require_once('Cell.php');
require_once('CellCreator.php');

class Field
{
    private $cells;

    public function __construct($x, $y)
    {
        $this->cell_creator = new CellCreator($x, $y);
    }

    public function initialize()
    {
        return $this->cells = $this->cell_creator->initialize();
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
