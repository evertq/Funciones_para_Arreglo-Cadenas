<pre>
<?php
//trim — Elimina los espacios en blanco (u otros caracteres),
//desde el principio y el final de una cadena
function trim_value(&$value) 
{ 
    $value = trim($value); 
}

$fruit = array('apple','banana ', ' cranberry ');
var_dump($fruit);

array_walk($fruit, 'trim_value');
var_dump($fruit);
?>
</pre>