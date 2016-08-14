<?php
spl_autoload_register(function($classes_name){
    require_once $classes_name.'.php';
});

$array = [2,'36 2/3',2,6,4,'XXL',3,6,7,4,'k',5.2,34,1.1,'s','a','44 1/2','b','S','L','XS','36','M','39 1/2','45 1/2',5,'44'];
$ob = new Sorts($array);
$ob->display();

