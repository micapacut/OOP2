<?php
function ADD($n, $m){
    $sum= $n + $m;
    return $sum;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form ation="" method="post">
        <label for="num1">Enter First Number</label>
        <input type="num" name="num1" id="num1">
        <label for="number2">Enter Second Number</label>
        <input type="num" name="num2" id="num2">
        <input type="submit" name="submit">

    </form>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        $num1=$_POST['num1'];
        $num2=$_POST['num2'];
        $result=ADD($num1,$num2);
        echo "The sum of $num1 and $num2 is $result";

    }
?>