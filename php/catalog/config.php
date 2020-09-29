<?php

define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', 'root');
define('DB', 'apple');

$connection = mysqli_connect(DBHOST, DBUSER, DBPASS, DB) or die('no connection');
mysqli_set_charset($connection, 'utf8') or die('no charset');
