<?php

//Get a list of file paths using the glob function.
$fileList = glob('files/*');

//Loop through the array that glob returned.
foreach($fileList as $filename){
   
//    echo $filename, '<br>';     
// if($filename === $email)

if(json_decode($filename, true)){
    echo 'index.php';
}
   
}




?>