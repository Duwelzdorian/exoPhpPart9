<?php
$daysInWeek = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];
$month = $_POST['month'];
$year = $_POST['year'];
// On initialise la var ci-dessous avec  la fonction cal_days_in_month qui permet
// de retourner le nombre de jours dans un mois, en prenant 
$numbDayInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
// On initialise la var ci-dessous avec la fonction date et le paramètre N
// qui permet de retourner le 1er jour du mois.
$firstDayOfTheMonth = date('N', mktime(0,0,0, $month, 1, $year));
?>