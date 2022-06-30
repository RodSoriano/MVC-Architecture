<?php

class Home extends Controllers
    {
        public function __construct()
            {
                parent::__construct();
            }

        public function home()
            {
                $data['page_id']        = 1;
                $data['page_tag']       = "Home";
                $data['page_title']     = "Pagina principal";
                $data['page_name']      = "home";
                $data['page_content']   = "wenas tardes le de dios";

                $this->views->getView($this,"home", $data);
            }

        public function insertar()
            {
                $data = $this->model->setUser("Francisco", 19);
                print_r($data);
            }

        public function verUsuario($id)
            {
                $data = $this->model->getUser($id);
                print_r($data);
            }

        public function actualizar()
            {
                $data = $this->model->updateUser(1, "Roberto", 20);
                print_r($data);
            }

        public function verUsuarios()
            {
                $data = $this->model->getUsers();
                print_r($data);
            }

        public function eliminarUsuario($id)
            {
                $data = $this->model->delUser($id);
                print_r($data);
            }
    }
