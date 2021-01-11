<?php
require_once '../model/coment.php';
$id = $_GET['id'];
$objeto = new Coments();
$objeto = json_decode( file_get_contents("https://jsonplaceholder.typicode.com/comments?postId=$id"), FALSE );
$json = array();
for ($i=0; $i < count($objeto) ; $i++) { 
    $var= $objeto[$i]->postId." ".$objeto[$i]->id." ".$objeto[$i]->name." ".$objeto[$i]->email." ".$objeto[$i]->body."<br>";
    $json[] = array(
        'postId' => $objeto[$i]->postId,
        'id' => $objeto[$i]->id,
        'name' => $objeto[$i]->name,
        'email' => $objeto[$i]->email,
        'body' => $objeto[$i]->body
    );
}
$jsonstring = json_encode($json);
echo $jsonstring;
?>
