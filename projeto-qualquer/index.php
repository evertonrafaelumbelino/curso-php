<?php

require_once "vendor/autoload.php";

use Pichau\DigitalCep\Search;

$busca = new Search;

print_r($busca->getAdressFromZipcode('03624010'));