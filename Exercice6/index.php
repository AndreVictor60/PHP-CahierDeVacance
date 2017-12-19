<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="style.css"/>
        <title>Exercice 6</title>
    </head>
    <body>
        <div class="container-fuild">
            <?php
            $monTableau = array('Marc', 'Sophie', 'Maguy', 'Jonathan', 'Jennifer');

            function countArray($array) {
                $count = 0;
                foreach ($array as $value) {
                    $count++;
                }
                return $count;
            }

            echo 'Le nombre de ligne est de ' . countArray($monTableau);
            ?>
            <br/>
            <a href="../index.php"><button>Retour</button></a>
        </div>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </body>
</html>