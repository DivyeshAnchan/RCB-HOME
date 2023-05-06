<?php
session_start();
if(!isset($_SESSION['loggedin'])||$_SESSION['loggedin']!=true){
  header('location:index.php');
  exit;
}

?>
    <!DOCTYPE html>
    <html>
  <head>
    <title>Welcome to My Page</title>
    <style>
      .button {
    position: absolute;
    right: 0;
    
    border: 2px solid white;
    background: none;
    padding: 9px 28px;
    border-radius: 4px;
    color: white;
    font-size: 16px;
    text-decoration: none;
    vertical-align: middle;
    }
    .button:hover {
    background: white;
    color: rgb(86, 1, 1);
    opacity: 0.5;
    }
      /* CSS styling */
      body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
        margin: 0;
        padding: 0;
      }
      .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: white;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      }
      header {
        background-color: #4285f4;
        color: white;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 20px;
      }
      nav {
        display: flex;
      }
      nav a {
        color: white;
        text-decoration: none;
        padding: 10px;
        margin-right: 10px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
      }
      nav a:hover {
        background-color: #2b71b9;
      }
      h1 {
        text-align: center;
        font-size: 36px;
        margin-bottom: 20px;
        text-transform: uppercase;
      }
      p {
        font-size: 18px;
        line-height: 1.5;
        margin-bottom: 20px;
      }
      .button {
        display: block;
        width: 200px;
        margin: 0 auto;
        padding: 10px;
        text-align: center;
        background-color: #4285f4;
        color: white;
        border-radius: 5px;
        text-decoration: none;
        font-size: 18px;
        font-weight: bold;
        transition: background-color 0.3s ease;
      }
      .button:hover {
        background-color: #2b71b9;
      }
    </style>
  </head>
  <body>
    <header>
      <h2>Welcome to My Page</h2>
      <nav>
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
      </nav>
    </header>
    <div class="container">
      <h1>Welcome <?php  echo $_SESSION['user'] ?></h1>
      
      <p>Thank you for visiting my page. I hope you find the information here helpful and informative. Please feel free to explore and let me know if you have any questions or feedback.</p>
      
      <a href="logout.php" class="button" >LogOut</a>
    </div>
    
    
    <script>
      // JS script
  
    </script>
  </body>
</html>
