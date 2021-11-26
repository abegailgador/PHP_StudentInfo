<?php
  include '../php/db_connection.php';

  $dbconn = OpenCon();

  $view_data = "SELECT * FROM studenttable";
  $studenttable = (mysqli_query($dbconn, $view_data));

  while($data = mysqli_fetch_array($studenttable))
  {
  ?>
  <a href=""></a>
    <tr>
      <td><?php echo $data['first_name']; ?></td>
      <td><?php echo $data['middle_name']; ?></td>
      <td><?php echo $data['family_name']; ?></td>
      <td><?php echo $data['course']; ?></td>
      <td><?php echo $data['year_level']; ?></td>
      <td><?php echo $data['age']; ?></td>
      <td><?php echo $data['email_address']; ?></td>
    </tr>	
  <?php
  }
  
  CloseCon($dbconn);
?>