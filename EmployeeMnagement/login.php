<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="login_style.css">
    <title>login page</title>
</head>
<body>
    <div class="center">
        <h1>Login</h1>
        <form action="#" method="POST" autocomplete="off">
        <input type="text" name="username" class="textfiled" placeholder="">
        <input type="password" name="password" class="textfiled" placeholder="">

        <div class="forgetpass"><a href="
        #" class="forget" onclick="message()">Forget Password ?</a></div>

        <input type="submit" value="Login" name="login" class="btn">

        <div class="signup">New Member ?<a href="
        #" class="forgetpass" onclick="singup_message()">SignUp here</a></div>

    </div>
</form>
    <script>
        function message(){
           return alert("Remember your password");
        }
        function singup_message(){
            return alert("signUp page not found");
        }
    </script>
</body>
</html>

<?php
// include("connection.php");

if(isset($_POST['login'])){
    $username=$_POST['username'];
    $pwd=$_POST['password'];

    if($username=="Ravi Kumar" && $pwd=="12345678" ){
        $_SESSION['user_name'] = $username;
        header('location:index.php');
        
        // <meta http-equiv="refresh" content ="0 ; url=http://localhost/project/admin_page.php">        
    }
    else{
      echo "<script>alert('Incorect username and password')</script>";
    
    }
}


?>