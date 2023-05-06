<?php
  $showalert=false;
  $showerr=false;
  $useralready=false;
if($_SERVER['REQUEST_METHOD']=='POST'){
  include 'connect.php';
  $username=trim($_POST['user']);
  $password=$_POST['password'];
  $cpassword=$_POST['cpassword'];
  $existsql="Select * from rcb where name='$username' ";
  $results=mysqli_query($con,$existsql);
  $numrows=mysqli_num_rows($results);
  if($numrows>0){
   $useralready="User Already Exists";

  }else{
    if(($password==$cpassword)){
      $hash=password_hash($password,PASSWORD_DEFAULT);
      $sql="INSERT INTO `rcb` (`name`, `password`, `date`) VALUES ('$username', '$hash', current_timestamp())";
      $result=mysqli_query($con,$sql);
      if($result){
        $showalert=true;
      }
    }else{
      $showerr="Passwords Don't Match";
    }
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
    <link rel="stylesheet" href="../CSS/sign.css" />
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
    <div class="top">

      <?php
    if($useralready){
    echo"
      <div class='alert alert-danger alert-dismissible fade show ' role='alert' >
      <strong>Error!</strong> ".$useralready."
      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
    }
    if($showerr){
    echo"
      <div class='alert alert-danger alert-dismissible fade show ' role='alert' >
      <strong>Error!</strong> ".$showerr."
      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
    }
    if($showalert){
    echo"
    <div class='alert alert-success alert-dismissible fade show' role='alert'>
      <strong>Success!</strong> Your Account is created Now Log in
      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
    }
    ?>
    </div>
    <div class="container1">
      <h1>Sign Up</h1>
      <form action="signup.php" method="post">
        <div class="box">
          <i class="fa fa-envelope"></i>
          <input maxlength="12"
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
            placeholder="Create Password"
          />
        </div>
        <div class="box">
          <i class="fa fa-key"></i>
          <input
            type="password"
            name="cpassword"
            id="pass"
            placeholder="Confirm Password"
          />
        </div>

        <a href="./index.php" class="button">Login</a>
        <button type="submit" id="sign">Sign UP</button>
      </form>
    </div>
    <script
      src="https://kit.fontawesome.com/75d236b5fd.js"
      crossorigin="anonymous"
    ></script>
    <script>
     let closebtn= document.querySelector('.btn-close');
     let divele=document.querySelector('.top');
     closebtn.addEventListener('click',()=>{
      divele.style.display="none";
     })
    </script>
  </body>
</html>
