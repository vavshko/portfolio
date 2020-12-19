<?php

include 'config.php';
include 'functions.php';
include 'catalog.php';

?>
<!-- <?php phpinfo();?> -->
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>catalog</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <a href="/catalog/">MAIN</a>
    <div class="wrapper">
        <div class="sidebar">SIDEBAR</div>
<ul class="category"><?php echo $categories_menu ?></ul>
        <?php echo $categories_menu; ?>
    </div>
    <div class="content"><?php print_arr($categories_tree)?>
</div>
    <script src="js\jquery-1.9.0.min.js"></script>
    <script src="js\jquery.accordion.js"></script>
    <script src="js\jquery.cookie.js"></script>

</body>

</html>
