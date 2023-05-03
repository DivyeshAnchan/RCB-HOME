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
    <div class="container1">
      <h1>Login</h1>
      <form action="login.php" method="get">
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
      <a href="forgot.html" class="forgot">Forgot Password?</a>
      <a href="./signup.html" class="button">Sign UP</a>
    </div>
    <script
      src="https://kit.fontawesome.com/75d236b5fd.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
