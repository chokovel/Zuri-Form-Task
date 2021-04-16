
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
    
    //save value using filesystem
    file_put_contents('files/'.  $regDetails['$email'] . ".json" , json_encode($regDetails));
    
    // echo json_encode($regDetails['$email']);

    SESSION_START();

    $_SESSION['details'] = $regDetails;
    $_SESSION['first_name'] = json_encode($regDetails['$first_name']);
    $_SESSION['email'] = json_encode($regDetails['$email']);
    $_SESSION['email--'] = $regDetails['$email'];
    $_SESSION['password'] = $regDetails['$password'];
    
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div style="color:blue; text-align:center; margin-top:120px;">
        <h1>WELCOME <?php  echo $first_name . ' ' . $last_name; ?> </h1>

        <p>To continue <span style="color:blue;"><a href="logout.php">Click here</a> to Logout.</span></p> 

    </div>
</body>
</html>