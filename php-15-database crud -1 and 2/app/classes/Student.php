<?php


namespace App\classes;


class Student
{
    private $name;
    private $mobile;
    private $email;
    private $password;
    private $link;
    private $sql;
    private $queryResult;
    private $data = [];
    private $row;
    private $i;
    private $student_id;

    public function __construct($data = null)
    {
        if ($data)
        {
            $this->name         = $data['name'];
            $this->email        = $data['email'];
            $this->mobile       = $data['mobile'];
            $this->password     = md5($data['password']);
            if (isset($data['student_id']))
            {
                $this->student_id     = $data['student_id'];
            }
        }
    }
    public function save()
    {
        $this->link = mysqli_connect('localhost','root','','php-15-database');
        if ($this->link)
        {
            $this->sql = "INSERT INTO demo (name,email,password,mobile)VALUES('$this->name','$this->email','$this->password','$this->mobile')";
            if (mysqli_query($this->link,$this->sql))
            {
                header('Location:login.php?message=success');
            }
            else {
                die('Database establishment error!'.mysqli_error($this->link));
            }
        }
    }
    public function getAllStudentInfo()
    {
        $this->link = mysqli_connect('localhost','root','','php-15-database');
        $this->sql = "SELECT * FROM demo";
        if (mysqli_query($this->link, $this->sql)) {
            $this->queryResult = mysqli_query($this->link, $this->sql);
            $this->i = 0;
            while ($this->row = mysqli_fetch_assoc($this->queryResult))
            {
                $this->data[$this->i]['id']             = $this->row['id'];
                $this->data[$this->i]['name']           = $this->row['name'];
                $this->data[$this->i]['email']          = $this->row['email'];
                $this->data[$this->i]['mobile']         = $this->row['mobile'];
                $this->i++;
            }
            return $this->data;
        }
        else{
            die('Qurey Problem'.mysqli_error($this->link));
        }
    }
    public function delete($id)
    {
        $this->link = mysqli_connect('localhost','root','','php-15-database');
        $this->sql = "DELETE FROM demo WHERE id='$id'";
        mysqli_query($this->link,$this->sql);

    }
    public function getStudentInfoId($id)
    {
        $this->link = mysqli_connect('localhost','root','','php-15-database');
        $this->sql = "SELECT * FROM demo WHERE id='$id'";
        $this->queryResult = mysqli_query($this->link , $this->sql);
        return mysqli_fetch_assoc($this->queryResult);
        //return $this->getAllStudentInfo();
        //print_r(mysqli_fetch_assoc($this->queryResult));
    }
    public function update()
    {
        $this->link = mysqli_connect('localhost','root','','php-15-database');
        $this->sql = "UPDATE demo SET name='$this->name', email='$this->email', password='$this->password', mobile='$this->mobile' WHERE id='$this->student_id'";
        mysqli_query($this->link,$this->sql);
    }
    public function login()
    {
        header('Location:action.php?status=manage');
    }

}