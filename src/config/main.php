<?php

return [
    'owner_model' => 'App/User', //if your model is in App/User.php type App/User without the php extension
    'routes' => [ //routes stuff
        'root' => 'surveys', //set route root for accessing surveys
        'middleware_index' => [], //add middleware to index
        'middleware_create' => [], //add middleware to create
        'middleware_store' => [], //add middleware to store
        'middleware_show' => [], //add middleware to show
        'middleware_delete' => [], //add middleware to delete
        'middleware_destroy' => [], //add middleware to destroy
    ],
];