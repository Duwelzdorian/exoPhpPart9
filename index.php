<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Accueil</title>
    </head>
    <style>
        .aaa{
            margin-top: 50px;
            margin-left: 70px;
        }

        a {
            text-decoration: none;
            color: #751b82;
            outline-style: none;
        }

        a:visited {
            color: #751b82;
        }

        a:hover, a:focus, a:active {
            text-decoration: none;
            color: #F27405;
	}
        </style>

        <body class="aaa">
            <?php
            for ($i = 1; $i <= 8; $i++) {
                ?>
                <p><a href="P9exercice<?= $i ?>/index.php">Exercice <?= $i ?></a></p>
                <?php
            }
            ?>
            <p><a href="P9_TP/index.php">TP</a></p>
        </body>
    </html>
