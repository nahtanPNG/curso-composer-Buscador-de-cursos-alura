<?php

return [
    "target_php_version" => "8.3.2",
    "directory_list" => [
        "src",
        "vendor/symfony/dom-crawler",
        "vendor/guzzlehttp/guzzle",
        "vendo/psr/http-message",
    ],
    "exclude_analysis_directory_list" => [
        "vendor/",
    ],
    "plugins" => [
        "AlwaysReturnPlugin",
        "UnreachableCodePlugin",
        "DollarDollarPlugin",
        "DuplicateArrayKeyPlugin",
        "PregRegexCheckerPlugin",
        "PrintfCheckerPlugin",
    ]
];