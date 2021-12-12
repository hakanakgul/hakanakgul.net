<?php
$page_title = 'Haganya - Blog';
$page_selector = 'blog';
?>


<!DOCTYPE html>
<html lang=tr>

<head>
    <title><?php echo $page_title; ?></title>
    <?php include('../php/metatag.php');
    include('../php/styles.php');
    include('../php/googlescript.php'); ?>
</head>

<body class=body>

    <?php include('../php/navigation.php'); ?>

    <div class="container">
        <div class="row page-header"></div>
        <h1 align="center">Blog Sayfası</h1>
    </div>
    </div>

    <?php include('../php/scripts.php'); ?>

</body>

</html>



<script>
    $(".<?php echo $page_selector; ?>").last().addClass(" active");
</script>