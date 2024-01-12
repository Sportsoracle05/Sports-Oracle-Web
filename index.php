<?php
require_once "utils/common.php";

$uri = getRootURI();

switch ($_SERVER['REQUEST_URI']) {

    case $uri . '':
    case $uri . '/':
        require __DIR__ . '/user-registration/vendor/login.php';
        break;

    case $uri . '/projects/list':
        require __DIR__ . '/user-registration/vendor/index.php';
        break;

    case $uri . '/tasks/list':
        require __DIR__ . '/user-registration/vendor/user-registration.php';
        break;

    case $uri . '/projects/add':
        require __DIR__ . '/user-registration/vendor/home.php';
        break;

    case $uri . '/tasks/add':
        require __DIR__ . '/user-registration/Model/Member.php';
        break;

    

        // case preg_match($uri . '/\/projects\/\?id=\d/', $_SERVER['REQUEST_URI']):
        //     require __DIR__ . '/controllers/project.php';
        //     break;

    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
