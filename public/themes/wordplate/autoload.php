<?php

// Répertoires à lire
$current_directory = __DIR__;
$files_path =  [
    "{$current_directory}/acf",
    "{$current_directory}/custom-post-types",
    "{$current_directory}/taxonomies",
];

// Inclusion des fichiers des répertoires dans functions.php
foreach($files_path as $directory) {
    $scanned_directory = array_diff(scandir($directory), array('..', '.'));
    foreach($scanned_directory as $file) {
        include "{$directory}/{$file}";
    }
}