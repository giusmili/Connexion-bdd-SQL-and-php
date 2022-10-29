# 👓 Connexion à une base de donnée SQL
> Afficher une table produit dans l'interface client

## 🏆 Le produit
![machine](./asset/machine.jpg)

#### 🔑 BDD => table SQL

```sql
CREATE TABLE `produits` (
  `id` int(11) NOT NULL,
  `marque` varchar(255) NOT NULL,
  `capacite` int(11) NOT NULL,
  `consommation` varchar(150) NOT NULL,
  `prix` int(11) NOT NULL,
  `image` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


```
#### 💻 Requête php et affichage coté client

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
> &copy;  [Giuseppe Militello](https://www.linkedin.com/in/giuseppe-militello-22406ab0/) - All rights reserved for educational purposes only