<?php
function aut($class) {
    $class = explode("\\", $class);
    $class = end($class);
    require_once 'app/produk/' . $class . '.php';
    var_dump($class);
}
spl_autoload_register('aut');
function auto($class) {
    $class = explode("\\", $class);
    $class = end($class);
    require_once 'app/service/' . $class . '.php';
}
spl_autoload_register('auto');