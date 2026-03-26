<?php
if($_POST !==null){
	$nickname='nickname';
	$pass = $_POST['pass'];
	$stmt = $pdo->prepare('INSERT INTO  library (nickname, pass) VALUES (?,?)');
	$stmt->bindParam(1,$nickname);
	$stmt->bindParam(2,$pass);
	$stmt->execute();
}else{
	return false;
}