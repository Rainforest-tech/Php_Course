<?php



function showTask()
{
    $pdo = new PDO('mysql:host=localhost; dbname=test','root', '');
    $sql = 'SELECT * FROM tasks WHERE id=:id';
    $statement = $pdo->prepare($sql);
    $statement->bindParam('id',$_GET['id']);
    $statement->execute();
    $task = $statement->fetch(PDO::FETCH_ASSOC);
    return $task;
}

$task = showTask();

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
                Edit task
            </h1>
            <form action="update.php?id=<?=$task['id'];?>" method="post">
                <div class="form-group">
                        <input type="text" class="form-control" name="title" value="<?=$task['title'];?>">
                </div>
                <div class="form-group">
                        <textarea  class="form-control mt-2" name="content" value="<?=$task['content'];?>"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-warning mt-2">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>

