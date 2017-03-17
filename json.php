<?php
$file = 'school3.txt';
if(file_exists($file)){
    $filedata = file_get_contents($file);
    $objson = json_decode($filedata, true);
    echo "<hr><code><pre>";
    print_r($objson);
    echo "</pre></code><hr>";
}else{
    echo $file . " not exists";
}

$objson['Mediacollege']['category'] = "MBO";

write_data($objson);

function write_data ($data){
    $fp = fopen('school3.txt', 'w');
    fwrite($fp, json_encode($data));
    fclose($fp);
}