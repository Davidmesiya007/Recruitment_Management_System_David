<? ob_start(); ?>
<?php
session_start();
ob_start();
    include("config.php");
    $admin="select*from users";
    $query="select *from application";
    $connect=mysqli_query($con,$query);
    $connect_admin=mysqli_query($con,$admin);
    //$data=mysqli_fetch_assoc($connect);
    $num=mysqli_num_rows($connect); //check in database dava available or not
    $num1=mysqli_num_rows($connect_admin);
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Access</title>
    <link href="style1.css" rel="stylesheet">
</head>
<body>
    <div class="admin_head">
        <h1>Admin Access</h1>
    </div>
    <h2>Users Details</h2>
    <center>
    <table id="user_table" align="center">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>USER NAME</th>
            <th>PASSWORD</th>
            <th>QUESTION</th>
            <th>ANSWER</th>
        </tr>   
        <?php
        if($num1>0) 
        {
            while($data=mysqli_fetch_assoc($connect_admin))
            {
                echo
                "
                    <tr>
                        <td>".$data['ID']."</td>
                        <td>".$data['NAME']."</td>
                        <td>".$data['EMAIL']."</td>
                        <td>".$data['USERNAME']."</td>
                        <td>".$data['PASSWORD']."</td>
                        <td>".$data['QUESTION']."</td>
                        <td>".$data['ANSWER']."</td>

                      
                    </tr>

                ";
            }
        }

        ?>
        

    </table>
    </center>
    <h2>
        Applicant Details
    </h2>
    <div class="split">
    <center>
    <table id="applicant_table">
        <tr>
            <th>ID</th>
            <th>FIST NAME</th>
            <th>LAST NAME</th>
            <th>EMIAL</th>
            <th>JOB NAME</th>
            <th>ADDRESS</th>
            <th>CITY</th>
            <th>PINCODE</th>
            <th>DATE</th>
            <th>RESUME</th>
        </tr>   
    <?php
        if($num>0) 
        {
            while($data=mysqli_fetch_assoc($connect))
            {
                echo
                "
                    <tr>
                        <td>".$data['ID']."</td>
                        <td>".$data['FIRST']."</td>
                        <td>".$data['LAST']."</td>
                        <td>".$data['EMAIL']."</td>
                        <td>".$data['JOB']."</td>
                        <td>".$data['ADDRESS']."</td>
                        <td>".$data['CITY']."</td>
                        <td>".$data['PINCODE']."</td>
                        <td>".$data['DATE']."</td>
                        <td><a href='files/".$data['RESUME']."'>View</a></td>
                    </tr>

                ";
            }
        }

    ?>
    </table>
    </center>
    </div>
</body>
</html>