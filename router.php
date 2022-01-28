<?php
include_once("controllers/controller_" . $controller . ".php");

// Crear instancia del controlador definino por el 'controller' en la URL
$objController = "Controller" . ucfirst($controller);
$controller = new $objController();
// Llamar al metodo definido por la 'action' en la URL
$controller->$action();
