<?php

declare(strict_types=1);

namespace App;

require ("src/Utils/debug.php");
require ("src/View.php");

const DEFAULT_ACTION = 'list';
$action = $_GET['action'] ?? DEFAULT_ACTION;

$view = new View();

$viewParams = [];
if ($action === 'create') {
    $page = 'create';
    $created = false;
    if (!empty($_POST)) {
        $created = true;
        $viewParams = [
            'title' => $_POST['title'],
            'description' => $_POST['description']
        ];
    }
    $viewParams['created'] = $created;
} else {
    $page = 'list';
    $viewParams['resultList'] = "wyswietlamy notatki";
}

$view->render($page, $viewParams);





