<div class="row kutu" style="margin-left:5px;margin-right:5px;margin-top:1rem;margin-bottom:1rem;">
    <h3 align="center"><?php echo $card_baslik;?></h3>
    <hr>

    <div class="col-lg-12 col-md-12 col-sm-12" align="center">
        <br>
        <!-- küçük resim . -->
        <img src="<?php echo $card_resim; ?>"width=%50 height=%50 class="img-responsive img-thumbnail" alt="Hakan Akgül Fotoğraf">
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <!--  Linkleme -->
        <div class="row" align="right" style="margin:1rem;">
            <a target=_blank href="<?php echo $card_link; ?>" class="btn btn-danger" align="center">Download</a>
        </div>

            <blockquote>
            <!-- Kartın içerik yazısı. -->
            <p>
            <?php echo $card_icerik; ?> 
            </p>
        </blockquote>
    </div>

    
</div>