<?php

namespace App\classes;

class PasswordGenerate
{
    public $givinLength;
    public $passwordData = [];
    public $result;
    public $length;
    public $index;
    public $maxIndex;
    public $i;
    public $password = ""; // Initialize as an empty string

    public function __construct($data)
    {
        $this->givinLength = $data['givenNumber'];
    }

    public function index()
    {
        $this->passwordData = ['A', 'a', '#', '$', '.', '1', '0', 'T', '-', '_', '@'];
        $this->maxIndex = count($this->passwordData) - 1;

        for ($this->i = 0; $this->i < $this->givinLength; $this->i++) {
            $this->index = rand(0, $this->maxIndex);
            $this->password .= $this->passwordData[$this->index]; // Correct array access
        }
        return $this->password;
    }
}
