<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$arrInt = [9, 4, 42, -1, -35, 89, -9, 0, -34, -35];
echo 'Mang so nguyen khoi tao: ' . implode(', ', $arrInt) . '<br>';
include 'function.php';
echo 'So nho nhat trong mang la: ' . showMinArray($arrInt) . ' nam o vi tri: ' . implode(', ', indexMinArray($arrInt));
?>
</body>
</html>
