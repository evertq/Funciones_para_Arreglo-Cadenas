<?php
//substr — Devuelve parte de una cadena
$rest = substr("abcdef", 0, -1);  // devuelve "abcde"
$rest = substr("abcdef", 2, -1);  // devuelve "cde"
$rest = substr("abcdef", 4, -4);  // devuelve false
$rest = substr("abcdef", -3, -1); // devuelve "de"

?>