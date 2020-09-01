<?php

$router->group(['prefix' => 'bots'], function ($router) {

    $router->get('/', 'BotsController@list');
    $router->get('/{id}', 'BotsController@listById');
    $router->post('/', 'BotsController@save');
    $router->put('/{id}', 'BotsController@update');
    $router->delete('/{id}', 'BotsController@delete');

});

$router->group(['prefix' => 'messages'], function ($router) {
    $router->get('/{id}', 'MessagesController@list');
    $router->get('/', 'MessagesController@list');
    $router->post('/', 'MessagesController@save');
});