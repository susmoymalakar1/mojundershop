<?php
   include('connection.php');
   error_reporting(0);
   
    //session_start();
    //$user_first_name= $_SESSION['user_first_name']; //session er moddhe ei first and last name save ache
    //$user_last_name= $_SESSION['user_last_name'];
    
    //if(!empty($user_first_name)&&!empty($user_last_name)){

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>

<!-- <div class="navbar">
            <div class="logo">
                <h2><a href="index.html">Majumder</a></h2>
            </div>
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    
                    <li><a href="#">Products &#8595;</a>
                    <ul class="dropdown">
                        <li><a href="fertilizer.html">Fertilizer</a></li>
                        <li><a href="pesticide.html">Pesticide</a></li>
                        <li><a href="seeds.html">Seeds</a></li>
                    </ul>
                    </li>
                    <li><a href="./about.html">About&Contact</a></li>
                    <li><a href="./developer.html">Developer</a></li>
                    <li><a href="register.php">Account</a></li>
                </ul>      
            </nav>
        </div> -->

    <?php
        if(isset($_GET['user_first_name']))
        {
            $user_first_name=$_GET['user_first_name'];
            $user_last_name=$_GET['user_last_name'];
            $user_email=$_GET['user_email'];
            $user_password=$_GET['user_password'];

            $sql="INSERT INTO users (user_first_name,user_last_name,user_email,user_password) 
                    VALUES ('$user_first_name','$user_last_name','$user_email','$user_password')";

            if($connection->query($sql)==TRUE){
                echo "Data is inserted!";
            }
            else{
                echo "data is not inserted!";
            }
        }
    ?>

    <form action="login.php" method="GET">
        
        First Name :<br/>
        <input type="text" name="user_first_name"><br><br>
        Last Name :<br>
        <input type="text" name="user_last_name"><br><br>
        Email :<br>
        <input type="email" name="user_email"><br><br>
        Password :<br>
        <input type="password" name="user_password"><br><br>
        <div class="btn">
            <input type="submit" name="submit" value="submit">
        </div> 
        <p>Already have an account? <a href="login.php">Login</a></p>
        
    </form>
</body>
</html>

<?php
//} else{
    //header('location:login.php');
//}
?>