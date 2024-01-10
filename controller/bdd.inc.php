<?php
   # connexion à la base
 class ControllerBdd{
  
    static function bdd(){

      try{

         $_pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;

         $_bdd = new PDO('mysql:host=localhost; 
                         dbname=vente_prod','root','', 
                         array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', $_pdo_options));
         
                         $_response = $_bdd->query('SELECT * FROM `produits` WHERE 1 ORDER BY id ASC LIMIT 10 ');
                        
                        
   
         while($_data = $_response->fetch()){
          
            /*  print "<pre>";
             print_r($_data);
             print "</pre>"; */
   
             echo "<li>Marque : ".$_data["marque"]."</li>\n
                     <li> Capacité : ".$_data["capacite"]." kg<li>\n
                     <li> Cosommation : ".$_data["consommation"]." KW<li>\n
                     <li> Prix : ".$_data["prix"]." &euro;<li>\n
                  <li>\n<img src = ".$_data['image']." loading=\"lazy\" alt=".$_data['marque'].">\n<li>";
             }
         
         $_response->closeCursor(); 
   
      }
      catch(Exception $e){
         die("Error Data base de votre base ".$e->getMessage());
      }
   }

}
ControllerBdd::bdd();
