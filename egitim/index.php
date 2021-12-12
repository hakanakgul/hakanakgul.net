<?php
   $page_title = 'Haganya - Hakan Akgül - Egitim';
   $page_selector = 'education';
?>

<!DOCTYPE html>
<html lang=tr>

<head>
    <title><?php echo $page_title; ?></title>
    <?php include('../php/metatag.php');
include('../php/styles.php');
include('../php/googlescript.php');?>

<style> 
    .kutu {
        display: block;
        padding: 1rem;
        padding-top: 2px;
        border:1px;
        border-style: solid;
        border-color: #CCCCCC;
        border-radius: 1rem;
        margin:1rem;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        overflow: hidden;
        }
</style>

</head>

    <body class=body>

<?php include('../php/navigation.php');?>
 
    <div class="container" align="center">
        <div class="row page-header">
                <h1>Eğitim Bilgilerim</h1>         
        </div>

        <div class="row" align="center">
                
                <div class="kutu col-lg-12">
                    <h2>Yüksek Lisans</h2>
                <h3>Çanakkale Onsekiz Mart Üniversitesi - Lisansüstü Eğitim Enstitüsü</h3>
                <hr> 
                    <p>Bilgisayar ve Öğretim Tenolojileri Eğitimi (BÖTE)</p> 
                    <p>2019 - 2021</p>
                    <p>TEZ: Eleştirel Düşünme ve BİT-Kod Çözme Becerileri Arasındaki İlişkinin İncelenmesi</p>
                    <p>GANO: 3.94 / 4.00</p>
                </div> 
                
                <div class="kutu col-lg-12">
                    <h2>Lisans</h2>
                <h3>Çanakkale Onsekiz Mart Üniversitesi - Eğitim Fakültesi</h3>
                <hr>
                    <p>Bilgisayar ve Öğretim Tenolojileri Öğretmenliği</p> 
                    <p>2017 - 2019</p>
                    <p>Bölüm Birincisi</p>
                    <p>GANO: 3.40 / 4.00</p>
                </div> 
               
                <div class="kutu col-lg-12">
                    <h2>Ön Lisans</h2>
                    <h3>İstanbul Üniversitesi - Teknik Bilimler MYO</h3>
                    <hr>
                    <p>Bilgisayar Programcılığı</p>
                    <p>2015 - 2017</p>
                    <P>GANO: 3.51 / 4.00</P>
                </div> 
                 
                 <div class="kutu col-lg-12">
                     <h2>Ön Lisans</h2>
                    <h3>Kırklareli Üniversitesi - Lüleburgaz MYO</h3>
                    <hr>
                    <p>Bilgisayar Programcılığı</p>
                    <p>2014 - 2015. Yatay geçiş ile ayrıldı.</p>
                    <P>GANO: 3.78 / 4.00</P>
                </div> 
                
                <div class="kutu col-lg-12">
                    <h2>Lise</h2>
                    <h3>Halkalı Mesleki ve Teknik Anadolu Lisesi</h3>
                    <hr>
                    <p>Bilişim Teknolojileri - Veritabanı Programcılığı</p>
                    <p>2010 - 2014</p>
                </div> 
        </div>

        
    </div>

<?php include('../php/scripts.php');?>
<br><br><br><br><hr>
<h2 align="center">Unutmadan bir de Disqus var!</h2>
<?php include('../php/disqus.php');?>
<?php include('../php/footer.php');?>
    </body>

</html>


<script>
        $(".<?php echo $page_selector;?>").last().addClass(" active");
</script>