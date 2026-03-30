<?php
include_once "pdo.php";

$db = new DB();
$pdo = $db->connect();
if($_GET !== null){

        // Получение данных из таблицы student по полю name
        $id = intval($_GET['id']);
        echo $id;
    echo gettype($id);
//        $id = 2;
        $stmt = $pdo->prepare("SELECT name FROM student WHERE id=?");
        $stmt->bindParam(1, $id);
        $stmt->execute();


    $results = $stmt->fetchAll();
    print_r($results);
//    $result = json_encode($results);
//    echo $result;
}else{
    return false;
}	