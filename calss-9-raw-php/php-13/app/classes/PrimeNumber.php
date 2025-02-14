<?php

namespace App\classes;

class PrimeNumber
{
    private $givenNumber;
    private $i;
    private $result;


    public function __construct($data)
    {
        $this->givenNumber = $data['givenNumber'];
    }

    public function index()
    {

        for ($this->i=2;$this->i<$this->givenNumber;$this->i++)
        {
            if ($this->givenNumber % $this->i==0)
            {
                $this->result = "Your Number $this->givenNumber is not prime";
                break;
            }
            else{
                continue;
            }
        }
        if (!$this->result){
            $this->result = "Your Number $this->givenNumber is not prime";
        }
       return $this->result;
    }

}