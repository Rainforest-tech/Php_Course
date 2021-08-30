<?php

class QueryBuilder
{
    function getAllTasks()
    {
        $pdo = new PDO('mysql:host=localhost; dbname=test', 'root', '');
        $sql = 'SELECT * FROM tasks';
        $statement = $pdo->prepare($sql);
        $statement->execute();
        $tasks = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $tasks;
    }

    function addTask($data)
    {
        $pdo = new PDO('mysql:host=localhost; dbname=test', 'root', '');
        $sql = 'INSERT into tasks (title, content) VALUES (:title, :content)';
        $statement = $pdo->prepare($sql);
        $statement->execute($data);

        header('Location: /kazazh_php/index.php');
        exit;
    }

    function getTask($id)
    {
        $pdo = new PDO('mysql:host=localhost; dbname=test','root', '');
        $sql = 'SELECT * FROM tasks WHERE id=:id';
        $statement = $pdo->prepare($sql);
        $statement->bindParam('id', $id);
        $statement->execute();
        $task = $statement->fetch(PDO::FETCH_ASSOC);
        return $task;
    }

    function updateTask($data)
    {
        $pdo = new PDO('mysql:host=localhost; dbname=test','root', '');
        $sql = 'UPDATE tasks SET title=:title, content=:content WHERE id=:id';
        $statement = $pdo->prepare($sql);
        $statement->execute($data);

        header('Location: /kazazh_php'); exit;
    }

    function deleteTask($id)
    {
        $sql = 'DELETE  FROM tasks WHERE id=:id';
        $pdo = new PDO('mysql:host=localhost; dbname=test;', 'root', '');
        $statement = $pdo->prepare($sql);
        $statement->bindParam(':id', $id);
        $statement->execute();

        header('Location: /kazazh_php'); exit;
    }
}

