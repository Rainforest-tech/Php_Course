<?php
require 'vendor/autoload.php';





function addTask ($data)
{
    $pdo = new PDO('mysql:host=localhost; dbname=test','root', '');
    $sql = 'INSERT into tasks (title, content) VALUES (:title, :content)';
    $statement = $pdo->prepare($sql);
    $statement->execute($data);

    header('Location: /kazazh_php/index.php');exit;
}

addTask($_POST);