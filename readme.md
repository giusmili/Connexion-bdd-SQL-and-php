# Connexion à une base de donnée SQL
> Afficher une table produit dans l'interface client
![machine](./asset/machine.jpg)

```php
while($_data = $_response->fetch()){
   /*  print "<pre>";
    print_r($_data);
    print "</pre>"; */
    echo "<li>Marque : ".$_data["marque"]."</li>
            <li> Capacité : ".$_data["capacite"]." kg<li>
            <li> Cosommation : ".$_data["consommation"]." KW<li>
            <li> Prix : ".$_data["prix"]." &euro;<li>
            <li><img src = ".$_data["image"]." loading=\"lazy\" alt=".$_data["marque"]."><li>";
}

```