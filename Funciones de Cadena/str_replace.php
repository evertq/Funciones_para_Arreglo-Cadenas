<?php
//str_replace — Reemplaza todas las apariciones del string buscado con el string de reemplazo
$search  = array('a', 'b', 'c', 'd', 'e');
$replace = array('A', 'B', 'C');
$subject = 'abcdefg';
echo str_replace($search, $replace, $subject)."<br>";
// result: 'ABCfg'

$search  = array('a', 'b', 'c');
$replace = array('A', 'B', 'C', 'D', 'E');
$subject = 'abcdefg';
echo str_replace($search, $replace, $subject);
// result: 'ABCdefg'
?>