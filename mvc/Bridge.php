<?php
include "models/DBconfig.php";
$db = new Database;
$db -> connect();
require_once "core/app.php";
require_once "core/Controllers.php";
$myApp = new App();

?>
