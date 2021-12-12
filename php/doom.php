<!DOCTYPE html>
<html lang=en>

<head>
    <title><?php echo $page_title; ?></title>
    <?php include('metatag.php');
    include('styles.php');
    include('googlescript.php'); ?>
</head>

<body class=body>
    <?php
    include('navigation.php');
    echo $bodyicerik;
    include('scripts.php');
    ?>
</body>

</html>