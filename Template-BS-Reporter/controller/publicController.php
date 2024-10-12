<?php
$route = $_GET['route'] ?? 'home';
switch ($route) {
  case 'home':
    echo $twig->render("publicView/public.index.html.twig");
    break;
    
  default:
    echo $twig->render("err404.html.twig");
}
