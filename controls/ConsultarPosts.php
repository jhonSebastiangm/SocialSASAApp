<?php
require_once '../model/post.php';
$id = $_GET['id'];
$objeto = new Posts();
$objeto = json_decode( file_get_contents("https://jsonplaceholder.typicode.com/posts?userId=$id"), FALSE );
$json = array();
for ($i=0; $i < count($objeto) ; $i++) { 
    $var= $objeto[$i]->userId." ".$objeto[$i]->id." ".$objeto[$i]->title." ".$objeto[$i]->body."<br>";
    $json[] = array(
        'userId' => $objeto[$i]->userId,
        'id' => $objeto[$i]->id,
        'title' => $objeto[$i]->title,
        'body' => $objeto[$i]->body
    );
}
$jsonstring = json_encode($json);
echo $jsonstring;
?>

