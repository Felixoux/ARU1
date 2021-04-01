<?php 
$error = null;
$email = null;
$success = null;
    if(!empty($_SERVER['email'])) {
        $email = $_POST['email'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $file = '/emails.txt';
            file_put_contents($file, $email, FILE_APPEND);
            $success = "Votre email a bien été enregistré";
            $email = null;
        } else {
            $error = 'Email est invalide';
        }
    }
?>




<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsletter</title>
</head>
<body>

<?php if ($error): ?>
    <p class="font-normal alert">
        <?= $error ?>
    </p> 
<?php endif; ?>

<?php if ($success): ?>
    <p><?= $success ?> </p>
<?php endif; ?>


    <form class="newsletter__form newsletter__form--column flex" action="/newsletter.php" method="post">
        <input class="font-normal newsletter__mail__input" name="email" type="email" value="<?=htmlentities($email)?>" placeholder="pierre.durand@gmail.com" required>
        <button class="btn btn--subscribe mt-1 font-normal btn-hover__effect" type="submit">S'inscrire</button>
    </form> 

</body>
</html>