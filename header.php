<!DOCTYPE html>
<html lang="pt-br">

<?php 
    session_start();

    // IMPORT VARS
    require './config/_vars.php';

    // IMPORT ROUTS
    require './config/_routs.php';
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid Test</title>

    <meta name="description" content="Aplicativo para testes de COVID">
    <meta name="keywords" content="Aplicativo web, covid, teste online, saúde">

    <link rel="shortcut icon" href="<?= ROOT ?>/img/favicon.png" type="image/x-icon">
   
    <!-- TOOLS -->
    <link rel="stylesheet" href="./tools/html5shiv-printshiv.js">

   <!-- DEFAULT -->
    <link rel="stylesheet" href="<?= ROOT ?>css/app.css">


</head>
<body class="wallpaper-<?= $config['page']?>">
<div class="filter-background"></div>
    