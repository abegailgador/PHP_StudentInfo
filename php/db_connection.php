<?php
  function OpenCon()
  {
    $dbhost = "localhost";
    $dbuser = "john";
    $dbpass = "1234567";
    $db = "peopledb";
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n". $conn -> error);
    
    return $conn;
  }

  function CloseCon($conn)
  {
    $conn -> close();
  }
?>
