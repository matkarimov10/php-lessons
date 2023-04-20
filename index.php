<?php
$num1 = isset($_POST['num1']) ? $_POST['num1'] : 0;
$num2 = isset($_POST['num2']) ? $_POST['num2'] : 0;
if($num1 > $num2){
    $res = 'num1 katta';
}elseif ($num2 > $num1) {
    $res = 'num2 katta';
}else{
    $res = 'num1 va num2 teng';
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="post">
    <input type="text" name="num1" value="<?=$num1 ?>" placeholder="Enter num 1">
    <input type="text" name="num2" value="<?=$num2 ?>" placeholder="Enter num 2">
    <button type="submit" value="Submit">Submit</button>
    <input type="text" value="<?= $res?>">

</form>
</body>
</html>