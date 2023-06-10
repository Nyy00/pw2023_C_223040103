<?php 
require ('../function/function.php');

if (isset($_POST['register'])) {
    if (registrasi($_POST) >= 0) {
      echo "<script>
              alert('user baru berhasil ditambahkan. silahkan login!');
            </script>";
    } else { 
     echo   "<script>
            alert('user gagal ditambahkan!');
     </script>";
      
    }
  }


?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login And Register Form</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login & Registration Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="" method="post">
    <label for="register">
    <div class="container">
    <button class="button" onclick="goBack()"><</button>
        <div class="form signup">
            <h2>Sign Up</h2>
            <div class="inputBox">
                <input type="text" name="username" id="username" required="required">
                <i class="fa-regular fa-user"></i>
                <span>username</span>
            </div>
            <div class="inputBox">
                <input type="text" name="email" id="email" required="required">
                <i class="fa-regular fa-envelope"></i>
                <span>email address</span>
            </div>
            <div class="inputBox">
                <input type="password" name="password" id="password" required="required">
                <i class="fa-solid fa-lock"></i>
                <span>create password</span>
            </div>
            <div class="inputBox">
                <input type="password" name="password2" id="password2" required="required">
                <i class="fa-solid fa-lock"></i>
                <span>confirm password</span>
            </div>
            <div class="inputBox">
                <input type="submit" name ="register" value="Create Account">
            </div>
            <p>Already a member ? <a href="signin.php" class="login">Log in</a></p>
        </div>

        <script>
        function goBack() {
            window.history.back();
        }
    </script>
        </div>
        </form>
    </div>

    <script src="javaScript.js"></script>
    </label>
    </form>
</body>
</html>

  <script  src="./script.js"></script>

</body>
</html>
