<?php 



$file = __DIR__.'/file.txt';

if(!file_exists($file)){
    echo "file is not found";
}

$open = fopen($file, 'r');


// if($open){


//     echo "file size = ". filesize($file);

//     echo "<hr>";

//     $data = fread($open, filesize($file));

//     echo nl2br($data);

//     echo "<hr />";

//     echo "Thid file is ". $file ." open";

//     fclose($open);
// }


if(!$open){
    return 0;
}

$lines = [];

while(!feof($open)){
    $lines[] = fgets($open);
}



print_r($lines);