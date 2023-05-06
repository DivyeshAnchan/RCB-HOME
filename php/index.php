<?php
$login=false;
$showerr=false;
if($_SERVER['REQUEST_METHOD']=='POST'){
  include 'connect.php';
 $username=trim($_POST['user']);
$password=$_POST['password'];
$sql="Select * from rcb where name='$username' ";
$result=mysqli_query($con,$sql);
$fetch=mysqli_num_rows($result);
if($fetch==1){
  while($row=mysqli_fetch_assoc($result)){
    if(password_verify($password,$row['password'])){

      $login='Logged in Successfuly';
      session_start();
      $_SESSION['loggedin']=true;
      $_SESSION['user']=$username;
      header('location:afterlog.php');
    }
    else{
  $showerr="Invalid Password";
}
  }

}else{
  $showerr="Invalid Username";
}
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RCB</title>
    <link rel="stylesheet" href="../CSS/index.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Castoro+Titling&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class=top>

      <?php
    if($showerr){
      echo"
      <div class='alert alert-danger alert-dismissible fade show ' role='alert' >
      <strong>Error!</strong> ".$showerr."
      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
    }
    if($login){
    echo"
      <div class='alert alert-success alert-dismissible fade show' role='alert'>
      <strong>Success!</strong> ". $login ."
      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
    }
?>
      </div>
    <div class="container1">
      <h1>Login</h1>
      <form action="index.php" method="post">
        <div class="box">
          <i class="fa fa-envelope"></i>
          <input
            type="text"
            name="user"
            id="user"
            placeholder="Enter Your Name"
          />
        </div>
        <div class="box">
          <i class="fa fa-key"></i>
          <input
            type="password"
            name="password"
            id="pass"
            placeholder="Enter Password"
          />
        </div>

        <button class="logn">Login</button>
      </form>
      <a href="forgot.php" class="forgot">Forgot Password?</a>
      <a href="signup.php" class="button">Sign UP</a>
    </div>
    <script
      src="https://kit.fontawesome.com/75d236b5fd.js"
      crossorigin="anonymous"
    >
  </script>
  <script>
    let closebtn= document.querySelector('.btn-close');
     let divele=document.querySelector('.top');
     closebtn.addEventListener('click',()=>{
      divele.style.display="none";
     })
  </script>
  </body>
</html>