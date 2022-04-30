<?php

class Home
    {
        public function __construct()
            {

            }

        public function home($params)
            {
                echo "mensaje desde controlador";
            }

        public function datos($params)
            {
                echo "dato recibido: " . $params;
            }
    }
