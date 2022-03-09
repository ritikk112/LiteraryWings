<?php
$server = "localhost";
$uname = "root";
$passwordd = "";
$name = "demo";

$con = mysqli_connect($server, $uname, $passwordd, $name);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
$username = $_POST['username'];  
    $password = $_POST['password'];  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "SELECT * from final where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful! WELCOME $username </center></h1>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
            exit;
        }     
?>


<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Literary Wings | Welcome</title>
        <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <!-- font awesome cdn link  -->
      <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
      />

      <!-- custom css file link  -->
      <link rel="stylesheet" href="style2.css" />
      <link rel="stylesheet" href="style.css" />
      <script
        type="module"
        src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"
      ></script>
      <script
        nomodule=""
        src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js"
      ></script>
      <script src="https://unpkg.com/phosphor-icons"></script>
    </head>
    <body>
      <section class = "login2">
        <header style = " background-color: rgba(0, 0, 0, 0.8);">
            <a href="#" class = "logo" style = "text-decoration: none;"><i class="fas fa-feather-alt"></i>Literary Wings</a>
            <nav class="navbar">
              <ul>
                <li><a href="index.html" style="text-decoration: none;">Home</a></li>
                <li><a href="index.html#about" style="text-decoration: none;">About Us</a></li>
                <li><a href="index.html#initiatives" style="text-decoration: none;">Initiatives</a></li>
                <li><a href="index.html#gallery" style="text-decoration: none;">Gallery</a></li>
                <li><a href="index.html#contact" style="text-decoration: none;">Contact Us</a></li>
                <li><a href = "login.html" style="text-decoration: none;">Log In</a></li>
              </ul>
            </nav>
            <div class="fas fa-bars"></div>
        </header>
        <div>
            <div class = "box2" style = "font-size: 50px; color: #0d9979; padding:5px;
    border: 5px solid #0d9979;
    background-color: rgba(0, 0, 0, 0.8);
    opacity: 0.9;
    height: 22rem;
    height: auto;
    width: auto;">
              WELCOME!
            </div>
            <a href = "../frontend/index.html" style = " text-decoration: none;">
            <button class = "submit" style = "display: flex; align-items: center; margin:50px 0px 0px 85px">OK</button></a>
        </div>
        <br>
      </section>
        <!-- Footer section starts -->
        <section class="footer">
      <div class="box-container">
        <div class="box">
          <a href="#" class="logo" target = "_blank" style="text-decoration: none;" ><i class="fas fa-feather-alt"></i>Literary Wings</a>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda
            possimus impedit voluptate fuga id sapiente perspiciatis amet eos
            esse iure.
          </p>
        </div>

        <div class="box">
          <h3 class="share">share</h3>
          <a href="https://facebook.com" target = "_blank">facebook</a>
          <a href="https://twitter.com" target = "_blank">twitter</a>
          <a href="https://instagram.com" target = "_blank">instagram</a>
          <a href="https://github.com" target = "_blank">github</a>
        </div>

        <div class="box">
          <h3 class="letter">suggestion</h3>
          <form action="">
            <input type="email" placeholder="Suggestion" />
            <button type="submit" class="fas fa-paper-plane"></button>
          </form>
        </div>
      </div>

      <h1 class="credit">
        created by <span>Literary Wings</span> | all rights reserved<i class="far fa-registered" style = "size: 2px;"></i>
      </h1>
    </section>

    <!-- footer section ends -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>