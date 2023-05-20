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
