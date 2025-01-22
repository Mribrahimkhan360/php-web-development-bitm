<?php


namespace App\classes;


class WordCharacterCount
{
    public $givenString;
    public $totalWord;
    public $totalcharacter;
    public $result = [];

    public function __construct($data)
    {
        $this->givenString = $data ['name_string'];
    }










    public function index()
    {
        $this->totalWord = str_word_count($this->givenString);
        $this->totalcharacter = strlen($this->givenString);

        $this->result = [
            'total_word' => $this->totalWord,
            'total_character' => $this->totalcharacter
            ];
        return $this->result;
    }
}