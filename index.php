<?php
    //Require the autoload file
    error_reporting('E_ALL');
    require_once('vendor/autoload.php');
    session_start();
    
    //Create an instance of the Base class
    $f3 = Base::instance();
	$f3->set('DEBUG', 3);

    //Default route
    $f3->route('GET /', function($f3) {
               echo Template::instance()->render('home.html');
			   print_r("hi");
    });
    
    $f3->run();