<?php
    $_pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;

        $_bdd = new PDO('mysql:host=localhost; 
                        dbname=vente_prod','root','', 
                        array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', $_pdo_options));