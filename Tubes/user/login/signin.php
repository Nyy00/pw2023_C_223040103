<?php 
        session_start();


        require ('../function/function.php');

        if (isset($_POST["signin"])) {

        $username = $_POST['username'];
        $password = $_POST['password'];

        $result = mysqli_query($conn = koneksi(),"SELECT * FROM users WHERE username = '$username'");
      
        // cek dulu username 
        if ( mysqli_num_rows($result) === 1 ) {

          // cek password
          $row = mysqli_fetch_assoc($result);
          if (password_verify($password, $row['password'])) 
            //set session
            $_SESSION["signin"]=true;

            header ("location:../index.php");
            exit;

          }
        }
        
    
        
        ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>signin form</title>
  <link rel="stylesheet" href="style.css">

</head>
<body>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>signin form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles.css">
</head>
<form action="" method = "post">
<label for="signin">
<div class="container">
    <button class="button" onclick="goBack()"><</button>
        <div class="form signup">
            <h2>Sign In</h2>
            <div class="inputBox">
                <input type="text" name="username" id="username" required="required">
                <i class="fa-regular fa-user"></i>
                <span>username</span>
            </div>
            <div class="inputBox">
                <input type="password" name="password" id="password" required="required">
                <i class="fa-solid fa-lock"></i>
                <span>password</span>
            </div>
            <div class="inputBox">
                <input type="submit" name="signin" value="signin">
            </div>
            <p>Not Registerd ? <a href="signup.php" class="create">Create an account</a></p>

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