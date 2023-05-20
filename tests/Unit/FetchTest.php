<?php

use Hak\DataFetcher\Facades\Fetch;

it('will response back with an array of data', function(){
    $data = Fetch::getPosts('https://jsonplaceholder.typicode.com/posts', 'GET');

    expect($data)->toBeArray();
});

it('will response back with single post that contains userId, id, title and body', function(){
    $data = Fetch::getPost('https://jsonplaceholder.typicode.com/posts/1', 'GET');

    expect($data)->toHaveKeys(['userId', 'id', 'title', 'body']);
});
