<div class="row kutu" style="margin-left:5px;margin-right:5px;margin-top:1rem;margin-bottom:1rem;">
    <h3 align="center"><?php echo $card_baslik;?></h3>
    <hr>

    <div class="col-lg-3 col-md-4 col-sm-12">
        <br>
        <!-- küçük resim . -->
        <img src="<?php echo $card_resim; ?>" class="img-responsive img-thumbnail" alt="Hakan Akgül Fotoğraf">
    </div>

    <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
        <blockquote>
            <!-- Kartın içerik yazısı. -->
            <p>
                <?php echo $card_icerik; ?>
            </p>
        </blockquote>

        <!-- linkleme . -->
        <div class="row" align="right" style="margin:1rem;">
            <!--  <a href="http://blog.haganya.com/" class="btn btn-primary">Proje Sayfasına Git</a> -->
            <a href="<?php echo $card_link; ?>" class="btn btn-primary" align="center">Proje Sayfasına Git</a>
        </div>
    </div>
</div>