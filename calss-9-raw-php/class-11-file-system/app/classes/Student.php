<?php


namespace App\classes;


class Student
{
    private $name;
    private $email;
    private $mobile;
    private $file;
    private $fileName;
    private $data;
    public function __construct($data=null)
    {
        if ($data){
            $this->name = $data['name'];
            $this->email = $data['email'];
            $this->mobile = $data['mobile'];
        }
    }
    public function index()
    {
        $this->fileName = './db.txt';
        $this->file = fopen($this->fileName,'a');
        $this->data = "$this->name, $this->email, $this->mobile$";
        fwrite($this->file, $this->data);
        fclose($this->file);
        return 'Data save successfully!';
    }
    public function getAllStudentInfo()
    {
        echo 'Hello World';

    }

}