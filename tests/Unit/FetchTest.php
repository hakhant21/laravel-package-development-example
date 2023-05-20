<?php

use Hak\DataFetcher\Facades\Fetch;

it('will response back with an array of data', function(){
    $data = Fetch::getAll('https://jsonplaceholder.typicode.com/posts', 'GET');

    expect($data)->toBeArray();
});

it('will response back with single post that contains userId, id, title and body', function(){
    $data = Fetch::getOne('https://jsonplaceholder.typicode.com/posts/1', 'GET');

    expect($data)->toHaveKeys(['userId', 'id', 'title', 'body']);
});

it('can create a new post with json array', function(){
    $data = Fetch::create('https://jsonplaceholder.typicode.com/posts', 'POST', [
        'json' => [
            'userId' => 1,
            'title' => 'Test Title',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. '
        ]
    ]);

    expect($data['json'])->toHaveKeys(['userId', 'title', 'body']);
});
