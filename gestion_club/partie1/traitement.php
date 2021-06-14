<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test</title>
</head>
<body>
<?php if (isset($_GET['id']) && isset($_GET['nom']) && isset($_GET['description']) && isset($_GET['adresse']) && isset($_GET['domaine'])) {
    ?>
    <table border="1">
        <tr>
            <td>
                ID
            </td>
            <td>
                NOM
            </td>
            <td>
                DESCRIPTION
            </td>
            <td>
                ADRESSE
            </td>
            <td>
                DOMAINE
            </td>
        </tr>
        <tr>
            <td>
                <?php echo $_GET['id']; ?>


            </td>
            <td>
                <?php
                echo $_GET['nom'];
                ?>
            </td>
            <td>
                <?php
                echo $_GET['description'];
                ?>
            </td>
            <td>
                <?php
                echo $_GET['adresse'];
                ?>
            </td>
            <td>
                <?php
                echo $_GET['domaine'];
                ?>
            </td>
        </tr>
    </table>
    <?php
} else {
    echo "tout les champs sont requie";
}; ?>
</body>
</html>


