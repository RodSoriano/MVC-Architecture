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
    }
