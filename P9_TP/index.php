<?php
$calendarMonths = ['1' => 'Janvier', '2' => 'Février', '3' => 'Mars', '4' => 'Avril', '5' => 'Mai', '6' => 'Juin', '7' => 'Juillet', '8' => 'Août', '9' => 'Septembre', '10' => 'Octobre', '11' => 'Novembre', '12' => 'Décembre'];
$calendarYears = [0, 2019, 2020, 2021, 2022, 2023, 2024, 2025, 2026, 2027, 2028, 2029, 2030, 2031, 2032, 2033, 2034, 2035, 2036, 2037, 2038, 2039, 2040, 2041, 2042, 2043, 2044, 2045, 2046, 2047, 2048, 2049, 2050]
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
        <title>Partie 9 TP</title>
    </head>
    <body>
        <div class="container" style="border: 1px solid silver;">
            <h3 class="my-2 mr-sm-2">Calendrier</h3>
        <form class="form-inline" method="post">
            <select name="selectMonths" class="my-1 mr-sm-2" id="select">
                <optgroup label="Mois">
                    <?php
                    foreach ($calendarMonths as $key => $value) {
                        ?>

                        <option value="<?= $key ?>"><?= $value ?></option>
                        <?php
                    }
                    ?>
                </optgroup>
            </select>

            <select name="selectYears" class="my-1 mr-sm-2" id="select">
                <optgroup label="Années">
                    <?php
                    for ($i = 1; $i <= 51; $i++) {
                        ?>

                        <option><?= $calendarYears[$i] ?></option>
                        <?php
                    }
                    ?>
                </optgroup>
            </select>

            <button type="submit" class="btn btn-dark my-1">Envoyé</button>
        </form>

        <?php
        if (isset($_POST['selectMonths']) && isset($_POST['selectYears'])) {
            ?>
        <p><b><?= strftime('%B %Y', mktime(0, 0, 0, $_POST['selectMonths'], 1, $_POST['selectYears']))?></b></p>
            
            <?php
            $day = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];
            ?>
            <table class="table table-bordered table-responsive-md">
                <thead class="thead-dark">
                    <tr>
                        <?php
                        foreach ($day as $dayName) {
                            ?>
                            <th><?= $dayName ?></th>
                            <?php
                        }
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($i = 0; $i < 7; $i++):
                        ?>
                        <tr><?php
                            for ($d = 1; $d < 8; $d++):
                                ?>
                                <td><?php
                                    if ($i == 1 and $d == strftime('%u', mktime(0, 0, 0, $_POST['selectMonths'], 1, $_POST['selectYears']))):
                                        echo strftime('%e', mktime(0, 0, 0, $_POST['selectMonths'], $k + 1, $_POST['selectYears']));
                                        $k++;
                                    elseif ($i == 1 and $d > strftime('%u', mktime(0, 0, 0, $_POST['selectMonths'], 1, $_POST['selectYears']))):
                                        echo strftime('%e', mktime(0, 0, 0, $_POST['selectMonths'], $k + 1, $_POST['selectYears']));
                                        $k++;
                                    elseif ($i > 1):
                                        if ($k >= date('t', mktime(0, 0, 0, $_POST['selectMonths'], 1, $_POST['selectYears']))):
                                            echo '';
                                        else:
                                            echo strftime('%e', mktime(0, 0, 0, $_POST['selectMonths'], $k + 1, $_POST['selectYears']));
                                            $k++;
                                        endif;
                                    endif;
                                    ?></td>
                                <?php
                            endfor;
                            ?>
                        </tr>
                        <?php
                    endfor;
                    ?>                    
                </tbody>
            </table>
            <?php
        }
        ?>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>