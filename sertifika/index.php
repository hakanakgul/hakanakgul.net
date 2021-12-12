<?php
$page_title = 'Haganya - Hakan Akgül - Certificates';
$page_selector = 'certificate';
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
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }
    </style>

</head>

<body class=body>

    <?php include('../php/navigation.php'); ?>

    <div class="container" align="center">
        <div class="row page-header">
            <h1>Katıldığım Seminerler ve Aldığım Sertifikalar</h1>
        </div>

        <div class="row" align="center">

            <div class="kutu col-lg">
                <h3>Algoritma, Programlama ve Veri Yapılarına Giriş</h3>
                <hr>
                <p>BTK Akademi </p>
                <p>Eğitmen: Zafer Cömert</p>
            </div>

            <div class="kutu col-lg">
                <h3>Bilgi Teknolojilerine Giriş</h3>
                <hr>
                <p>BTK Akademi </p>
                <p>Eğitmen: Şadi Evren Şeker</p>
            </div>

            <div class="kutu col-lg">
                <h3>API ve API Testi</h3>
                <hr>
                <p>BTK Akademi </p>
                <p>Eğitmenler: Hüsnü Fatih Çavuş, Salih Kıralioğlu</p>
            </div>

            <div class="kutu col-lg">
                <h3>Algoritma Tasarımı</h3>
                <hr>
                <p>BTK Akademi </p>
                <p>Eğitmen: Zafer Cömert</p>
            </div>

            <div class="kutu col-lg">
                <h3>Ekran Bağımlılığı</h3>
                <hr>
                <p>BTK Akademi </p>
                <p>Eğitmen: Nurçin Gülşah Aksakallı</p>
            </div>

            <div class="kutu col-lg">
                <h3>Unity İle Dijital Oyun Geliştirmeye Giriş</h3>
                <hr>
                <p>BTK Akademi </p>
                <p>Eğitmen: Muhammed Emre Sevük</p>
            </div>

            <div class="kutu col-lg">
                <h3>Unity İle Eğitici Oyunlar</h3>
                <hr>
                <p>BTK Akademi </p>
                <p>Eğitmen: Sebahattin Soylu</p>
            </div>

            <div class="kutu col-lg">
                <h3>Web of Science Core Collection: Keşif burada başlıyor!</h3>
                <hr>
                <p>Web of Science Group</p>
                <p>on Tuesday 31 March, 2020 Presented by Derya Soguksu</p>
            </div>
            <div class="kutu col-lg">
                <h3>Elsevier Turkiye 5N1K Online Seminer Serisi - Yayin Yapmaya Nasil Hazirlanabilirim?</h3>
                <hr>
                <p>Elsevier</p>
                <p>TUBITAK ULAKBIM EKUAL, on Friday 20 March, 2020 Presented by Saide Sak</p>
                <p><a target="_blank" href="https://researcheracademy.elsevier.com/workshop/ed2108da-8686-4580-bb23-88b05fab74fd"></a></p>
            </div>
            <div class="kutu col-lg">
                <h3>3D Yazıcıların Farklı Sektörlerde Kullanımı</h3>
                <hr>
                <p>Bilgeİş</p>
                <p><a target="_blank" href="https://bilgeis.net/moodle/mod/simplecertificate/verify.php?code=cb0fe770-540b-11ea-b949-7ddb1312c892">Sertifika Linki: Yazıcıların Farklı Sektörlerde Kullanımı</a></p>
            </div>
            <div class="kutu col-lg">
                <h3>Arduino Lilypad ile Giyilebilir Teknolojiler</h3>
                <hr>
                <p>Bilgeİş</p>

                <p><a target="_blank" href="https://bilgeis.net/moodle/mod/simplecertificate/verify.php?code=d2c4c780-559c-11ea-b048-6bf070338fb4">Sertifika Linki: Arduino Lilypad ile Giyilebilir Teknolojiler</a></p>
            </div>
            <div class="kutu col-lg">
                <h3>Sosyal Medya</h3>
                <hr>
                <p>Bilgeİş</p>
                <p>Eğitmen: Levent Karadağ</p>
                <p><a target="_blank" href="https://bilgeis.net/moodle/mod/simplecertificate/verify.php?code=c7ca7c00-540f-11ea-bc48-eba15710bf55">Sertifika Linki: Sosyal Medya</a></p>
            </div>
            <div class="kutu col-lg">
                <h3>Robotik Kodlama Eğitimci Eğitimi Sertifikası</h3>
                <hr>
                <p>Çanakkale Onsekiz Mart Üniversitesi, UZEM</p>
                <p>Eğitmen: Muzaffer Özdemir</p>
            </div>
            <div class="kutu col-lg">
                <h3>Microsoft IT Academy Office Uzmanlığı</h3>
                <hr>
                <p>Kırklareli Üniversitesi, ITacademy</p>
            </div>
        </div>


    </div>

    <?php include('../php/scripts.php'); ?>
    <br><br><br><br>
    <hr>
    <h2 align="center">Unutmadan bir de Disqus var!</h2>
    <?php include('../php/disqus.php'); ?>
    <?php include('../php/footer.php'); ?>
</body>

</html>


<script>
    $(".<?php echo $page_selector; ?>").last().addClass(" active");
</script>