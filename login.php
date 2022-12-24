<?php
  session_start();

  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $host = 'localhost';
    $uname = 'root';
    $pass = '';

    $con = new mysqli($host,$uname,$pass);
    if ($con->connect_errno){
      echo "Error";
    }

    if (empty($_POST['email'])){
      $myusername = mysqli_real_escape_string($con,$_POST['username']);
      $mypassword = mysqli_real_escape_string($con,$_POST['password']);

      mysqli_query($con, 'use users;');
      
      $sql = "SELECT id FROM users_table WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      
      if($count > 0) {
         $_SESSION['login_user'] = $myusername;
         $_SESSION['logged_in'] = true;
         header("location: index.php");
      }else {
         echo "<script>alert('Your Login Name or Password is invalid')</script>";
      }
    }
    else{
      $username = $_POST['username'];
      $password = $_POST['password'];
      $email = $_POST['email'];
      
      mysqli_query($con, 'use users;');
  
      $query = 'insert into users_table (username, email, password) values ("' . $username .'","'. $email .'","'. $password .'");';
      mysqli_query($con, $query);
    }
  }
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Modern Flat Design Login Form Example</title>
  <link rel="stylesheet" href="./style_2.css?v=<?php echo time(); ?>">

</head>
<body>
<header>
            <!-- <h2 class="username_h2">Hi <?php echo $_SESSION['login_user'] ?></h2> -->
            <figure class="logo">
                <img src="logo.png">
            </figure>
            
        </header>
<div class="login-page">
  <div class="form">
    <form action="" method="post" class="register-form">
      <input type="text" name="username" placeholder="name"/>
      <input type="password" name="password" placeholder="password"/>
      <input type="email" name="email" placeholder="email address"/>
      <button type="submit">create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form method="post" class="login-form">
      <input type="text" name="username" placeholder="username"/>
      <input type="password" name="password" placeholder="password"/>
      <button type="submit">login</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>
