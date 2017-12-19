<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="style.css"/>
        <title>Exercice 8</title>
    </head>
    <body>
        <div class="container-fuild">
            <form method="POST">
                <input type="text" name="myString"/>
                <input type="submit" value="Valider"/>
            </form>
            <?php
            $monTableau = array('Marc', 'Sophie', 'Maguy', 'Jonathan', 'Jennifer');
            if (isset($_POST['myString'])) {
                $chaine = $_POST['myString'];

                function addToArray($array, $chaine) {
                    $result = $array;
                    array_push($result, $chaine);
                    return $result;
                }

                foreach (addToArray($monTableau, $chaine) as $value) {
                    echo $value
                    ?> <br/><?php
                }
            } else {
                foreach ($monTableau as $value) {
                    echo $value
                    ?> <br/><?php
                }
            }
            ?>

            <a href="../index.php"><button>Retour</button></a>
        </div>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </body>
</html>
