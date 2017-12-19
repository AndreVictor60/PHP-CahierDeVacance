<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="style.css"/>
        <title>Exercice 5</title>
    </head>
    <body>
        <div class="container-fuild">
            <?php
            $monTableau = array('Marc', 'Sophie', 'Maguy', 'Jonathan', 'Jennifer');
            foreach ($monTableau as $value) {
                if (strlen($value) % 2 == 0) {
                    echo 'Il est pair' . "\n" . ' | Bonjour ' . $value . ' | Il est égal à ' . strlen($value);
                    ?>
                    <br/>
                    <?php
                } else {
                    echo 'Il est impair' . "\n" . ' | Bonjour ' . $value . ' | Il est égal à ' . strlen($value);
                    ?>
                    <br/>
                    <?php
                }
            }
            ?>
            <a href="../index.php"><button>Retour</button></a>
        </div>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </body>
</html>