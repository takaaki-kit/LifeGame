<?php

class NullCell
{
    public function __construct($x, $y, $status)
    {
        $this->x = $x;
        $this->y = $y;
        $this->status = $status;
    }

    public function is_alive()
    {
        return false;
    }
}
