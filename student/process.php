<?php
include_once 'registrationform.php';
if(isse($_POST['save']))
{
     $first_name = $_POST['first_name'];
     $last_name = $_POST['last_name'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $RetypePassword = $_POST['Retype-Password'];
      
     $sql = INSERT INTO newstudent

     (first_name, last_name, email, password, Retype-Password)
            VALUES
     ('$first_name', '$last_name')

}