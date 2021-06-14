<?php
require_once '../controllers/UtilisateurController.php';
require_once '../Models/Utilisateur.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <p>Votre nom : <input type="text" name="nom"/></p>
    <p>Votre prenom : <input type="text" name="prenom"/></p>
    <p>Votre email : <input type="text" name="email"/></p>
    <p>Votre login : <input type="text" name="login"/></p>
    <p>Votre password : <input type="text" name="password"/></p>

    <p><input type="submit" value="OK"></p>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    $user = new Utilisateur($nom, $prenom, $email, $login, $password);
    if (empty($name) && empty($prenom) && empty($email) && empty($login) && empty($password)) {

        echo "Name is empty";
    } else {
        $user = new Utilisateur($nom, $prenom, $email, $login, $password);
        $userC = new UtilisateurController();
        $userC->adduser($user);

    }
}
?>
</body>
</html>