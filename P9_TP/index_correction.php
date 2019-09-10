<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
        <title>Partie 9 TP</title>
    </head>
    <body>
        <form method="POST" action="index_correction.php">
            <label for="month">Mois :</label><select name="month">
                <option value="1">01-Janvier</option>
                <option value="2">02-Février</option>
                <option value="3">03-Mars</option>
                <option value="4">04-Avril</option>
                <option value="5">05-Mai</option>
                <option value="6">06-Juin</option>
                <option value="7">07-Juillet</option>
                <option value="8">08-Août</option>
                <option value="9">09-Septembre</option>
                <option value="10">10-Octobre</option>
                <option value="11">11-Novembre</option>
                <option value="12">12-Décembre</option>
            </select>

            <label for="year">Année :</label><select name="year">
                <?php
                // 
                for ($year = 1930; $year <= 2070; $year++)
                    ;
                ?>
                <option value="<?= $year; ?>"><?= $year; ?></option>
                <?php
                endfor;
                ?>
            </select>
            <button type="submit">Envoyer</button>
        </form>
        <?php
        // Condition qui permet de vérifier si les valeurs month et year ont été
        if (isset($_POST['month']) AND isset($_POST['year'])) {
            // Fonction qui permet d'affilier les données d'une page php externe à l'index
            include 'file_correction.php';
            // test  echo $numbDayInMonth;
            // test echo $firstDayOfTheMonth;
            ?>
        
            <table> 
                <thead>
                    <?php
                    // Boucle pour parcourir le tableau daysInWeek et retranscrit la valeur day correspondante
                    foreach ($daysInWeek as $day) :
                        ?>
                    <th><?= $day; ?></th> <?php endforeach; ?>

            </thead><?php
            $outsideDayOfTheMonth = 1;
            $date = 1;

            // While (TANT QUE) affiche une ligne du tableau supplémentaire tant qu'on a pas dépassé
            while ($date <= $nbDay):
                ?>
                <tr> <?php
                 // Boucle qui crée 7 colonnes (qui va creer le tableau) en fonction des jours qu'il y aura dans la semaine
                    for ($i = 1; $i <= 7; $i++):
                        // Condition qui permet d'afficher les cellules en fonction du nombre de jours dans le mois et de le grisé
                        if ($outsideDayOfTheMonth < $firstDayOfTheMonth || $date > $numbDayInMonth)
                            $outsideDayofTheMonth++;
                        ?>
                    <!-- Crée une cellule vide si le jour ne fait pas partie du mois sélectionné -->
                        <td></td>
                        <?php
                        // On crée une cellule avec la date du jour, si il fait bien parti du mois sélectionné
                        else :
                            // En plus d'afficher la date du jour, on l'incrémente pour pas
                        ?> <td> <?= $date++; ?> </td>
                        <?php
                        endif;
                    endfor;
                    ?>
                </tr>
                <?php
            endwhile;
            ?>
    </table>
        }
        ?>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>