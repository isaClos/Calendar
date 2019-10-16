<?php
$mois = date('m');
$annee = date('y');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Un calendrier en ligne</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Isabelle Closse">
    <meta name="description" content="Un calendrier en ligne.">
    <meta name="robots" content="all">

    <link href="css/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="content1">
        <img src="img/arrow-1293400__340.png" id="img1" alt="">
        <img src="img/arrow-988169__340.png" id="img2" alt="">
    </div>

    <div id="content">

    </div>

    <script src="js/jQuery/jquery.min.js"></script>
    <script src="js/bootstrap/bootstrap.js"></script>
    <script type="text/javascript">
        jQuery(function ($) {

            let mois = <?php echo $mois;?>;
                let annee = <?php echo $annee;?>;
            $(document).ready(function () {
                $("#content").load("calendrier.php?mois="+ mois+ "&annee="+annee+"");

            })

        });

    </script>
</body>

</html>