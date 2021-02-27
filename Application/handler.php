<?php

//require_once __DIR__ . '/vendor/autoload.php';
ini_set('allow_url_fopen',1);
switch (@parse_url($_SERVER['REQUEST_URI'])['path']) {
    case '/':
        require 'index.html';
        break;
    case '/index':
        require 'index.html';
        break;
    case '/index.html':
        require 'index.html';
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
	case '/dance':
        require 'dance.php';
        break;
	case '/dance.php':
        require 'dance.php';
        break;
	case '/happy-pals':
        require 'happy-pals.php';
        break;
	case '/happy-pals.php':
        require 'happy-pals.php';
        break;
	case '/imagery':
        require 'imagery.php';
        break;
	case '/imagery.php':
        require 'imagery.php';
        break;
	case '/melodies':
        require 'melodies.php';
        break;
	case '/melodies.php':
        require 'melodies.php';
        break;
	case '/talk':
        require 'talk.php';
        break;
	case '/talk.php':
        require 'talk.php';
        break;
    default:
        http_response_code(404);
        echo @parse_url($_SERVER['REQUEST_URI'])['path'];
        exit('Not Found');
}


?>