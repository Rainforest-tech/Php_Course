<?php
require 'vendor/autoload.php';



$pdo = new PDO('mysql:host=localhost; dbname=test','root', '');
$sql = 'INSERT into tasks (title, content) VALUES (:title, :content)';
$statement = $pdo->prepare($sql);
$statement->execute($_POST);

header('Location: /kazazh_php/index.php');exit;