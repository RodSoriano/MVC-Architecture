<?php

class Home #extends Controllers
    {
        public function __construct()
            {
                #parent::__construct();
            }

        public function home($parems)
            {
                echo "mensaje desde controlador";
            }

        public function datos($params)
            {
                echo "dato recibido: " . $params;
            }

        
    }