<?php
//@ob_start();
session_start();
 
   $localhost='localhost';
   $username='root';
   $password='xspl#!#!@123';
   $db_name='shopping';
   $conn=mysqli_connect($localhost,$username,$password,$db_name);
   mysqli_set_charset($conn, 'utf8');
   
   if(!$conn) {
      die('Could not connect: ' . mysqli_error());
   }   
 
 

?>