<?php

    //form validation, remove backslashes, space, tab and newline
    function test_data($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }


    //Get form value
    if(isset($_POST['submit'])){
        $first_name = test_data($_POST['first_name']);
        $last_name = test_data($_POST['last_name']);
        $email = test_data($_POST['email']);
        $password = test_data($_POST['password']);
        $password_repeat = test_data($_POST['password_repeat']);


    //save value to a single array
    $regDetails = [
        '$first_name' => $first_name,
        '$last_name' => $last_name,
        '$email' => $email,
        '$password' => $password,
        '$password_repeat' => $password_repeat
    ];

    echo 'Welcome ' .  $first_name . ' ' . $last_name;
    //save value using filesystem
    file_put_contents('files/'.  $regDetails['$email'] . ".json" , json_encode($regDetails));

}

SESSION_START();

    $_SESSION['$email' => $email]
    $_SESSION['$password' => $password],

?>