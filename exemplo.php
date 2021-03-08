<?php

require_once "vendor/autoload.php";

use Webviacep\viaCep\Search;

$busca = new Search;

$resultado = $busca->getAddressFroZipcode('03670050');

print_r($resultado);