<?php 

require_once __DIR__ . '/../classes/Product.php';
require_once __DIR__ . '/../classes/Category.php';
require_once __DIR__ . '/../classes/Food.php';
require_once __DIR__ . '/../classes/Toy.php';
require_once __DIR__ . '/../classes/Accessories.php';

$pesci = new Category('pesci', 'prodotti per pesci');


$categories =[
    "pesci" => new Category('pesci', 'prodotti per pesci'),
    "cane" => new Category('cane', 'prodotti per cani'),
    "uccelli" => new Category('uccelli', 'prodotti per uccelli'),
    "gatto" => new Category('gatto', 'prodotti per gatti'),
];

$products = [
    new Food("Mini Adult", "royal Canin", 15, "https://arcaplanet.vtexassets.com/arquivos/ids/300306/Royal-Canin-Mini-Adult-Alimento-Completo-per-Cani-Adulti-di-Piccola-Taglia-10120604-1.jpg", true, $categories["cane"],9, 1000, ["pollo","verdure"]),

    new Food("Holistic Maintenance Medium Large Tonno e Riso", "Almo", 30,"https://arcaplanet.vtexassets.com/arquivos/ids/300514/Almo-Nature-Holistic-Maintenance-Medium-Large-Tonno-e-Riso-10118806.jpg", true, $categories["cane"], 12, 1000, ["tonno", "riso"]),

    new Food("Cat Daily Lattina", "Almo", 20,"https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg", true, $categories["gatto"], 5, 400, ["vitello"]),

    new Food("Mangine completo ", "Tetra", 30,"https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg", true, $categories["pesci"], 8, 200, ["cacao"]),

    new Accessories("voliera in legno", "Wilma", 500, "https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg",false, $categories["uccelli"], "media", "contenere gli uccelli"),

    new Accessories("Cartucce filtranti per filtro", "Easy Cristal", 10, "https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg",true, $categories["pesci"], "piccola", "filtrare acqua acquario"),

    new Toy("Giochino per animali kong", "kong", 20, "https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg", true, $categories["cane"], "abs", "rosso" ),

    new Toy("Topino di peluche", "trixie", 5, "https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg", true, $categories["cane"], "sintetico", "bianco" ),


];