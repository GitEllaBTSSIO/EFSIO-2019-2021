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

        <?php
            // Variables
            $raz = false;

            // Remise à zéro des compteurs
            if(isset($_GET['raz']))
                $raz = $_GET['raz'];
            if($raz !== false)
                unset($_SESSION['compteur']);
        ?>
        
        <!-- Conteneur du formulaire -->
        <div id="conteneur" class="center">
            <!-- Résulats -->
            <table>
                <tr>
                    <th>Couleur</th>
                    <th>Nombre de Clic</th>
                </tr>
                <?php
                    // Variables
                    $compteur = false;

                    // Récuparation de la session
                    if(isset($_SESSION['compteur']))
                    {
                        $compteur = $_SESSION['compteur'];

                        // Affichage des résultats
                        foreach($compteur as $key => $value)
                        {
                            echo '<tr><td>'.$key.'</td><td>'.$value.'</td></tr>';
                        }
                    }
                ?>
            </table>
            <!-- Retour -->
            <div class="center">
                <input type="button" value="Retour" onclick="window.location.href='index.php'">
                <input type="button" value="R.A.Z. des compteurs" onclick="raz();">
            </div>
        </div>
    </body>
</html>

<!-- javascript -->
<script language="javascript">
    // Fonction de remise à zéro des compteurs
    raz = function()
    {
        if(confirm("Etes vous certain de vouloir remettre à zéro les compteurs ?"))
            window.location.href='resultat.php?raz=1'; 
    }
</script>
