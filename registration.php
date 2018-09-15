<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="styleSheets\regform.css">
  </head>
  <body>
    <div class="header">
      <h1>Register</h1>
    </div>

    <form method="post" action="registration.php">
      <div class="inputs">
        <label>Full Name</label>
        <input type="text" name="UserName" value="">
      </div>
      <div class="inputs">
        <label>NIC Number</label>
        <input type="text" name="nic" value="">
      </div>
      <div class="inputs">
        <label>Address</label>
        <input type="text" name="Address" value="">
      </div>
      <div class="inputs">
        <label>Date Of Birth</label>
        <input type="text" name="dob" value="">
      </div>
      <div class="inputs">
        <label>Gender</label>
        <input type="text" name="Gender" value="">
      </div>
      <div class="inputs">
        <label>Contact Number</label>
        <input type="text" name="ContactNumber" value="">
      </div>
      <div class="inputs">
        <label>E-Mail</label>
        <input type="text" name="Email" value="">
      </div>
      <div class="inputs">
        <label>Entry Date</label>
        <input type="text" name="EntryDate" value="">
      </div>
      <div class="inputs">
        <label>UserName</label>
        <input type="text" name="UserName" value="">
      </div>
      <div class="inputs">
        <label>Password</label>
        <input type="text" name="Password" value="">
      </div>
      <div class="inputs">
        <label>Confirm Password</label>
        <input type="text" name="confirmPassword" value="">
      </div>

      <div class="inputs">
        <button type="submit" name="register" class="btn">Register</button>
      </div>



    </form>
  </body>
</html>
