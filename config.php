<?php

use GuzzleHttp\Client;

$client = new Client([
    'base_uri' => 'https://api.airtable.com',
]);

$response = $client->request('GET', '/v0/appH96wQoGCln7EwQ/tbl2qTjjBY8j788Ga', [
    'headers' => [
        'Authorization' => 'Bearer patH93OyrmDcWfV7E.82026f467ad142d53ba7ca78b3190c39fd2601b23a374443e92fd27b11424bfc',
    ]
]);

$data = json_decode($response->getBody());

$result = collect($data->records)->map(function ($record) {
    return [
        'id' => $record->id,
        'createdTime' => $record->createdTime,
        'fields' => [
            'package_name' => $record->fields->{'Package Name'},
            'package_description' => $record->fields->{'Package Description'},
            'package_version' => $record->fields->{'Version'},
            'package_composer_link' => $record->fields->{'Package Composer Link'},
            'reference_link' => $record->fields->{'Reference Link'},
        ],
    ];
});

$result = $result->sortBy('createdTime')->values()->toArray();

return [
    'production' => false,
    'baseUrl' => '',
    'title' => 'Daycode - Wirandra Alaya',
    'description' => 'Website description.',
    'packages' => $result,
    'collections' => [
        'articles' => [
            'path' => '/article/{filename}',
            'author' => 'Wirandra Alaya',
        ],
    ],
];
