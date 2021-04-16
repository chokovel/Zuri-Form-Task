<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP FORM MANIPULATION TASK</title>
</head>
<body>

    <h1>Registration Form</h1>

    <form action="<?php echo htmlspecialchars("registeraction.php");?>" method="post">
        <input type="text" name="first_name" id="" placeholder="First Name" required>
        <input type="text" name="last_name" id="" placeholder="Last Name" required> <br><br>
        <input type="email" name="email" id="" placeholder="Enter Email" required>
        <input type="password" name="password" id="" placeholder="Enter Password" required>  
        <input type="password" name="password_repeat" id="" placeholder="Repeat Password" required> <br><br>   
        <button type="submit" name="submit">Submit</button>       
    </form>

    <p>Already have an account? <span><a href="login.php" >Login</a></span></p>



</body>
</html>