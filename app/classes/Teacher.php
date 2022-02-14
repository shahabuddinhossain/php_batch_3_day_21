<?php


namespace App\classes;


abstract class Teacher
{
    public $x = 10;
    public $y = 10;

    public function add ()
    {
        echo $this->y + $this->y;
    }

}