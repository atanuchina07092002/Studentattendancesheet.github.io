<?php include('server2.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style_r.css">
  <script src="https://kit.fontawesome.com/042a4ee70c.js" crossorigin="anonymous"></script>
</head>
<body style="background-image: url('img/registration-online-membership-network-internet-business-technology-concept-104512007.webp');">
  <div class="header">
    <h2>Register</h2>
  </div>
  
  <form method="post" action="register_s.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
      <label>Email</label>
      <input type="email" name="email" value="<?php echo $email; ?>">
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password_1" autocomplete="current-password" required="" id="id_password">
      <i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>
    </div>
    <div class="input-group">
      <label>Confirm password</label>
      <input type="password" name="password_2">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="reg_user">Register</button>
    </div>
    <p >
      Already a member? <a class="sign" href="login_s.php">Sign in</a>
    </p>
  </form>
</body>
<script>
  const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#id_password');
  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
  });
</script>
</html>
