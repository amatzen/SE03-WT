<?php

class Vector {
    public int $x, $y;

    function __construct($x = 0, $y = 0) {
        $this->x = $x;
        $this->y = $y;
    }

    function plus(Vector $v2): Vector {
        $x = $this->x + $v2->x;
        $y = $this->y + $v2->y;

        return new Vector($x, $y);
    } 

    function minus(Vector $v2): Vector {
        $x = $this->x - $v2->x;
        $y = $this->y - $v2->y;

        return new Vector($x, $y);
    }

    function length(): float {
        $dX = $this->x - 0;
        $dY = $this->y - 0;

        return $dY / $dX;
    }
}

$v = new Vector(4, 5);
var_dump($v);

$v = $v->plus(new Vector(1, 3));
var_dump($v);

var_dump($v->length());