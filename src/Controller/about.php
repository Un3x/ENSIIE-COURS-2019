<?php
include_once '../src/utils/autoloader.php';

$data = [
    'founder' => 'Gengis Kahn'
];
include_once '../src/View/template.php';
loadView('about', $data);
