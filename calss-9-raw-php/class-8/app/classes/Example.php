<?php


namespace App\classes;


class Example
{
    public $startingNumber;
    public $endingNumber;
    public $i;
    public $result;
    public function __construct($data)
    {
        $this->startingNumber = $data['staringNumber'];
        $this->endingNumber = $data['endingNumber'];
    }







    public function index()
    {
        for ($this->i=$this->startingNumber;$this->i<=$this->endingNumber;$this->i++)
        {
            $this->result .= $this->i .' ';
        }
        return $this->result;
    }

}