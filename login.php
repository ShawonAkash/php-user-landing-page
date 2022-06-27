<?php include_once('server.php');
include_once('index.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Login</h2>
        </div>
    </div>
    <form action="login.php" method="post">
        <div>
            <label for="username">Username</label>
            <input type="text" name="username" required>
        </div>

        

        <div>
            <label for="password">Password</label>
            <input type="password" name="password" required>
        </div>

         <button type="submit" name="login_user">Log IN</button> 
         <!--</div>
                <button class="btn btn-lg btn-primary btn-block" type="submit"><i class="fas fa-sign-in-alt"></i> Sign
                    in
                </button> -->

        <P>not a User?<a href="registration.php"><b>Register Here</b></P>




    </form>


    
</body>
</html>