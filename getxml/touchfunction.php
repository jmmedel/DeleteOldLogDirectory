<?php

// これがtouch時間です。過去時間に設定します。
// This is the touch time, we'll set it to one hour in the past.
// 英語版
//https://www.php.net/manual/en/function.touch.php
//日本版
//https://www.php.net/manual/ja/function.touch.php

/*

 31536000 => 'year',
 2592000 => 'month',
 604800 => 'week',
 86400 => 'day',
 3600 => 'hour',
 60 => 'minute',
 1 => 'second'

*/

$time = time() - 2592000;
$dir = "./bak"; /** define the directory **/
foreach (glob($dir."/*") as $file) {

     
     touch($file,$time);
     //echo("<pre>");
     //var_dump(filemtime($file));
     //var_dump(  date ("F d Y H:i:s.", filemtime($file)) ) ;
     //var_dump(date ("F d Y H:i:s.", time() -2592000));
     //echo("/<pre>");
    
}

echo("過去時間に設定します。"."<br>");
echo("設定は".date ("F d Y H:i:s.", time() -2592000));

?>