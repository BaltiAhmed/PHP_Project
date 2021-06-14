<?php
require_once '../controllers/UtilisateurController.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test</title>
</head>
<body>
<table border="1">
    <tr>
        <td>
            nom
        </td>
        <td>
            prenom
        </td>
        <td>
            email
        </td>
        <td>
            login
        </td>
        <td>
            password
        </td>
        <td>

        </td>
        <td>

        </td>

    </tr>


    <?php
    $useC = new UtilisateurController();
    $list = $useC->getAllUser();
    foreach ($list as $el) {
        ?>
        <tr>
            <td>
                <?php
                echo $el["nom"];
                ?>
            </td>
            <td>
                <?php
                echo $el["prenom"];
                ?>
            </td>
            <td>
                <?php
                echo $el["email"];
                ?>
            </td>
            <td>
                <?php
                echo $el["login"];
                ?>
            </td>
            <td>
                <?php
                echo $el["password"];
                ?>
            </td>
            <td>
                <input type="submit" value="Supprimer"/>
            </td>
            <td>
                <a href="">Modifier</a>
            </td>


        </tr>
        <?php
    }
    ?>


</table>
</body>
</html>


