<?php

    include_once("./helpers/url.php");
    include_once("./data/categories.php");
    include_once("./data/posts.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS stylesheer -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/style.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
    <title>BrainCode</title>
</head>
<body>
    <header>
        <a href="<?= $BASE_URL ?>" id="logo">
            <img src="<?= $BASE_URL ?>images/logo.png" alt="Logo Blog">
        </a>
        <nav>
            <ul id="navbar">
                <li><a href="<?= $BASE_URL ?>">Home</a></li>
                <li><a href="<?= $BASE_URL ?>">Categorias</a></li>
                <li><a href="<?= $BASE_URL ?>">Sobre</a></li>
                <li><a href="<?= $BASE_URL ?>contact.php">Contato</a></li>
            </ul>
        </nav>
    </header>