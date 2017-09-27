<?php

class Cell
{
    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
        $this->status = false;
    }

    public function set_alive()
    {
        $this->status = true;
    }

    public function is_alive()
    {
        return $this->status;
    }

	public function has_position($x, $y)
	{
		if ($this->x == $x && $this->y == $y) {
			return true;
		}

		return false;
	}
}
