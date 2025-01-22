<?php


namespace App\classes;


class studentInfo
{
    public $result = [];
    public $subject = [];
    public function __construct($data)
    {
        $this->result = $data;
    }
    public function index()
    {




        return $this->result;
        //array_push($this->subject,$this->result['subject']);
    }

}