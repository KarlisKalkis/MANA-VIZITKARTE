<?php
//Using composer Class autoloader
include "vendor/autoload.php";

use App\Database;

$database= new Database;

echo $database->host;

?>