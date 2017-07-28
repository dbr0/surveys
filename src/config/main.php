<?php

return [
    'owner_model' => 'User', //if your model is in App/User.php type User without the php extension
    'routes' => [ //routes stuff
        'root' => 'surveys', //set route root for accessing surveys
        'middleware_index' => [], //add middleware to index
    ],
];