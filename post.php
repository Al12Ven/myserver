<?php
// Взаимодействие с front
include_once "pdo.php";

$db = new DB();
$pdo = $db->connect();	

if($_POST !== null){

//        $nickname = $_POST['nickname'];
//        $pass = $_POST['pass'];

    $fam = "fam";
    $name = "name";

        $stmt = $pdo->prepare("INSERT INTO student (fam, name) VALUES (?, ?)");
        $stmt->bindParam(1, $fam);
        $stmt->bindParam(2, $name);
        $stmt->execute();
}else{
    return false;
}