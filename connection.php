<?php
class BD {
    private static $instance = NULL;
    // Base de datos parametros
    const HOST = 'localhost';
    const NAME = 'nombreBD';
    const USER = 'root';
    const PASSWORD = '';

    public static function createInstance() {
        if (!isset(self::$instance)) {
            $PDOptions[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;

            self::$instance = new PDO('mysql:host=' . self::HOST . ';dbname=' . self::NAME, self::USER, self::PASSWORD, $PDOptions);
        }
    }


}