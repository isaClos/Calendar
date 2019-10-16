<?php
$mois = $_GET['mois'];
$annee = $_GET['annee'];

include ('functions.php');
?>
<div>
    <?php calendrier($mois, $annee); ?>
</div>