<?php
  
session_start();
 
 $_SESSION['username'] ="vikas jain"; //variable
 $_SESSION['class'] ="mca";






 echo $_SESSION['username'];
 echo $_SESSION['class'];



session_unset(); //session end

//echo $_SESSION['username'];
echo $_SESSION['username'];
echo $_SESSION['class'];