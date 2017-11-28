<?php
    require_once('application/config/config.php');
    require_once('application/config/constants.php');

    $uri = (isset($_GET['uri']) ? explode('/', $_GET['uri']) : []);

    $controller = ((count($uri) && !empty($uri[0])) ? $uri[0] : 'home');
    array_shift($uri);
    $action = ((count($uri) && !empty($uri[0])) ? $uri[0] : 'index');
    array_shift($uri);
    $params = $uri;

    require_once('application/views/base.php');
