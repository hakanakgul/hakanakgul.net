<?php
   $page_title = 'Haganya - Hakan Akgül - Deneyim';
   $page_selector = 'experience';
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
                <h1>Deneyimlerim</h1>         
        </div>

        <div class="row" align="center">

        <div class="kutu col-lg-12">
                    <h2>İstanbul Bilgi Üniversitesi</h2>
                <h3>Öğretim Görevlisi</h3>
                <hr> 
                <p>2021-2022 eğitim öğretim yılı güz döneminde Bilgisayar Teknolojileri Bölümünde Öğretim Görevlisi olarak görev yapılması.</p>
                <p>Bilişim Güvenliği Teknolojisi programında "Web Programlama Altyapıları 1" dersinin verilmesi. Öğrenci sayısı: 81</p>
                <p>Bilgisayar Programclığı programında "Veri Yapıları" dersinin verilmesi. Öğrenci sayısı: 101</p>
                <p>Ekim 2021 - Aralık 2021</p>
                </div> 

        <div class="kutu col-lg-12">
                    <h2>Deneyap Türkiye</h2>
                <h3>Yazılım Teknolojileri Eğitmeni</h3>
                <hr> 
                <p>Proje kapsamında C++ eğitimi verilmesi.</p>
                <p>Mayıs 2021 - Eylül 2021</p>
                </div> 
                
        <div class="kutu col-lg-12">
                    <h2>Halk Eğitim Merkezi ve Akşam Sanat Okulu</h2>
                <h3>Bilgisayar Öğretmeni</h3>
                <hr> 
                    <p>Çanakkale Halk Eğitim Merkezi bünyesinde Usta Öğretici ünvanı ile farklı yaş gruplarındaki bireylere Temel Robotik ve Kodlama eğitimi verildi.   </p>
                    <p>26.10.2019 - 01.12.2019 - Nusrat Öğrenci Yurdu - Üniversite Öğrencileri - Temel Robotik ve Kodlama Kursu (46 Saat)</p>
                    <p>28.12.2019 - 23.02.2020 - Çanakkale Gençlik Merkezi, Kodadı 2023 Projesi - 6. ve 7. Sınıf Öğrencileri - Temel Robotik ve Kodlama Kursu (46 Saat)</p>
                    <p>Ekim 2019 - Haziran 2019 (9 ay)</p>
                </div> 
                
                <div class="kutu col-lg-12">
                    <h2>Çanakkale İMKB Mesleki ve Teknik Anadolu Lisesi</h2>
                <h3>Stajyer Bilişim Teknolojileri Öğretmeni</h3>
                <hr> 
                    <p>Çanakkale Onsekiz Mart Üniversitesi, Bilgisayar ve Öğretim Teknolojileri Eğitimi Bölümü, öğretmenlik uygulaması dersi kapsamında staj yapıldı</p>
                    <p>Grafik ve Animasyon Dersinde dönem boyunca öğretmenlik yapıldı. </p> 
                    <p>Şubat 2019 - Mayıs 2018 (4 ay)</p>
                </div> 

                <div class="kutu col-lg-12">
                    <h2>Ömer Mart Ortaokulu</h2>
                <h3>Stajyer Bilişim Teknolojileri Öğretmeni</h3>
                <hr>
                    <p>Çanakkale Onsekiz Mart Üniversitesi, Bilgisayar ve Öğretim Teknolojileri Eğitimi Bölümü, okul deneyimi dersi kapsamında staj yapılması.</p> 
                    <p>Eylül 2018 - Aralık 2018 (4 ay)</p>
                </div> 

                <div class="kutu col-lg-12">
                <h2>AKINSOFT SOFTWARE ENGINEERING</h2>
                    <h3>Stajyer</h3>
                    <hr>
                    <p>Akınsoft CafePlus, Otel, Kurs Otomasyonu, Wolvox ERP, Restoran, Hızlı Satış, Genel Muhasebe, İnsan Kaynakları programlarının kullanımı ve hatalarına ilişkin müşterilere teknik destek verilmesi.</p>
                    <p>Haziran 2016 - Ağustos 2016 (3 ay)</p>
                </div> 

                 <div class="kutu col-lg-12">
                 <h2>Garanti BBVA</h2>
                    <h3>Stajyer</h3>
                    <hr>
                    <p>Arşiv yönetimi ve düzenlenmesi, müşteri evraklarının takibi.</p>
                    <p>Kasım 2013 - Haziran 2014 (8 ay)</p>
                </div> 
                <div class="kutu col-lg-12">
                    <h2>Türk Telekom</h2>
                    <h3>Stajyer</h3>
                    <hr>
                    <p>Huawei ve ZTE programları ile santral yönlendirmelerinin yapılması.</p>
                    <p>Eylül 2013 - Kasım 2013 (3 ay)</p>
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