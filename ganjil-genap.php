<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table >
        <tr>
            <td>Ganjil</td>
            <td>Genap</td>
        </tr>
        <?php

        $i = 1;
            while($i <=10){
        ?>
        <tr>
            <td><?php if(($i % 2) == 0){
                echo $i;
            } ?></td>
            <td><?php if(($i % 2) == 0){
                echo $i;
            } ?></td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>