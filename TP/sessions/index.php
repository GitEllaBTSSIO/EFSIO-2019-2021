<?php session_start(); ?>
<!--
    CLERC Pierre-François le 18/09/2019
    index.php
    Page PHP pour le TP sur les sessions PHP de SLAM5 BTS SIO
-->
<html>
    <head>
        <title>TP Sessions PHP</title>
        <meta charset="UTF-8">
        <link href="style.css" rel="stylesheet" type="text/css" media="screen">
    </head>
    <body>
        <h1>TP Sessions PHP</h1>

        <!-- Conteneur du formulaire -->
        <div id="conteneur">
            <!-- Boutons -->
            <div class="center">
                <!-- Bleu -->
                <input type="button" value="Bleu" onclick="window.location.href='index.php?color=Bleu'" class="bleu">
                <!-- Jaune -->
                <input type="button" value="Jaune" onclick="window.location.href='index.php?color=Jaune'" class="jaune">
                <!-- Rouge -->
                <input type="button" value="Rouge" onclick="window.location.href='index.php?color=Rouge'" class="rouge">
                <!-- Violet -->
                <input type="button" value="Violet" onclick="window.location.href='index.php?color=Violet'" class="violet">
            </div>
            <!-- Resultat -->
            <div class="center">
                <input type="button" value="Résultat" onclick="window.location.href='resultat.php'">
            </div>
        </div>

        <?php
            // Variables
            $color = false;

            // Récupération de la couleur
            if(isset($_GET['color']))
                $color = $_GET['color'];

            // Update du compteur
            if($color !== false)
            {
                if(isset($_SESSION['compteur'][$color]))
                    $_SESSION['compteur'][$color]++;
                else
                    $_SESSION['compteur'][$color] = 1;
            }
        ?>
    </body>
</html>
