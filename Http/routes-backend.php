<?php

use Illuminate\Routing\Router;

$router->group(['prefix' => 'contact'], function (Router $router) {

    $router->get('/', ['as' => 'admin.contact.manager', 'uses' => 'MailController@manager']);

});
