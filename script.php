<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            if (!isset($_SESSION["frasiImportanti"])) {
                $_SESSION["frasiImportanti"] = array();
            }
            if (!isset($_SESSION["nParole"])) {
                $_SESSION["nParole"] = 0;
                $_SESSION["nLettere"] = 0;
            }
            $frase = $_POST["frase"];
            $importanza = $_POST["importanza"];
            echo "<p>Frase: " . $frase . "</p>";
            echo "<p>Importanza: " . $importanza . "</p>";
            if ($importanza == "4") {
                array_push($_SESSION["frasiImportanti"], $frase);
            }
            $_SESSION["nParole"] += str_word_count($frase);
            $_SESSION["nLettere"] += strlen($frase);
        ?>
        <a href="frase.html">Ritorna alla pagina precedente</a>
    </body>
</html>