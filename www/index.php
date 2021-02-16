<?php

declare(strict_types=1);

namespace App;

require ("src/Utils/debug.php");
require ("src/View.php");

const DEFAULT_ACTION = 'list';
$action = $_GET['action'] ?? DEFAULT_ACTION;

$view = new View();

$viewParams = [];

switch ($action) {
    case 'create':
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
    break;
    case 'show' :
        $viewParams = [
            'title' => 'Moja notatka',
            'descriptions' => 'Opis'
        ];
    break;
    default:
        $page = 'list';
        $viewParams['resultList'] = "wyswietlamy notatki";
    break;
}

$view->render($page, $viewParams);





