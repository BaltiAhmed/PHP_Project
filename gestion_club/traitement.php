<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test</title>
</head>
<body>
<?php if (empty($_GET['id']) || empty($_GET['nom']) || empty($_GET['description']) || empty($_GET['adresse']) || empty($_GET['domaine'])) {
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


