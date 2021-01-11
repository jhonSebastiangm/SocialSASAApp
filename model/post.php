<?php 

class Posts{
    public  $userId;
    public  $id;
    public  $title;
    public  $body;

    public function getuserId(){
        return $this->userId;
    }
    public function getid(){
        return $this->id;
    }
    
    public function gettitle(){
        return $this->title;
    }

    public function getbody(){
        return $this->body ;
    }
   
}

?>