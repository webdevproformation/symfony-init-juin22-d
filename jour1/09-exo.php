<?php

// php -S localhost:1234
// http://localhost:1234/09-exo.php

require "09-lib1.php";
require "09-lib2.php";

use MySQL\DB\Article as MySQLArticle;
use SQLITE\DB\Article as SqliteArticle ;

$article1 = new MySQLArticle();
$article2 = new SqliteArticle();

var_dump($article1 , $article2); 