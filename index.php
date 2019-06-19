<?php
require 'vendor/autoload.php';

$client = new GuzzleHttp\Client(['headers' => ['Authorization' => 'Bearer  HQjuK9oknfK3hlNENhvCw44rOJNgpNTkrISKPbys']]);
$response = $client->request('GET', 'https://api.helloworks.com/v3/token/nxFiRJhhYrf2XCJT');

$token = $response["data"]["token"]

 ?>
