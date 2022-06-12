<?php
$con=new mysqli("localhost","root","","recruitment");
if($con->connect_error)
{
    echo $con->connect_error;
    die("Sorry Database Connected Failed");
}
//else
//{
//    echo "Database Connected";
//}

?>