<?php
   $page_title = 'Haganya - Hakan Akgül - Anasayfa';
   $page_selector = 'home';

   $database = null;
      /*
   bootsrap grid
   
   col-*-*

     xs (for phones)
    sm (for tablets)
    md (for desktops)
    lg (for larger desktops)
   */
?>


    <!DOCTYPE html>
    <html lang=tr>

    <head>
        <title>
            <?php echo $page_title; ?>
        </title>
        <?php include('php/metatag.php');
        include('php/styles.php');
        include('php/googlescript.php');?>

        <!--Yönlendirme-->
   <!-- <META HTTP-EQUIV="default-style" CONTENT="0; URL=https://haganya.com">-->
<style> 
    .kutu {
        display: block;
        padding: 1rem;
        padding-top: 2px;
        border:1px;
        border-style: solid;
        border-color: #CCCCCC;
        border-radius: 1rem;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        overflow: hidden;
        }
</style>

    </head>

    <body class=body>

        <?php include('php/navigation.php');?>
        <?php include('database/ayar.php');?>

        <div class="container">
            <div class="row page-header">
                <h1 align="center">Anasayfa</h1>
            </div>
             
            <?php 
            $count = $database->query("select count(*) from yazilar")->fetch();

            for($i = $count[0]; $i>0; $i--) // son gelen üste. tabi burada yazi_id değerleri sıralıysa çalışır.
            {
                // 0 = id / 1 = baslik / 2 = icerik / 3 = kisa icerik / 4 = resim / 5 = link / 6=durum(0 aktif - 1 pasif)
                $veri = $database->prepare("select * from yazilar where yazi_id = ?");
                $veri->execute(array($i));
                $a = $veri->fetch();
                    if($a["durum"] == 0)
                    {
                        $card_baslik = $a["yazi_baslik"];
                        $card_icerik = $a["yazi_kisa_icerik"];
                        $card_resim = $a["yazi_resim"];
                        $card_link = "/yazilar/?id=$i";

                        include('php/card.php');
                    } 
            }

                $database = null;
            ?>

        </div>

        <?php include('php/footer.php');?>
        <?php include('php/scripts.php');?>

    </body>

    </html>

    <script>
        $(".<?php echo $page_selector;?>").last().addClass(" active");
    </script>