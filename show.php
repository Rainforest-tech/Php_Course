<?php

$pdo = new PDO('mysql:host=localhost; dbname=test','root', '');
$sql = 'SELECT * FROM tasks WHERE id=:id';
$statement = $pdo->prepare($sql);
$statement->bindParam('id',$_GET['id']);
$statement->execute();
$task = $statement->fetch(PDO::FETCH_ASSOC);

?>

<!doctype html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>
                <?=$task['title'];?>
            </h1>
            <p>
                <?=$task['content'];?>
            </p>
            <a href="/kazazh_php/index.php">Go back</a>
        </div>
    </div>
</div>
</body>
</html>

