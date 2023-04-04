<?php
//ucwords — Convierte a mayúsculas el primer caracter de cada palabra de una cadena
$foo = 'hello|world!';
$bar = ucwords($foo);             // Hello|world!

$baz = ucwords($foo, "|");        // Hello|World!
?>