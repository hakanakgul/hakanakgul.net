<?php
   $page_title = 'Haganya - Hakan Akgül - About';
   $page_selector = 'about';

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
    <title><?php echo $page_title; ?></title>
    <?php include('../php/metatag.php');
include('../php/styles.php');
include('../php/googlescript.php');?>
</head>

    <body class=body>

<?php include('../php/navigation.php');?>

        <div class="container">
             <div class="row">
                
            <div class="row page-header">
                <h1 align="center">Hakan AKGÜL Kimdir?</h1>
            </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                <br>
                    <img src="../static/pics/sa1.jpg" class="img-responsive img-thumbnail" alt="Cinque Terre">
                </div>
                
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <br>
                <blockquote>
                    <!-- Burası düzenlenecek. --> 
                    <p>Hakan Akgül, Şubat 1996'da İstanbul'da dünyaya geldi.</p>
                    <p>Okul hayatına başlayana kadar her şey oyundan ibaret olsa da okul ile birlikte bildiği dünya da değişmeye başladı.
                    Bilgisayar ve yazılım dünyasına olan ilgisi de bu zamanlarda başladı. İlkokul sıralarındayken bir gün bilgisayar öğretmenine merak ettiği bir soru yöneltti. 
                    Aldığı cevap Hakan Akgül'ü hiç tatmin etmemiş, aksine daha da meraklandırmış olmalı ki tam olarak o anda hayatının hangi alanda çalışarak devam ettirmek istediğine karar vermiş oldu.</p>
                    <p>Halkalı Anadolu Ticaret Meslek Lisesi'nde, Bilişim Teknolojileri bölümüne yerleşti.</p>
                    <p>Üniversite maratonuna, Kırklareli Üniversitesi Bilgisayar Programcılığı bölümünde 1 yıl geçirerek başladı.
                    <br>Ardından yatay geçiş ile İstanbul Üniversitesi Bilgisayar Programcılığında devam ederek önlisans eğitimini burada tamamladı.
                    <br>Dikey geçiş ile Çanakkale Onsekiz Mart Üniversitesi Bilgisayar ve Öğretim Teknolojileri Öğretmenliği'nde (BÖTE) Yerleşti. Lisans eğitimininden bölüm birincisi olarak mezun oldu.
                    </p>
                    <p>Yüksek lisans eğitimini Çanakkale Onsekiz Mart Üniversitesi Bilgisayar ve Öğretim Teknolojileri Eğitimi'nde tamamladı.</p>
                    <p><i>Eleştirel Düşünme ve BİT-Kod Çözme Becerileri Arasındaki İlişkinin İncelenmesi</i> isminde bir yüksek lisans tezi yazdı.</p>
                </div>
             
             </div>
        </div>


<?php include('../php/scripts.php');?>

<br><br><hr> 
<h2 align="center">Sorularınız varsa sizi şöyle alalım.</h2>
<hr>>

<?php include('../php/disqus.php'); ?>

<?php include('../php/footer.php');?>

    </body>

</html>



<script>
        $(".<?php echo $page_selector;?>").last().addClass(" active");
</script>