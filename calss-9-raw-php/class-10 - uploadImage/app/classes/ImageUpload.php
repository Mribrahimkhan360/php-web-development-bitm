<?php


namespace App\classes;


class ImageUpload
{
    private $post;
    private $file;
    private $directory;
    private $imageName;
    private $check;
    private $fileType;

    public function __construct($data,$file)
    {
        $this->post = $data;
        $this->file = $file;

    }


    public function index()
    {
        //echo '<pre>';
        //print_r($this->post);
        //print_r($this->file);
        //echo '</pre';
        /*======= directory create with default image =======*/
        $this->imageName = $this->file['image']['name'];
        $this->directory = '../assets/img/'.$this->imageName;


        $this->fileType = pathinfo($this->imageName,PATHINFO_EXTENSION);
        /*======= directory create with default image =======*/

        $this->check = getimagesize($this->file['image']['tmp_name']);
        //echo '<pre>';
        //print_r($this->check);

        //echo '</pre>';
        //echo $this->$check;
        //move_uploaded_file($_FILES['image']['tmp_name'],$this->directory);

        //$fileType = pathinfo($this->file['image']['name'],PATHINFO_EXTENSION);
        //echo pathinfo($this->file['image']['name'],PATHINFO_EXTENSION);
        //echo pathinfo($this->file['image']['name'],PATHINFO_EXTENSION);
        if ($this->check){
            if (!file_exists($this->directory)){
                if ($this->fileType == 'jpg' || $this->fileType == 'png'){
                    move_uploaded_file($this->file['image']['tmp_name'],$this->directory);
                    return [
                        'name'    =>   $this->post['name'],
                        'image'   =>   $this->directory
                    ];
                }else{
                    echo 'Please change your image extension!';
                }
            }else{
                die('Sorry..File alredy exist!');
            }
        }
        else{
            echo 'File type should be jpg or png!';
        }
    }

}