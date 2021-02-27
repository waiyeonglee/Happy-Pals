<?php

//require_once __DIR__ . '/vendor/autoload.php';
ini_set('allow_url_fopen',1);
switch (@parse_url($_SERVER['REQUEST_URI'])['path']) {
    case '/':
        require 'index.php';
        break;
    case '/index':
        require 'index.php';
        break;
    case '/index.php':
        require 'index.php';
        break;
    case '/login':
        require 'login.php';
        break;
    case '/login.php':
        require 'login.php';
        break;
    case '/logout':
        require 'logout.php';
        break;
	case '/logout.php':
        require 'logout.php';
        break;
	// separator
	case '/chill_tunes':
        require 'chill_tunes.php';
        break;
	case '/chill_tunes.php':
        require 'chill_tunes.php';
        break;
	case '/dance':
        require 'dance.php';
        break;
	case '/dance.php':
        require 'dance.php';
        break;
	case '/imagery':
        require 'imagery.php';
        break;
	case '/imagery.php':
        require 'imagery.php';
        break;
	case '/main':
        require 'main.php';
        break;
	case '/main.php':
        require 'main.php';
        break;
    default:
        http_response_code(404);
        echo @parse_url($_SERVER['REQUEST_URI'])['path'];
        exit('Not Found');
}


?>