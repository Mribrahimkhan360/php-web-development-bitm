<?php


namespace App\classes;


class WordCountController
{
//    public $totalWord;
//    public $stringInput;
//    public $totalCharacter;
//    public $result = [];
//    public function __construct($data)
//    {
//        $this->stringInput = $data['stringInput'];
//
//    }
//    public function index(){
//        $this->totalWord = str_word_count($this->stringInput);
//        $this->totalCharacter = strlen($this->stringInput);
//
//        $this->result = [
//            'total_word' => $this->totalWord,
//            'total_character' => $this->totalCharacter
//        ];
//        return $this->result;
//
//    }
    public $totalWord;
    public $totalCharacter;
    public $givenString;
    public $result = [];







    
    public function __construct($data)
    {
        $this->givenString = $data['givinString'];
    }
    public function index(){
        $this->totalWord = str_word_count($this->givenString);
        $this->totalCharacter = strlen($this->givenString);

        $this->result = [
          'total_word' => $this->totalWord,
          'total_character' => $this->totalCharacter
        ];
        return $this->result;
    }
}