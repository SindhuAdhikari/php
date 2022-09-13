<?php
$query="SELECT" * FROM users WHERE email='$email' AND password='$password' ";
$result=mysqli_query($conn,$query);
if(mysqli_num_rows($result)===1){
    $row=mysqli_fetch_assoc($result);
    if($row['email']===$email && $row['password']===$password){
        header(location:dashboard.php);
    }
    else{
        echo"email and password is wrong";
    }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="centered-wrapper">
    <div class="centered-content">
    <form>
    <h1>Login</h1>
    <lable for="username"><b>Username</b></lable>
    <input type="text" placeholder="Enter username" name="Username" required><br><br>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required><br><br>
    <input type="submit" value="Log in">
    <br><br>
    </form>
    <a href="Sign up.html">Sign up</a>
    </div>
</body>
</html>