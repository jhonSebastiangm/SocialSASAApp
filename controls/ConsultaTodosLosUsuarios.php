<?php

require_once '../model/usuario.php';
$objeto = new Usuarios();
$objeto = json_decode( file_get_contents("https://jsonplaceholder.typicode.com/users"), FALSE );
$json = array();
for ($i=0; $i < count($objeto) ; $i++) { 
  $json[] = array(
        'id' => $objeto[$i]->id,
        'name' => $objeto[$i]->name,
        'username' => $objeto[$i]->username,
        'email' => $objeto[$i]->email,
        'phone' => $objeto[$i]->phone,
        'website' => $objeto[$i]->website
    );
}
$jsonstring = json_encode($json);
echo $jsonstring;
?>