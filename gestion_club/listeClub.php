<?php
require_once 'ClubController.php';

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
            id
        </td>
        <td>
            nom
        </td>
        <td>
            description
        </td>
        <td>
            adresse
        </td>
        <td>
            domaine
        </td>
        <td>

        </td>
        <td>

        </td>

    </tr>


    <?php
    $clubC = new ClubController();
    $list = $clubC->getAllClub();
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
                echo $el["nom"];
                ?>
            </td>
            <td>
                <?php
                echo $el["description"];
                ?>
            </td>
            <td>
                <?php
                echo $el["adresse"];
                ?>
            </td>
            <td>
                <?php
                echo $el["domaine"];
                ?>
            </td>
            <td>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <input type="text" name="id" value="<?php echo $el["id"]; ?>" hidden/>
                    <input type="submit" value="Supprimer"/>
                </form>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // collect value of input field
                    $id = 0;
                    $id = $_POST['id'];

                    $clubC = new ClubController();
                    $clubC->deleteClub($id);
                }
                ?>

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


