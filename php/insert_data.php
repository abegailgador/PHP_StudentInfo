<div style="text-align: center">
  <h1>USPF Students Directory</h1>
  <a href="../index.php">Back</a>
</div>  
<?php
  include './db_connection.php';

  if(isset($_POST["submit"]))
  {
    $dbconn = OpenCon();
    
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $family_name = $_POST['family_name'];
    $email_address = $_POST['email_address'];
    $age = $_POST['age'];
    $course = $_POST['course'];
    $year_level = $_POST['year_level'];

    $insert_data = "INSERT INTO studenttable (first_name,middle_name,family_name,email_address,age,course,year_level)
    VALUES ('$first_name','$middle_name','$family_name','$email_address','$age','$course','$year_level')";
    
    if (mysqli_query($dbconn, $insert_data))                                                // insert new data in studenttable
    {
      echo "<p style='color: #00ca00; text-align: center'>".$first_name. " " .$middle_name. " " .$family_name. " recorded successfully!</p>";
    } else {
      echo "Error: " . $insert_data . " " . mysqli_error($dbconn);
    }
    
    CloseCon($dbconn);
  }
?>