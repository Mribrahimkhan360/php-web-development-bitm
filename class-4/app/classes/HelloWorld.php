<?php

namespace App\classes;
class HelloWorld
{
    public $message;

    public function __construct()
    {
        $this->message = 'Hello world';
        $this->array = ['Ibrahim', 'Khan', 'Rana', 'Mollah'];
        $this->i = 0;
        $this->student = [
            0 => [
                'Name' => 'Ibrahim',
                'Mobile' => '01787147988',
                'Email' => 'mribrahimkhan360@gmail.com',
                'Address' => 'Shariatpur'
            ],
            1 => [
                'Name' => 'Ibrahim',
                'Mobile' => '01787147988',
                'Email' => 'mribrahimkhan360@gmail.com',
                'Address' => 'Shariatpur'
            ],
            2 => [
                'Name' => 'Ibrahim',
                'Mobile' => '01787147988',
                'Email' => 'mribrahimkhan360@gmail.com',
                'Address' => 'Shariatpur'
            ]
        ];
    }

    public function index()
    {
        header("Location: action.php?page=home");
        echo $this->message;

//        for ($this->i = 0; $this->i < count($this->array); $this->i++) {
//            echo '<br/>';
//            echo $this->array[$this->i];
//        }
//        foreach ($this->student as $this->index => $values) {
//            foreach ($values as $item){
//                echo '<br/>';
//                echo $item.'';
//            }
//    }

    }
}