<!DOCTYPE html>
<html>
<head>
    <!-- Este arquivo foi criado dentro do htdocs do XAMPP e visualizado a partir do localhost com o uso do Apache -->

    <!-- Requeried meta tags -->
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'> 

    <!-- PHP -->
    <?php 

    ?>

    <title>Estrutura de repetição - do while</title>
</head>
<body>
    <?php
        $c = 1;
        do {
            echo $c;
            $c++;
        } while ($c <= 10)
    ?>
</body>
</html>
