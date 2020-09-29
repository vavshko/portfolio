<?php

include 'config.php';
include 'functions.php';

$categories = get_cat();
$categories_tree = map_tree($categories);
$categories_menu = categories_to_string($categories_tree);
?>

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
        <div class="content">CONTENT</div>
        <?php echo $categories_menu; ?>
    </div>

    <script src="js\jquery-1.9.0.min.js"></script>
    <script src="js\jquery.accordion.js"></script>
    <script src="js\jquery.cookie.js"></script>

</body>

</html>
