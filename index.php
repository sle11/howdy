<?php
// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require autoload file
require_once('vendor/autoload.php');

// Create an instance of the Base class
$f3 = Base::instance();

// Define a default root
$f3->route('GET /', function() {
    echo '<h1> Howdy! </h1>';
});

// Run fat-free
$f3->run();