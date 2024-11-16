<?php
    session_start();
?>
<style>
    .stileTabella {
        border: solid, black, 1px;
        border-collapse: collapse;
    }
</style>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>riepilogo</title>
    </head>
    <body>
        <ul>
        <?php
            foreach ($_SESSION["frasiImportanti"] as $frase) {
                echo "<li>$frase</li>";
            }

        ?>
        </ul>
        <table class="stileTabella">
            <tr>
                <th class="stileTabella">N° LETTERE</th>
                <th class="stileTabella">N° PAROLE</th>
            </tr>
        <?php
            echo "<tr><td class='stileTabella'>" . $_SESSION["nLettere"] . "</td><td class='stileTabella'>" . $_SESSION["nParole"] . "</td></tr>";
        ?>
        </table>
        <a href="frase.html">Ritorna alla pagina form</a>
    </body>
</html>