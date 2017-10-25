<?php 
require 'vendor/autoload.php';

use Elasticsearch\ClientBuilder;

$client = ClientBuilder::create()->build();

$params = [
		'index' => 'my_index',
		'type' => 'my_type',
		'body' => [
				'query' => [
						'match' => [
								'testField' => 'abc245 exp3 22'
						]
				]
		]
];

$response = $client->search($params);
print_r($response);