<? ob_start(); ?>
<?php
session_start();
ob_start();
    include("config.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link  type="text/css" href="style.css" rel="stylesheet">
</head>
<body>
    <div id="header">
        <div id="logo">
            <!-- <img src="assets/logo.jpg" height="100px" width="120px"> -->
            <svg xmlns="http://www.w3.org/2000/svg" width="150" height="100" fill="#000000" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"></rect><line x1="24" y1="216" x2="168" y2="216" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line><path d="M16.9,140.4l37.7,35.3a32,32,0,0,0,38,4.3L244,92,225.4,69.2a32,32,0,0,0-41-7.3L140,88,80,68,63.5,75.1a8,8,0,0,0-2.2,13.3L92,116,64,132,36,120l-16.8,7.2A8,8,0,0,0,16.9,140.4Z" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></path></svg>
        </div>
        <div id="logoHeading">
            <center>
                <h1>Recruitment Management System</h1>   
            </center>  
        </div>
    </div>
    <div id="nav">
        <ul id="navMenu">
            <li><a href="index.php">Home</a>/li>
            <li><a href="about.php">AboutUs</a>/li>
            <li><a href="contact.php">ContactUs</a></li>
            <li><a href="login.php">SignIn</a></li>
            <li><a href="#">Logout</a></li>
        </ul>               
    </div>
    <div id="container">
        <h2>Sign In</h2>
        <?php
            if(isset($_GET["mes"]))
            {
                echo $_GET["mes"];
            }
        ?>
        <fieldset class="shadow" id="user-login">
            <legend>Admin Login</legend>
            <form method="post" action="admin.php" autocomplete="off">
                <table id="user-table">
                    <tr>
                        <td>User Name:</td>
                        <td><input type="text" name="name" required></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" name="pass" required></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="submit"></td>
                        <td><input type="reset"></td>
                    </tr>
                    <tr>
                        <td><a href="#">forget password</a></td>
                        <td><a href="new_user.php">New User Registration</a></td>
                    </tr>

                </table>
            </form>

        </fieldset>
        <?php
        if(isset($_POST["submit"]))
        {
            $name=$_POST["name"];
            $pass=$_POST["pass"];
            if($name!=""&&$pass!="")
            {
                $sql="SELECT ID,NAME,PASSWORD FROM admin WHERE NAME='$name' AND
                PASSWORD='$pass'";
                $result=$con->query($sql);
                //print_r($result);
               if($result->num_rows==1)
                {
                    $_SESSION["name"]=$name;
            
                    header("location:admin_access.php");

                }
                else
                {
                    echo "<p class='error'>Invalid User name Or Password...</p>";
                }


            }
            else
            {
                echo "<p class='correct'>Please Enter All the Details</p>";
            }
        }
        else
        {
            echo "<p>Please Fill The Details For Complete Access</p>";
        }
        ?>
    </div>
    <div id="footer">
        <center>
            &copy;2022 All Rights Reserved. Designed by <q>David, Suseendaran, Mugilan </q>
        </center>
    </div>


</body>
</html>