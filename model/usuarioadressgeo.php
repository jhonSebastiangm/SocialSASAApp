<?php 

class   Geo{
     public  $lat;
     public   $lng;

    public function getlat(){
        return $this->lat;
    }
    public function setlat($lat){
        $this-> lat = $lat;
        return $this;
    }
    public function getlng(){
        return $this->lng;
    }
    public function setlng($lng){
        $this-> lng = $lng;
        return $this;
    }
    
}

?>