<?php
require_once 'VoitureController.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h3 class="titre">Liste des voiture</h3>
<table border="1">
    <tr>
        <td>
            id
        </td>
        <td>
            marque
        </td>
        <td>
            vitesse
        </td>
        <td>
            puissance
        </td>


    </tr>


    <?php
    $voitureC = new VoitureController();
    $list = $voitureC->getVoiture();
    foreach ($list as $el) {
        ?>
        <tr>
            <td>
                <?php
                echo $el["id"];
                ?>
            </td>
            <td>
                <?php
                echo $el["marque"];
                ?>
            </td>
            <td>
                <?php
                echo $el["vitesse"];
                ?>
            </td>
            <td>
                <?php
                echo $el["puissance"];
                ?>
            </td>


        </tr>
        <?php
    }
    ?>




</table>
</body>
</html>


