<?php namespace App\Controllers;

class Helloworld extends BaseController
{
    public function show(){
        echo "Gema Annisa Hermastuti<br>" ;
        echo "1817051020";
    }
    public function index($name, $npm) {

        //echo $this->name;
        echo $name. "<br>";
        echo $npm. "<br>";
        //echo "Hello Gema !"

    } 
}