<?php

function calendrier($mois, $annee)
{
    $nb_jours = cal_days_in_month(CAL_GREGORIAN, $mois, $annee);

    echo "<table>";
    echo "<tr><th>Lun</th><th>Mar</th><th>Merc</th><th>Jeu</th><th>Ven</th><th>Sam</th><th>Dim</th></tr>";

    for ($i=1; $i<=$nb_jours; $i++) {
        $jour = cal_to_jd(CAL_GREGORIAN, $mois, $i, $annee);
        $jour_semaine = jddayofweek($jour);

        if ($i == $nb_jours) {
            if ($jour_semaine == 1) {
                echo "<tr>";
            }
            echo "<td class='case'>".$i."</td>";

        } elseif ($i==1) {
            echo "<tr>";
            if ($jour_semaine == 0) {
                $jour_semaine = 7;
            }
            for ($k = 1; $k!= $jour_semaine; $k++) {
                echo "<td></td>";
            }
            echo "<td class='case'>".$i."</td>";
            if ($jour_semaine==7){
                echo "</tr>";
            }

        } else {
            if ($jour_semaine == 1) {
                echo "<tr>";
            }
            echo "<td class='case'>".$i."</td>";

            if ($jour_semaine == 0) {
                echo "</tr>";
            }

        }

    }

    echo "</table>";
}

?>