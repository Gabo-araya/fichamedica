<?php

// Kickstart the framework
$f3 = require('../lib/base.php');

$f3->config('config.ini');

$f3->set('DB', new DB\SQL('sqlite:ficha_medica.sqlite'));
$f3->set('AUTOLOAD', '../controllers/');


$f3->route('GET /',
    function() {
        echo 'Hello, world!';
    }
);


$f3->route('GET @listar_ficha_medica /listar_ficha_medica',
	function($f3) {
		$f3->set('content','listar_ficha_medica.htm');
		echo View::instance()->render('layout.htm');
	}
);


$f3->route('GET @crear_ficha_medica /crear_ficha_medica',
	function($f3) {
		$f3->set('content','editar_ficha_medica.htm');
		echo View::instance()->render('layout.htm');
	}
);


$f3->route('GET @editar_ficha_medica /editar_ficha_medica/@id',
	function($f3) {

		$f3->set('content','editar_ficha_medica.htm');


		echo View::instance()->render('layout.htm');
	}
);



$f3->run();
