<?php

function drawChessBorad($rows, $cols)
{
    if (!is_numeric($rows) && !is_numeric($cols)) {
        echo "$rows and $cols parameters must be numbers.";
    } elseif (!is_numeric($rows)) {
        echo "$rows parameter must be a number.";
    } elseif (!is_numeric($cols)) {
        echo "$cols parameter must be a number.";
    } elseif ($rows <= 0 && $cols <= 0) {
        echo "$rows and $cols parameters must be greater than 0.";
    } elseif ($rows <= 0) {
        echo "$rows parameter must be greater than 0.";
    } elseif ($cols <= 0) {
        echo "$cols parameter must be greater than 0.";
    } else {
        // Code to draw the chessboard
        echo "Chessboard drawn successfully.";
    }


  echo "<table>";
    for ($row = 1; $row <= $rows; $row++) {
        echo "<tr>";
        for ($column = 1; $column <= $cols; $column++) {
            if (($row + $column) % 2 == 0) {
                echo "<td class='black'></td>";
            } else {
                echo "<td></td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="wrapper">
    <h1 class="chessboardheader">
        Chess Board
    </h1>
    <?php 
    drawChessBorad(8, 8); 
    
    ?>

    </div>
</body>
</html>