<!DOCTYPE html>
<html>
<head>
  <title>USPF Students Directory</title>
  <link rel="stylesheet" href="../css/register.css">
</head>
<body>
  <div style="text-align: center">
    <h1>USPF Students Directory</h1>
    <a href="../index.php">Back</a>
  </div>  
  <form action="../php/insert_data.php" method="post">
    <ul class="form-style-1">
      <h1>Register Student</h1>
      <li>
        <label>Full Name <span class="required">*</span></label>
        <input type="text" name="first_name" class="field-divided" placeholder="First" />
        <input type="text" name="middle_name" class="field-divided" placeholder="Middle" />
        <input type="text" name="family_name" class="field-divided" placeholder="Last" />
      </li>
      <li>
        <label>Email Address <span class="required">*</span></label>
        <input type="email" name="email_address" class="field-long" />
      </li>
      <li>
        <label>Age <span class="required">*</span></label>
        <input type="text" name="age" class="field-long" />
      </li>
      <li>
        <label>Course <span class="required">*</span></label>
        <input type="text" name="course" class="field-long" />
      </li>
      <li>
        <label>Year Level <span class="required">*</span></label>
        <input type="text" name="year_level" class="field-long" />
      </li>
      <li>
          <input type="submit" name="submit" />
      </li>
    </ul>
  </form>
</body>
</html>