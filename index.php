<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylecheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    
    <div class="container">
        <h1>Дано число N. Если число больше 10, то увеличьте на 100, иначе уменьшите на 30.</h1>
        <form action="add.php" method="post">
            <input type="text" name="task1" id="task1" placeholder="Введите число N" class="form-control">
            <button type="submit" name="sendTask" class="btn btn-success">Send</button>

        </form>
        
    </div>
</body>
</html>