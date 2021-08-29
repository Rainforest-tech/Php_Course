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
             Create task
         </h1>
            <form action="store.php" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="form-group">
                    <textarea name="content" class="form-control mt-2"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success mt-2">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>

