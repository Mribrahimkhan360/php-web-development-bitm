<?php

namespace App\classes;
class HelloWorld
{
    public $message;
    public function __construct()
    {
        $this->message = 'Hello World';
        $this->firstNumber = 25;
        $this->lastNumber = 20;


    }
    public function index(){
        echo $this->message;
        echo "<br/>";
        echo $this->firstNumber % $this->lastNumber;

        // addation
        echo $this->firstNumber+$this->lastNumber;
        //subtraction
        echo $this->firstNumber-$this->lastNumber;
        // divied
        echo '<br/>';
        echo $this->firstNumber+$this->lastNumber;


        echo gettype($this->firstNumber);


        switch ($this->lastNumber)
        {
            case 10:
                echo 'Hello World';
                break;
            case 20:
                echo 'Hello One';
                break;
            case 30:
                echo '<br/>';
                echo 'Hello Two';
                break;
            case 40:
                echo 'Hello THree';
                break;
        }
        // last=30
        // first =2
        for ($this->firstNumber;$this->firstNumber>$this->lastNumber;$this->lastNumber++){
            echo 'Hello World';
            echo '<br/>';
        }
    }
}