<?php
    const title ="Connect BDD : php";
    $_date = date("d/m/Y");
    
    class ControllerBase{
        public $_css = "./css/main.css";
        static $_subtitle = "Votre article";
        static $_logo = "favicon/favicon-16x16.png";
    }
    
    $_new_page = new ControllerBase();
