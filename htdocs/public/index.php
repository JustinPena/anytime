<?php
//require '../Modules/Categories.php';
//require '../Modules/Products.php';
// require '../Modules/Database.php';

$request = $_SERVER['REQUEST_URI'];
$params = explode("/", $request);
$title = "Anytime Fitness";
$titleSuffix = "";

switch ($params[1]) {
    case 'home':
        $titleSuffix = ' | Home';
        include_once "../Templates/home.php";
        break;
    case 'categories':
        $titleSuffix = ' | Categories';
        include_once "../Templates/categories.php";
        break;
    case 'crosstrainers':
        $titleSuffix = ' | Crosstrainer';
        include_once "../Templates/crosstrainer.php";
        break;
    case 'crosstrainer1':
        $titleSuffix = ' | Crosstrainer1';
        include_once "../Templates/crosstrainer1.php";
        break;
    case 'registreren':
        $titleSuffix = ' | Registreren';
        include_once "../Templates/registreren.php";
        break;
    case 'contact':
        $titleSuffix = ' | Contact';
        include_once "../Templates/contact.php";
        break;
    default:
        $titleSuffix = ' | Home';
        include_once "../Templates/home.php";
}

function getTitle() {
    global $title, $titleSuffix;
    return $title . $titleSuffix;
}
