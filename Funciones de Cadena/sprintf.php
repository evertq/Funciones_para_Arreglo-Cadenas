<?php
//sprintf — Devuelve un string formateado
$num = 5;
$ubicación = 'árbol';

$formato = 'Hay %d monos en el %s';
echo sprintf($formato, $num, $ubicación);
?>