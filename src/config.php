<?php
return [
    "appName" => "WF Picture Server",
    "baseDir" => dirname(__FILE__) . DIRECTORY_SEPARATOR. '../',
    "baseUrl" => "myserver.dev",
    "background" => "",
    "installed" => "false",
    'files' => [
        "maxUploadSize" => "10", // in mb
        "allowed" =>  [
            "jpg" => "image/jpg",
            "jpeg" => "image/jpeg",
            "gif" => "image/gif",
            "png" => "image/png",
            "pdf" => "application/pdf"
        ]
    ],
    "users" => [
        "Admin" => [
            "password" => "Password1234",
        ],
        // add other users here
    ]
];