<?php 
    $con = mysqli_connect("localhost","Milan-Lunagariya","","project-2");

    
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $phone1 = $_REQUEST['phone1'];
    $enquiry = $_REQUEST['enquiry'];
    $chk = $_REQUEST['chk'];
    
    $ins = "INSERT INTO `contact` (`name`,`email`,`phone1`,`enquiry`,`chk`) VALUES ('$name','$email','$phone1','$enquiry','$chk')";
    $res = mysqli_query($con,$ins);
    header("location:thank.html");

    
?>
