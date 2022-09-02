<?php
include('func.php');

if($_SERVER['REQUEST_METHOD'] === 'POST'){ 
    $numbers = $_POST['number'];
    $arr = explode(",",  $numbers);
    echo( getNo($arr));
}




?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="number" placeholder="enter numbers less than 20" value="<?php echo $numbers ?>">
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>