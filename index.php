<!-- PHP Script -->
<?php include("./includes/connect.inc.php");?>
<?php
session_start();
if (isset($_SESSION['user_login'])) {
$user=$_SESSION['user_login'];
}
else
{
$user="";
}
//Login form PHP Code
if (isset($_POST["user_login"])&& isset($_POST["password_login"])) {
$user_login= strip_tags(@$_POST['user_login']);
$password_login= preg_replace('#[^A-Za-z0-9]#i','',$_POST["password_login"]);//
$password_login_md5=md5($password_login);
$sql=mysql_query("SELECT * From admin WHERE email='$user_login' AND password='$password_login_md5'  LIMIT 1");//
//Check for existence
$user_count= mysql_num_rows($sql);
if ($user_count==1) {
while($row=mysql_fetch_array($sql)) {
$id=$row["id"];
}
$_SESSION["user_login"]=$user_login;
header("location:dashboard.php?profile_id=$id");
exit();
}
else
{
echo("<script>alert('The Information is Incorrect')</script>");
}
}
?>
<!-- End Of PHP -->
<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
  <link rel="stylesheet" type="text/css" href="./css/main.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body class="text-center">
    <form class="form-signin" action="#" method="POST">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" name="user_login" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="password_login" id="inputPassword" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
  </body>
</html>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
