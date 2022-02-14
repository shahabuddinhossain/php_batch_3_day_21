<?php


namespace App\classes;


trait Catagory
{
    public $a ='BITM';
    public $b ='BASIS';

    public function hello()
    {
        echo $this->b. " ". $this->b;
    }

}