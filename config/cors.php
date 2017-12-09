<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Laravel CORS
    |--------------------------------------------------------------------------
    |
    | allowedOrigins, allowedHeaders and allowedMethods can be set to array('*')
    | to accept any value.
    |
    */
   
    'defaults' => array(
        'supportsCredentials' => false,
        'allowedOrigins' => array(),
        'allowedHeaders' => array(),
        'allowedMethods' => array(),
        'exposedHeaders' => array(),
        'maxAge' => 0,
        'hosts' => array(),
    ),
    
    'paths' => array(
        '*' => array(
            'allowedOrigins' => array('*'),
            'allowedHeaders' => array('Content-Type', 'Authorization', 'Accept'),
            'allowedMethods' => array('POST', 'PUT', 'GET', 'DELETE')
        ),
    ),

];
