<?php include("./includes/connect.inc.php");?>
<?php
session_start();
if (isset($_SESSION['user_login'])) {
$log_user_name=$_SESSION['user_login'];
$coverpicposts=mysql_query("SELECT * FROM admin WHERE email='$log_user_name'") or die (mysql_error);
while($row = mysql_fetch_assoc($coverpicposts)) {
$user=$row['id'];
$log_user_email=$row['email'];
$db_password=$row['password'];
}
}
else
{
$user="";
}
if ($user==""){
  die("ERROR");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <style type="text/css">
    #navabr>li{
      margin-left: 20px;
    }
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Admin Panel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav" id="navabr">
      <li class="nav-item active">
        <a class="nav-link" href="admin-dashboard.php">Teachers Attendence</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="generate-timetable.php">Generate Timetable</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="add-teachers.php?profile_id=<?php echo $user;?>">Add Teacher</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="add-classroom.php">Add Classrooms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="add-courses.php">Add Courses</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          More
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
      </li>
    </ul>
  </div>
</nav>

