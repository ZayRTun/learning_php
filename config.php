<?php

return [
    'database' => [
        'name' => 'mytodos',
        'username' => 'root',
        'password' => 'devpass',
        'connection' => 'mysql:host=127.0.0.1',
        'option' => [
            PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING
        ]
    ]
];