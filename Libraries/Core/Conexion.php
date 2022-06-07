<?php

class Conexion
    {
        private $connect;

        public function __construct()
            {
                $connectionString = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";.DB_CHARSET.";

                try
                    {
                        $this->connect = new PDO($connectionString, DB_USER, DB_PASSWORD);
                        $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    }
                catch (Exception $e)
                    {
                        $this->connect = 'Error de conexion';
                        echo "ERROR: " . $e->getMessage();
                    }
            }

        public function connect()
            {
                return $this->connect;
            }
    }


?>