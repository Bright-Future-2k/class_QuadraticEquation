<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="my.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<form method="post">
    <table>
        <tr>
            <th colspan="3">Quadratic_Equation</th>
        </tr>
        <tr>
            <td>Number X1: <input type="number" name="num1" placeholder="Number"></td>
            <td>Number X2: <input type="number" name="num2" placeholder="Number"></td>
            <td>Number X3: <input type="number" name="num3" placeholder="Number"></td>
            <td><input type="submit" value="Submit"></td>
        </tr>
    </table>
</form>
<body>
<?php include("Quadratic_Equation.php") ?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];


    $ptrinh = new Quadratic_equation($num1, $num2, $num3);
    if ($ptrinh->getDiscriminant() < 0) {
        echo "vo nghiem. ";
    } else if ($ptrinh->getDiscriminant() == 0) {
        echo "co nghiem kep la: ". $ptrinh->getRootTwice();
    } else {
        echo "co 2 nghiem la: " . $ptrinh->getRoot1() . " + " . $ptrinh->getRoot2();
    }
}

?>

</body>
</html>
