<?

$categories = get_cat();
$categories_tree = map_tree($categories);
$categories_menu = categories_to_string($categories_tree);
