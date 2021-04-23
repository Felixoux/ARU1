<?php 
    function convertTitle(string $title) {
        $delete = array("/", ".", "pages", "php");
        $temp = str_replace($delete, "", $title);
        return str_replace("_", " ", $temp) ;
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="shortcut icon" href="/img/svg/logo-aru1-morgane.svg">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= convertTitle($_SERVER['SCRIPT_NAME']) ?> | Aru1</title>
    <link rel="stylesheet" href="/css/style.css">
</head>