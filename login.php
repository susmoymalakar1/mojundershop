<?php
   include('connection.php');
   error_reporting(0);
   session_start();//kichu data save kore rakhar jonno eta use kora hoy
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <?php
        if(isset($_POST['user_email']))
        {
            $user_email    =$_POST['user_email'];
            $user_password =$_POST['user_password'];

            $sql="SELECT * FROM users WHERE user_email='$user_email' AND user_password='$user_password'";
            $query=$connection->query($sql);
            if(mysqli_num_rows($query)>0 )
            {
                $data=mysqli_fetch_array($query);//array theke information nibo
                $user_first_name=$data['user_first_name'];
                $user_last_name=$data['user_last_name'];
                $_SESSION['user_first_name']=$user_first_name;
                $_SESSION['user_last_name']=$user_last_name;

                header('location:https://www.bkash.com/app?referrer=uuid%3De36e9e3c-7c7f-46de-bce9-214b5f31bd71');
            }
            else{
                echo "not ok";
            }
        }
    ?>

    <form action="login.php" method="POST">
        
        <h5>Email</h5>
        <input type="email" name="user_email"><br><br>
        <h5>Password</h5>
        <input type="password" name="user_password"><br><br>
        <div class="btn">
            <input type="submit"  value="Login">
        </div>
        <p>Don't have an  account? <a href="./register.php">Register Now</a></p>
    </form>
</body>
</html>