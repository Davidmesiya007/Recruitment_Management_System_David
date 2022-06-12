<?php

    include("config.php")
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Job Application Form</title>
    <link rel="stylesheet" href="style1.css" />
  </head>
  <body>
    <div class="container">
      <div class="apply_box">
        <h1>
          Job Application
          <span class="title_small">(Web)</span>
        </h1>
        <form method="post" action="job_registration.php">
          <div class="form_container">
            <div class="form_control">
              <label for="first_name"> First Name </label>
              <input
                id="first_name"
                name="first_name"
                placeholder="Enter First Name..."
              />
            </div>
            <div class="form_control">
              <label for="last_name"> Last Name </label>
              <input
                id="last_name"
                name="last_name"
                placeholder="Enter Last Name..."
              />
            </div>
            <div class="form_control">
              <label for="email"> Email </label>
              <input
                type="email"
                id="email"
                name="email"
                placeholder="Enter Email..."
              />
            </div>
            <div class="form_control">
              <label for="job_role"> Job Role </label>
              <select id="job_role" name="job_role">
                <option value="">Select Job Role</option>
                <option value="frontend">Frontend Developer</option>
                <option value="backend">Backend Developer</option>
                <option value="full_stack">Full Stack Developer</option>
                <option value="ui_ux">UI UX Designer</option>
              </select>
            </div>
            <div class="textarea_control">
              <label for="address"> Address </label>
              <textarea
                id="address"
                name="address"
                row="4"
                cols="50"
                placeholder="Enter Address"
              ></textarea>
            </div>
            <div class="form_control">
              <label for="city"> City </label>
              <input id="city" name="city" placeholder="Enter City Name..." />
            </div>
            <div class="form_control">
              <label for="pincode"> Pincode </label>
              <input
                type="number"
                id="pincode"
                name="pincode"
                placeholder="Enter Pincode Name..."
              />
            </div>
            <div class="form_control">
              <label for="date"> Date </label>
              <input value="2022-01-10" type="date" id="date" name="date" />
            </div>
            <div class="form_control">
              <label for="upload"> Upload Your CV </label>
              <input type="file" id="upload" name="upload" />
            </div>
          </div>
          <div class="button_container">
            <button type="submit" name="finish">Apply Now</button>
          </div>
        </form>
      </div>
    </div>
    <?php
    if(isset($_POST["finish"]))
    {
           $fname=$_POST["first_name"];
            $lname=$_POST["last_name"];
            $email=$_POST["email"];
            $job=$_POST["job_role"];
            $address=$_POST["address"];
            $city=$_POST["city"];
            $pincode=$_POST["pincode"];
            $date=$_POST["date"];
            $resume=$_POST["upload"];
            
            if($fname!=""&&$lname!=""&&$email!=""&&$job!=""&&$address!=""&&$city!=""&&$pincode!=""&&$date!="")
            {
                $qry="INSERT INTO application (FIRST,LAST,EMAIL,JOB,ADDRESS,CITY,PINCODE,DATE,RESUME)
                VALUES('$fname','$lname','$email','$job','$address','$city','$pincode','$date','$resume')";
                if($con->query($qry))
                {
                    echo "<p class='correct'>successfully register your job</p>";
                    header("location:index.php");
                }
                else
                {
                    echo "<p class='error'>Some error Try Again Later</p>";
                }
             
            }
            else
            {
                echo "<p class='error'>All Fields are required</p>";
            }
    }

    else
    {
       echo "<p>Please Fill All The Details</p>";
    }
    ?>
    </div>
  </body>
</html>