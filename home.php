<?php
    session_start();
    if(!isset($_SESSION['name']))
    {
        header("location:login.php?mes=<p class='error'>Please login here.</p>");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RMS</title>
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
            <li><a href="logout.php">Logout</a></li>
        </ul>               
    </div>
    <div id="container">
        <h2>HOME PAGE</h2>
        <p>Hi <?php echo $_SESSION["name"] ;?> Welcome To My Recruitment Website</p>
        <h2>Available jobs:</h2>
        <h3>Front End Developer</h3>
        <div class="front">
            <dl>
                <li>Client side development</li>
                <li></li>
                <li></li>
                <li></li>

            </dl>
        </div>
        <div class="front"></div>
        <div class="front"></div>
        <div class="front"></div>
        

        <a href="job_registration.php">register your job</a>
    </div>
    <div id="footer">
        <center>
            &copy;2022 All Rights Reserved. Designed by <q>David, Suseendaran, Mugilan </q>
        </center>
    </div>


</body>
</html>