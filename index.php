<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php SESSION_START(); 
    
        if(!isset($_SESSION['UserData']['email'])){
        header("location:login.php");
        exit;
    }
    ?>
    <div style="color:blue; text-align:center; margin-top:120px;">
        <h1>WELCOME TO MY PAGE</h1>

        <p>To continue <span style="color:blue;"><a href="logout.php">Click here</a> to Logout.</span></p> 

    </div>

</body>
</html>