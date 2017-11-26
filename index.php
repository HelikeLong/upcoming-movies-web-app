<?php
    $uri = explode('/', strtok($_SERVER["REQUEST_URI"],'?'));
    array_shift($uri);

    $controller = (count($uri) ? $uri[0] : 'home');
    array_shift($uri);
    $action = (count($uri) ? $uri[0] : 'index');
    array_shift($uri);
    $params = $uri;

    require_once('view/base.php');
