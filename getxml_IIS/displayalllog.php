<?php

$dir = "./log";

echo("全体表示です");

function DisplayAll($dir){

if($dir != ""){

    foreach (glob($dir."/*") as $file) {

        /*
         31536000 => 'year', 　年
         2592000 => 'month',　月
         604800 => 'week',　　週
         86400 => 'day',　　　日
         3600 => 'hour',　　　時間
         60 => 'minute',　　　分
         1 => 'second'　　　　秒
        */
        
        //英語版
        //https://www.php.net/manual/en/function.filemtime.php
        //日本版
        //https://www.php.net/manual/ja/function.filemtime.php
        
        if (filemtime($file) < time() -2592000 ) { 
            
            
            echo("<pre>");
            echo($file);
            echo("/<pre>");
            
        }
        
       
        
    }

}
   
    

}





?>
