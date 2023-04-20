<?php
$a = isset($_POST['num1']) ? $_POST['num1'] : 0;
$b = isset($_POST['num2']) ? $_POST['num2'] : 0;
$c = isset($_POST['num3']) ? $_POST['num3'] : 0;
if($a < $b && $b < $c){
    $res = 'true';
}
else {
    $res = 'false';
}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document 2</title>
</head>
<body>
<form action="main.php" method="post">
    <input type="text" name="num1" value="<?=$a ?>" placeholder="Enter num 1">
    <input type="text" name="num2" value="<?=$b ?>" placeholder="Enter num 2">
    <input type="text" name="num3" value="<?=$c ?>" placeholder="Enter num 3">
    <button type="submit" value="Submit">Submit</button>
    <input type="text" value="<?= $res?>">

</body>
</html>
