<?php
// if ( ! isset( $_POST['submitted'] ) ) 
// header('Location: ' . $_SERVER['HTTP_REFERER']); 
SESSION_START();

if(isset($_POST['submit'])){
    
    // $userDetails = [
    //     'email' => $_SESSION['email'],
    //     'password' => $_SESSION['password']
    // ];

    // foreach($userDetails as $userDetail){
    //     if ( $userDetail['email'] !== $_POST['email'] OR $userDetail['password'] !== $_POST['password'] ) { 
    //         header('Location: ' . $_SERVER['HTTP_REFERER']); 
    //          exit(); 
    //      } 
    //      session_start(); 

    //      // Storing session data 
    //      $_SESSION["isLogged"] = "1"; 
         
    //      // login successful - redirect user to index page 
         
    //      header('Location:' . '../index.php'); 
         
    //      exit();

    // }
    $_SESSION['email'] = 'email';
    $_SESSION['password'] = 'password';
    
    $userDetails = [
        '$email' => $_SESSION['email'],
        '$password' => $_SESSION['password']
    ];

    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    foreach($userDetails as $userDetail){
           echo ($userDetail), '<br>';  
           if (isset($userDetail[$email]) && $userDetail[$email] == $password){
            /* Success: Set session variables and redirect to Protected page  */
            $_SESSION['UserData']['email']=$userDetail[$email];
    
            header("location:index.php");
            exit;
            } else {
                /*Unsuccessful attempt: Set error message */
                echo 'Incorrect email or password, try again';
                }

    }
}

// if(isset($_POST['submit'])){
//     $regusers = [
//         'acceleratedparty@gmail.com' => '12345678',
//         'jackdoe@gmail.com' => '12345678',
//         'joy@gmail.com' => '12345678',
//         'mark20@gmail.com' => '12345678',
//         'sweetelf20@gmail.com' => '12345678' 
//     ];

//     $useremail = isset($_POST['email']) ? $_POST['email'] : '';
//     $userpassword = isset($_POST['password']) ? $_POST['password'] : '';

//     if(isset($regusers[$useremail]) && $regusers[$useremail] == $userpassword) {
//         $_SESSION['userdata']['useremail'] = $regusers[$useremail];
//         header("location:index.php");
//         exit;
//     } else {
//         $msg="<span style='color:red'>Invalid Login Details</span>";
//     }
// };

// SESSION_START();
// //Get a list of file paths using the glob function.
// // $fileList = glob('files/*');

// // //Loop through the array that glob returned.
// // foreach($fileList as $filename){
// //    echo $filename, '<br>';  
   
// // };

// $fileList = glob('files/*');

//     foreach($fileList as $filename){
//         $file = $filename;
//         if (isset($_POST['login'])) {
//             $email    = $file($_POST['email']);
//             $password = $filename($_POST['password']);

//             if($email === $_SESSION['email'] && $password === $_SESSION['password']){
//                 echo ('index.php');
//             } else {
//                 echo "error";
//             }
    
//     } 

// // $result = fopen($filename, "r");
//     // var_dump ($result);
//             // function query() {
//             //     if($email === $_SESSION['email'] && $password === $_SESSION['password']){
//             // echo "<div>
//             // <h3>You are registered successfully.</h3>
//             // <br/>Click here to <a href='login.php'>Login</a></div>";
//             //     }
//             //     query();
//             // };
// //     $query = "INSERT into `users` (username, password, email, trn_date)
// // VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
// //         $result = mysqli_query($con,$query);
// //         if($result){
// //             echo "<div class='form'>
// // <h3>You are registered successfully.</h3>
// // <br/>Click here to <a href='login.php'>Login</a></div>";
// //         }

// };
?>