<?php


$uri = parse_url($_SERVER['REQUEST_URI']) ['path'];



$routes = [
    '/'=> 'controllers/index.php',
    
    '/appointments'=> 'controllers/appointments.php',
    
    '/clinic-details'=> 'controllers/clinic-details.php',

    '/doctors'=> 'controllers/doctors.php',
];

//require 'functions.php';
//require 'router.php';
//connect to the database and execute a query

function routeToController($uri, $routes){

    if(array_key_exists($uri,$routes)){
    
        require $routes[$uri];
    
    }else{
    
        abort();
        
    }
    }
    
    function abort($code = 404){
        http_response_code($code);
    
        require "views/{$code}.php";
    
        die();
    }