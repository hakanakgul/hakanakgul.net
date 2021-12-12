<?php
   $page_title = 'Haganya - Hakan Akgül - Contact';
   $page_selector = 'contact';
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
                <h1>Nasıl İletişime Geçebilirim?</h1>         
        </div>

        <div class="row" align="center">

            <div class="kutu col-lg-12">
                <h3>Linkedin</h3>
                <hr>
                    <p>Linkedin, haganya.com içerisinde bulunmayan benim ile ilgili daha fazla profesyonel bilgiye erişmek mümkün.</p>
                    <a target=_blank href=https://www.linkedin.com/in/hakan-akgul//><i class="fa fa-linkedin" style=font-size:6rem;padding:5px></i></a>
                </div> 

                <div class="kutu col-lg-12">
                <h3>Instagram</h3>
                <hr>
                    <p>Şu instagram hayatıma girdiğinden beri sosyal medya konusunda farklı bir bakış açısına sahip oldum. Kısa ve öz; uygulamayı aç, sayfayı aşağıya sürükle, iki kere ekrana dokun. </p> 
                    <p>Bu kadar basit.</p>
                    <a target=_blank href=https://www.instagram.com/hakannakgul/><i class="fa fa-instagram" style=font-size:6rem;padding:5px></i></a>
                </div> 
                
                <div class="kutu col-lg-12">
                    <h3>Youtube</h3>
                    <hr>
                    <p>Çılgınlar gibi video izlediğimiz. Televizyonların yerini alan bir DEV !. Tabii ki Youtube kanalım da var. Hem de içerisinde çeşitli eğitim serileri ile birlikte...</p>
                    <p></p>
                    <a target=_blank href=https://www.youtube.com/MrHakanakgul><i class="fa fa-youtube-play" style=font-size:6rem;padding:10px></i></a>
                 </div> 
                
                 <div class="kutu col-lg-12">
                    <h3>Facebook</h3>
                    <hr>
                    <p>Eski popülerliğini yitirdi benim gözümde. Diğerleri arasında oldukça karmaşık bir yapıya sahip olsa da ilk göz ağrımız olur kendileri. O yüzden eklemesem olmazdı.</p>
                    <p>Faceden eklesene.</p>
                    <a target=_blank href=https://www.facebook.com/haganya><i class="fa fa-facebook-square" style=font-size:6rem;padding:10px></i></a>
                </div> 
                
                <div class="kutu col-lg-12">
                    <h3>E-Mail</h3>
                    <hr>
                    <p>Tüm bunlar yetmedi ve e-mail mi göndermek istiyorsun? Ne ! yoksa siteye mail gönderebileceğin bir alan yapmadım mı? </p>
                    <p>Biliyorum. İşte e-mail adresim</p>
                    <a target=_blank href="mailto:hakanakgul34@gmail.com"><i class="fa fa-envelope" style=font-size:6rem;padding:10px></i></a>
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