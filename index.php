<?php
session_start();

$error = [ 
  'login' => $_SESSION['login_error'] ?? '',
  'register' => $_SESSION['register_error'] ?? '' 

];
$activeForm = $_SESSION ['active_form'] ?? 'login';

session_unset();

function showError($error) {
      return !empty($error) ? "<p class = 'error-message'>$error </p> " : ''; 
}

function isActiveForm($forName, $activeForm) {
  return $forName === $activeForm ? 'active' : '';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
    <title>Attendance</title>
</head>
<body>
    
    <div class="container">
        <div class="form-box <?= isActiveForm('login', $activeForm);?>" id="login-form">
            <form action="login_register.php" method="post">
              <H2>Login</H2>  
              <?= showError($error['login']); ?>
              <input type="email" name="email" placeholder="Email" required>
              <input type="password" name="password" placeholder="Password" required>
                <button   type="sumbit" name="login" >Login</button>
                <P> don't have an account ? <a href="#" onclick="showForm('register-form')">Register</a></P>
            </form>
        </div>
            <div class="form-box <?= isActiveForm('register', $activeForm);?>" id="register-form">
                <form action="login_register.php"method="post">
                  <H2>Register</H2>  
                  <?= showError($error['register']); ?>
                  <input type="text" name="username" placeholder="Username" required>
                  <input type="number" name="age" placeholder="Age" required>
                  <input type="text" name="yearlevel" placeholder="Year level" required>
                  <input type="text" name="course" placeholder="Course" required>
                  
                  <input type="email" name="email" placeholder="Email" required>
                  <input type="password" name="password" placeholder="Password" required>
                  <select name="role" required >
                    <option value="">--Select Role--</option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                  </select>
                    <button   type="sumbit" name="register" >Register</button>
                    <P> already have an account ? <a href="#" onclick="showForm('login-form')">Logn</a></P>
                </form>
            </div>
</div>


<script src="script.js"></script>

</body>
</html>