<?php


$route = $_GET['route'] ?? 'home';
switch ($route) {
    case 'home':
        echo $twig->render("template.html.twig");
        break;

    default:
        echo $twig->render("err404.html.twig");
}

