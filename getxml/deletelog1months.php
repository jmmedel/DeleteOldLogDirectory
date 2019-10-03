<?php


/* Detele Cache Files Here */
$dir = "./log"; /** define the directory **/

/*** cycle through all files in the directory ***/



foreach (glob($dir."/*") as $file) {

/*
 31536000 => 'year',
 2592000 => 'month',
 604800 => 'week',
 86400 => 'day',
 3600 => 'hour',
 60 => 'minute',
 1 => 'second'
*/

//英語版
//https://www.php.net/manual/en/function.filemtime.php
//日本版
//https://www.php.net/manual/ja/function.filemtime.php

if (filemtime($file) < time() -2592000 ) { 
    unlink($file);
}

/*

 echo("<pre>");
 var_dump(filemtime($file));
 var_dump( "File lastmodified " .date ("F d Y H:i:s.", filemtime($file)) ) ;
 var_dump(date ("F d Y H:i:s.", time() -2592000));
 echo("/<pre>");

*/
/*

echo("<pre>");
var_dump(date ("F d Y H:i:s.", time() -2592000));
echo("/<pre>");

*/

}




echo ("<br>");
echo(" ログ削除です。");