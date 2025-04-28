<?php
function aut($class) {
    require_once 'app/produk/' . $class . '.php';
}
spl_autoload_register('aut');