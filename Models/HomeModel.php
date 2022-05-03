<?php

class HomeModel
    {
        public function __construct()
            {
                #echo "mensaje desde el modelo home";
            }

        public function getCarrito($params)
            {
                return "Datos del carrito No. " . $params;
            }
    }