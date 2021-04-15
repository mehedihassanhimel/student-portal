<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<link rel="stylesheet" type="text/css" href="../CSS/navBar2.css"/> 
</head>
<body>

<div class="navbar">
  <a href="../Controller/home1.php">Home</a>
  <a href="#">Academic</a>
  <a href="#">Offered Courses</a>
  <a href="#">Forms</a>
  <a href="#">Financials</a>

  <div class="dropdown">
    <button class="dropbtn">Settings
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="../View/showProfile.php">Profile</a>
      <a href="../View/changePasswordV.php">Change Password</a>
    </div>
  </div> 
  <a  style="float:right" href="../Controller/logout.php">Logout</a>
</div>

</body>
</html>
