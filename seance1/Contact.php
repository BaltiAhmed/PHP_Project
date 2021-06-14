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
    </tr>
    <tr>
        <td>
            <?php if (isset($_GET['nom'])) {
                echo $_GET['nom'];
            }; ?>
        </td>
        <td>
            <?php if (isset($_GET['prenom'])) {
                echo $_GET['prenom'];
            }; ?>
        </td>
        <td>
            <?php if (isset($_GET['email'])) {
                echo $_GET['email'];
            }; ?>
        </td>
        <td>
            <?php if (isset($_GET['login'])) {
                echo $_GET['login'];
            }; ?>
        </td>
        <td>
            <?php if (isset($_GET['password'])) {
                echo $_GET['password'];
            }; ?>
        </td>
    </tr>
</table>
</body>
</html>


