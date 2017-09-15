<?php

require_once('Cell.php');
require_once('CellCreator.php');

class Field
{
    private $cells;

    public function __construct($x, $y)
    {
        $cell_creator = new CellCreator($x, $y);
        $this->cells = $cell_creator->execute();
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
