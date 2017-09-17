<?php

class Cell
{
    public function __construct($x, $y, $status)
    {
        $this->x = $x;
        $this->y = $y;
        $this->status = $status;
    }

    public function set_alive()
    {
        $this->status = true;
    }

    public function is_alive()
    {
        return $this->status;
    }
}
