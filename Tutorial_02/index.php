<?php
function makeDiamondShape($row)
{
    if (!is_numeric($row)) {
        echo "must be a number";
        return;
    }

    $row = intval($row);

    if ($row % 2 === 0) {
        echo "must be an odd number";
        return;
    }

    $spaces = ($row - 1) / 2;
    $stars = 1;

    for ($i = 0; $i < $row; $i++) {
        for ($j = 0; $j < $spaces; $j++) {
            echo "&nbsp;&nbsp;";
        }

        for ($j = 0; $j < $stars; $j++) {
            echo "*";
        }

        echo "<br>";

        if ($i < ($row - 1) / 2) {
            $spaces--;
            $stars += 2;
        } else {
            $spaces++;
            $stars -= 2;
        }
    }
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
        <h1 class="diamondheader">Diamond Shape</h1>
        <?php makeDiamondShape(11); ?>
    </div>
</body>

</html>