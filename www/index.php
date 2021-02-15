<?php

declare(strict_types=1);

namespace App;

require ("src/Utils/debug.php");
require ("src/View.php");

$action = $_GET['action'] ?? null;

$view = new View();
$view->render($action);





