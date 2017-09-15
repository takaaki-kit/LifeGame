<?php

class LifeGame
{
    private $field;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function start()
    {
        $field = new Field($this->width, $this->height);

        while(1){
            $field->generate();
        }
    }
}
