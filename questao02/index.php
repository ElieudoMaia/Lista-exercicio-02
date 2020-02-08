<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 02</title>
</head>
<body>
    
    <?php

        $total = $_GET['total'];

        for($i=0; $i<$total; $i++) {
            echo "É possível repetir várias linhas em PHP. Esta linha foi repetida $i vezes.<br />";
        }

    ?>

</body>
</html>