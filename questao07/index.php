<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 07</title>
</head>
<body>
    
<?php

    $total = 0;

    for($i=0; $i<=100; $i++) {
        if($i%2 == 1) {
            $total += $i;
        }
    }

    echo $total;

?>

</body>
</html>