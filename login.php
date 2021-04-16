<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    SESSION_START();
?>
<h1>Login Form</h1>

    <form action="<?php echo htmlspecialchars("action.php");?>" method="post">
        <input type="email" name="email" id="" placeholder="Enter Email">
        <input type="password" name="password" id="" placeholder="Enter Password"> <br><br>
        <button type="submit" name="submit">Submit</button>    
    </form>

    <p>Don't have an account? <span><a href="register.php" >Register</a></span></p>
    <p>Forgot password? <span><a href="reset.php" >Reset Password</a></span></p>

</body>
</html>