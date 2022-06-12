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
    <title>RMS</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time();?>">
    <script src="jquery.min.js"></script>
    <script>
        $(document).ready(function()
        {
            $("#p2").bind("blur",passsword_check);
        });
        function passsword_check()
        {
            var p1=$("#p1").val();
            var p2=$("#p2").val();
            if(p1!=p2)
            {
                $("#pass_err").html("Miss match password");
            }
            else
            {
                $("#pass_err").html("");
                $("#pass_crr").html("password matched")
            }
        }
    </script>
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
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">AboutUs</a></li>
            <li><a href="contact.php">ContactUs</a></li>
            <li><a href="login.php">SignIn</a></li>
        </ul>               
    </div>
    <div id="container">
        <h2>New User Registration</h2>
        <fieldset class="shadow" id="user-login">
            <legend>User Registration</legend>
            <form method="post" action="new_user.php" autocomplete="off">
                <table id="user-table">
                    <tr>
                        <td>Name:</td>
                        <td><input type="text" name="name" required></td>
                    </tr>
                    <tr>
                        <td>User Name:</td>
                        <td><input type="text" name="uname" required></td>
                    </tr>
                    
                    <tr>
                        <td>Email:</td>
                        <td><input type="email" name="email" required></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" name="pass1" id="p1" required></td>
                        <td><i class="error" id="pass_err"></i></td>
                        <td><i class="correct" id="pass_crr"></i></td>
                    </tr>
                    <tr>
                        <td>confirm Password:</td>
                        <td><input type="password" name="pass2" id="p2" required></td>
                    </tr>
                    <tr>
                        <td>Security Question:</td>
                        <td>
                            <select name="ques">
                                <option value="What is your pet?">What is your pet?</option>
                                <option value="What is your color?">What is your color?</option>
                                <option value="What is your bike?">What is your bike?</option>
                                <option value="What is your pen?">What is your pen?</option>
                                <option value="What is your pet name?">What is your pet name?</option>

                                
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Answer:
                        </td>
                        <td>
                            <input type="text" name="answer" required>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="submit"  value="save"name="submit"></td>
                        <td><input type="reset" value="clear" name="reset"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><a href="login.php">Already User</a></td>
                    </tr>

                </table>
            </form>

        </fieldset>

        <?php
        if(isset($_POST["submit"]))
        {
            $name=$_POST["name"];
            $uname=$_POST["uname"];
            $email=$_POST["email"];
            $pass1=$_POST["pass1"];
            $pass2=$_POST["pass2"];
            $ques=$_POST["ques"];
            $answer=$_POST["answer"];
            if($name!=""&&$uname!=""&&$email!=""&&$pass1!=""&&$pass2!=""&&$ques!=""&&$answer!="")
            {
                if($pass1==$pass2)
                {
                    $sql="INSERT INTO users
                        (NAME,USERNAME,EMAIL,PASSWORD,QUESTION,ANSWER)
                        VALUES
                        ('$name','$uname','$email','$pass1','$ques','$answer')";
                    if($con->query($sql))
                    {
                        
                        header("location:login.php?mes=<p class='correct'>You sucessfull joined, Please login here.</p>");
                    }
                    else
                    {
                        echo "<p class='error'>Some Error Try Again Later</p>";
                    }


                }
                else
                {
                    echo "<p class='error'>Confirm password and Password Must be Same";
                }
            }
            else
            {
                echo "<p class='error'>All Fields Required</p>";
            }
        }
        else
        {
            echo "<p>Please Fill All The Details</p>";
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
<? ob_flush(); ?>