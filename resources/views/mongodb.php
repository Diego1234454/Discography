<?php
use MongoDB\Operation\UpdateOne;

$collection = (new MongoDB\Client)->Discografia->Albums;
 $insertResult = $collection->insertOne([
     "Number" => "667",
     "Year" => "2020",
     "Album" => "The reek of putrefaction",
     "Artist" => "Carcass",
     "Genre" => "Goregrind and Grindcore",
     "Subgenres" => "None"


 ]);
 printf("inserted %d document(s)<br />", $insertResult->getInsertedCount());
 var_dump($insertResult->getInsertedID());