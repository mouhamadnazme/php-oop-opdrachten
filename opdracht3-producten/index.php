<?php

require "vendor/autoload.php";

use Products\Music;
use Products\Movie;
use Products\Game;
use Products\ProductList;

$music1 = new Music('Test1', 5.00, 9, 1.50, 'blablabla');
$music1->setArtist('Artiest 1');
$music1->addNumber('number 1');
$music1->addNumber('number 2');

$music2 = new Music('Test2', 10.00, 21, 2.50, 'burp');
$music2->setArtist('Artiest 2');
$music2->addNumber('number 3');
$music2->addNumber('number 4');

$movie1 = new Movie('Starwars 1', 10.00, 21, 2.50,'filmpje 1');
$movie1->setQuality('DVD');
$movie2 = new Movie('Starwars 2', 15.00, 21, 3.50, 'filmpje 2');
$movie2->setQuality('Blueray');

$game1 = new Game('Call of Duty 1', 5.00, 21, 1.50, 'Het begin');
$game1->setGenre('FPS');
$game1->addRequirements('8gb geheugen');
$game1->addRequirements('970 GTX');


$game2 = new Game('Call of Duty 2', 10.00, 21, 1.50,'en daarna....');
$game2->setGenre('FPS');
$game2->addRequirements('16gb geheugen');
$game2->addRequirements('2070 RTX');


// lijst aanmaken
$list1 = new ProductList();
$list1->addProduct($music1);
$list1->addProduct($music2);
$list1->addProduct($movie1);
$list1->addProduct($movie2);
$list1->addProduct($game1);
$list1->addProduct($game2);

//var_dump($list1->getProducts());

print "<table border=1>
        <tr>
            <th>Category</th>
            <th>Naam product</th>
            <th>Verkoopprijs</th>
            <th>Info</th>
           </tr>";

foreach($list1->getProducts() as $product)
{
    // Product $product
    print "<tr>
            <td>".$product->getCategory()."</td>
            <td>".$product->getName()."</td>
            <td>".$product->getSalesPrice()."</td>
            <td>".$product->printInfo()."</td>
           </tr>";
}

print "</table>";

