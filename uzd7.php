<?php

$seka = array("kas","cia","per","tokia","seka");

$name_convert = array_map("strtoupper", $seka);

foreach( $name_convert as $didz ) {
 
echo $didz . '</br>' ;
 
 }

?>