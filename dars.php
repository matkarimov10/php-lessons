<?php
$a = isset($_POST['num1']) ? $_POST['num1'] : 0;
$b = isset($_POST['num2']) ? $_POST['num2'] : 0;
$c = isset($_POST['num3']) ? $_POST['num3'] : 0;
//if($a < $b && $c ==$a< 8){
//    $res = 'true';
//}
if(5<$a && $a<$c == ($b-6)) {
    $res = 'true';
}
//if (($a/$b)<7 && 7<$c==0){
//    $res='true';
//}
//if (($c/7)+$b<8==$a-7){
//    $res='true';
//}
else{
    $res='false';
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
<form action="" method="post">
    <label for="son1">1-son
        <input id="son1" type="text" name="num1" value="<?=$a ?>" placeholder="Enter num 1">
    </label>
    <label for="son2">2-son
        <input id="son2" type="text" name="num2" value="<?=$b ?>" placeholder="Enter num 2">
    </label>
    <label for="son3">3-son
        <input id="son3" type="text" name="num3" value="<?=$c ?>" placeholder="Enter num 3">
    </label>
    <button type="submit" value="Submit">Submit</button>
    <label>
        <input type="text" value="<?= $res?>">
    </label>

</body>
</html>
