<?php 


class   Address{
     public  $street;
     public   $suite;
     public   $city;
     public   $zipcode;

     public   $geo;
  
    
    public function getstreet(){
        return $this->street;
    }
    public function setstreet($street){
        $this-> street = $street;
        return $this;
    }
    public function getsuite(){
        return $this->suite;
    }
    public function setsuite($suite){
        $this-> suite = $suite;
        return $this;
    }
    public function getcity(){
        return $this->city;
    }
    public function setcity($city){
        $this-> city = $city;
        return $this;
    }
    public function getzipcode(){
        return $this->zipcode;
    }
    public function setemail($zipcode){
        $this-> zipcode = $zipcode;
        return $this;
    }

}

?>