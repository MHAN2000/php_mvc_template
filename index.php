<?php
// URL por defecto
$controller = "example";
$action = "show";

// ¿Existe controller y action?
if (isset($_GET['controller']) && isset($_GET['action'])) {
    // ¿URL existe?
    $controller = $_GET['controller'];
    $action = $_GET['action'];
}

// Importar template
require_once("views/template.php");