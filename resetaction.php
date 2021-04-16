<?php

    //Get form value
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $newpassword = $_POST['newpassword'];
        $newpasswordr = $_POST['newpasswordr'];


    //save value to a single array
    $regDetails = [
        'email' => $email,
        'password' => $newpassword,
        'password_repeat' => $newpasswordr
    ];

    echo 'You have successfully changed your password';
    
    //save value using filesystem
    if(!isset($_SESSION['Newpassword']['newpassword'])){
        file_put_contents('files/'.  $regDetails['$email'] . ".json" , json_encode($regDetails)). $newpassword;
        exit;
    }
    
};

?>