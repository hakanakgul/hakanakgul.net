<?php
if (isset($_GET['id'])) {
    $yazi_id = $_GET['id'];

    include('../database/ayar.php');
    $veri = $database->prepare("select * from yazilar where yazi_id=?");
    // 0 = id / 1 = baslik / 2 = icerik / 3 = kisa icerik / 4 = resim / 5 = link / 6=durum(0 aktif - 1 pasif)
    $veri->execute(array($yazi_id));
    $a = $veri->fetch();
    if ($a["yazi_id"] == $yazi_id && $a["durum"] == 0) {
        $page_title = "Haganya - Hakan Akgül - $a[1]";
        $page_selector = 'home';
    } else {
        header("Location:../");
        $database = null;
    }
} else {
    header("Location:../");
}

?>

<!DOCTYPE html>
<html lang=tr>

<head>
    <title><?php echo $page_title; ?></title>
    <?php include('../php/metatag.php');
    include('../php/styles.php');
    include('../php/googlescript.php'); ?>

    <style>
        .kutu {
            display: block;
            padding: 1rem;
            padding-top: 2px;
            border: 1px;
            border-style: solid;
            border-color: #CCCCCC;
            border-radius: 1rem;
            margin: 1rem;
        }
    </style>

</head>

<body class=body>
    <form action="index.php" method="get"></form>
    <?php include('../php/navigation.php'); ?>

    <div class="container" align="center">

        <div class="row" align="left">

            <?php

            $card_baslik = $a["yazi_baslik"];
            $card_resim = $a["yazi_resim"];
            $card_icerik = $a["yazi_icerik"];
            $card_link = $a["yazi_link"];
            include('../php/cardDetayIcerik.php');

            ?>

        </div>


    </div>

    </div>

    <?php include('../php/scripts.php'); ?>
    <br>
    <hr>
    <h2 align="center">Soru ve Öneriler</h2>
    <?php include('../php/disqus.php'); ?>
    <?php include('../php/footer.php'); ?>
</body>

</html>


<script>
    $(".<?php echo $page_selector; ?>").last().addClass(" active");
</script>