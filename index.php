<?php
session_start();
error_reporting(0);
include('includes/dbconn.php');

if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $userType = $_POST['user_type']; // Assuming you have a dropdown for user type

    $tableName = ($userType == 'Student') ? 'student' : 'tbladmin';

    $query = mysqli_query($con, "SELECT ID FROM $tableName WHERE UserName='$username' AND Password='$password'");
    $ret = mysqli_fetch_array($query);

    if($ret > 0) {
        $_SESSION['avmsaid'] = $ret['ID'];

        if($userType == 'Student') {
            header('location: Stdash.php'); // Replace with the actual admin dashboard page
        } elseif($userType == 'Admin') {
            header('location: dashboard.php'); // Replace with the actual student dashboard page
        }
    } else {
        $msg = "Invalid Details, Please Try Again!";
    }
}
?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Entry Register Automation</title>
  <!-- Tell the browser to be responsive to screen width -->
  <!-- Developed by Naseeb Bajracharya -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href=""><b>Entry Register Automation</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Log In to start your session</p>
    <?php
if ($msg) {
    echo "<div class='alert alert-danger alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h4><i class='icon fa fa-info-circle'></i> Alert!</h4>
                $msg
    </div>";
}
?>

<form method="POST">
    <div class="form-group has-feedback">
        <input type="text" class="form-control" name="username" placeholder="Username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>
    <div class="form-group">
        <select class="form-control" name="user_type">
            <option value="Student">Student</option>
            <option value="Admin">Admin</option>
        </select>
    </div>
    <div class="row">
        <div class="col-xs-4">
            <button type="submit" name="login" class="btn btn-success btn-block btn-flat">Login</button>
        </div>
    </div>
</form>


   

    <a href="forgotpw.php">I forgot my password</a><br>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
