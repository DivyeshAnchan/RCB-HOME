
<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RCB</title>
    <link rel="stylesheet" href="../CSS/forgot.css" />
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

      <div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Success!</strong> Email Has Been Sent
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>
    </div>
    <div class="container1">
      <h1>Add Your Email To Reset Password</h1>
      <form action="" method="post">
        <div class="box">
          <i class="fa fa-envelope"></i>
          <input
            type="email"
            name="mail"
            id="mail"
            placeholder="Enter Your email"
          />
        </div>

        <button  type="submit" name="forgot"class="logn" >Reset</button>
      </form>

      <a href="./index.php" class="button">Login</a>
    </div>
    <script
      src="https://kit.fontawesome.com/75d236b5fd.js"
      crossorigin="anonymous"
    ></script>
    <script>
      let topp=document.querySelector('.top');
      let logn=document.querySelector('.logn');
      logn.addEventListener('click',()=>{
        topp.style.display="block";
      })
      let btn=document.querySelector('.btn-close');
      btn.addEventListener('click',()=>{
        topp.style.display="none";
      })
    </script>
  </body>
</html>
