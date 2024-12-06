<?php

$routes = [
    '/' => 'ProductController@index',
    '/create' => 'ProductController@create',
    '/store' => 'ProductController@store',
    '/edit/(\d+)' => 'ProductController@edit',
    '/update/(\d+)' => 'ProductController@update',
    '/delete/(\d+)' => 'ProductController@delete',
];
