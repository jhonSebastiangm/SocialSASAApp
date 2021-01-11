<?php 

class Coments{
    public  $postId;
    public  $id;
    public  $name;
    public  $email;
    public  $body;

    public function getpostId(){
        return $this->postId;
    }
    public function getid(){
        return $this->id;
    }
    
    public function getname(){
        return $this->name;
    }

    public function getemail(){
        return $this->email;
    }
    public function getbody(){
        return $this->body ;
    }
   
}

?>