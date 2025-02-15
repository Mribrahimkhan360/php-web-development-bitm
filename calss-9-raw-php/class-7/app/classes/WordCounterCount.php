<?php


namespace App\classes;


class WordCounterCount
{
    public $givenString;
    public $totalWord;
    public $totalCharacter;
    public $result=[];

    public function __construct($data)
    {
        $this->givenString = $data['string'];
    }










    public function index()
    {
        $this->totalWord = str_word_count($this->givenString);
        $this->totalCharacter = strlen($this->givenString);

        $this->result = [
            'total_word' => $this->totalWord,
            'total_character' => $this->totalCharacter
        ];
        return $this->result;
    }
}