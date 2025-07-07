<?php

require_once '../controller/BaseController.php';
$base_url = 'http://localhost/book/';

$controller = new   BaseController();

$action = $_POST['action'] ?? $_GET['action'] ?? '';

switch ($action) {
    case 'login':
        $controller->handleLogin($_POST);
        break;
    case 'register':
        $controller->handleRegister($_POST);
        break;
    case 'dashboard':
        require __DIR__ . '/../views/dashboard.php';
        $controller->showDashboard();
        break;
    case 'update':
        $controller->handleUpdate($_POST); // Handles update
    case 'delete':
        $controller->handleDelete($_POST); // Add this
        break;
    case 'delete_call':
        echo "<pre>";
        print_r(['isiiko' => 'ivan']);
        echo "</pre>";
        break;
    case 'lib_dis':
        $path =  'view/landing_page.php';
        http_redirect( $base_url + $path);
        break;
    default:
        $controller->showHome();
        break;

}
