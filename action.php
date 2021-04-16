<?php 
 SESSION_START();
 
        if(isset($_POST['submit'])){
            
            $logins = array('acceleratedparty@gmail.com' => '12345678', 'jackdoe@gmail.com' => '12345678', 'joy@gmail.com' => '123456', 'username1' => 'password1','username2' => 'password2');

            // Check and assign submitted Username and Password to new variable 
            $email = isset($_POST['email']) ? $_POST['email'] : '';
            $password = isset($_POST['password']) ? $_POST['password'] : '';

            // Check Username and Password 
            if (isset($logins[$email]) && $logins[$email] == $password){
            // Success: redirect to index page using session
                $_SESSION['UserData']['email']=$logins[$email];
                header("location:index.php");
                exit;
            } else {
                // Unsuccessful show error message
                echo 'Incorrect email or password, try again';
            }
};
?>