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
<h1>Password Reset Form</h1>

    <form action="<?php echo htmlspecialchars("resetpassword.php");?>" method="post" name="login">
        <input type="email" name="email" id="" placeholder="Enter Email">
        <button type="submit" name="reset-password">Submit</button>    
    </form>


</body>
</html>