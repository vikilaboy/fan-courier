<?php

/**
 * @file
 * Exemple of geting the streets.
 */

include_once __DIR__ . '/../../vendor/autoload.php';

use FanCourier\fanCourier;

try {

  $params = [
    'username' => 'clienttest',
    'user_pass' => 'testare',
    'client_id' => '7032158',
    'judet' => 'Mures', // Optional
    'localitate' => 'Targu Mures', // Optional
    'language' => 'ro', // Optional
  ];

  $fc = new fanCourier();
  $endpoint = $fc->getEndpoint('Strazi');
  $endpoint->setParams($params);
  $endpoint->noHeader();
  $result = $endpoint->getResult();

  foreach ($result as $key => $value) {
    print_r(str_getcsv($value));
  }
}
catch (Exception $exc) {
  echo $exc->getMessage();
}
