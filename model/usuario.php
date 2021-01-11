<?php 
require_once 'usuarioaddress.php';

class   Usuarios{
    public  $id;
    public   $name;
    public   $username;
    public   $email;
    public   $phone;
    public   $website;
    public   $address;    
    public function getid(){
        return $this->id;
    }
    public function setid($id){
        $this-> id = $id;
        return $this;
    }
    public function getname(){
        return $this->name;
    }
    public function setname($name){
        $this-> name = $name;
        return $this;
    }
    public function getUsername(){
        return $this->Username;
    }
    public function setUsername($Username){
        $this-> Username = $Username;
        return $this;
    }
    public function getemail(){
        return $this->email;
    }
    public function setemail($email){
        $this-> email = $email;
        return $this;
    }
   

    public function getphone(){
        return $this->phone;
    }
    public function setphone($phone){
        $this-> phone = $phone;
        return $this;
    }
    public function getwebsite(){
        return $this->website;
    }
    public function setwebsite($website){
        $this-> website = $website;
        return $this;
    }

    public function getaddress(){
        return $this->address;
    }
    public function setaddress($address){
        $this-> address = $address;
        return $this;
    }
}

?>