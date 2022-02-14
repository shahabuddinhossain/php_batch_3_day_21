<?php


namespace App\classes;
use App\classes\User;
use App\classes\ExampleOne;
use App\classes\Catagory;

class Student extends User implements ExampleOne, ExapleTwo
{
    use Catagory;
    public static $area = 'Firmgate';


    protected $country ='Bangladesh';

    public function __construct()
    {
        $this->name = 'Riaj';
        $this->city = 'Savar';
    }

    public function manage()
    {
        echo $this->country."<br/>";
        echo $this->name."<br/>";
        echo $this->city."<br/>";

        echo $this->index()."<br/>";

        echo self::$area;


    }

    public function one()
    {
        // TODO: Implement one() method.
        echo "\nHello World";
    }

    public function two()
    {
        // TODO: Implement two() method.
        echo "/nHello World two";
    }

    public function three()
    {
        // TODO: Implement three() method.
        echo "\n Hello World Three";
    }

    public function ten()
    {
        // TODO: Implement ten() method.
        echo "\n Hello World from ten";
    }

    public function ten1()
    {
        // TODO: Implement ten1() method.
        echo "\n Hello World from ten1";
    }

    public static function demo()
    {
        echo 'Static Hello World';
    }



}