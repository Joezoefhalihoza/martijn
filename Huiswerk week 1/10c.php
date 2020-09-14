<?php
$s = 'a';

$s .= $s;
print (strtoupper($s . " " . strlen($s) . "\n"));

$s .= $s;
print ($s . " " . strlen($s) . "\n");

$s .= $s;
print (strtoupper($s . " " . strlen($s) . "\n"));

?>