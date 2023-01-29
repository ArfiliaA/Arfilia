<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--=============== Favicon ===============-->
    <link rel="shortcut icon" href="./images/logo.jpg" type="image/png"
    />
    <!--=============== Swiper CSS ===============-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <!--=============== Boxicons ===============-->
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet"/>
    <!--=============== Custom StyleSheet ===============-->
    <link rel="stylesheet" href="./css/styles.css" /> 
    <link rel="stylesheet" href="scss/styles.css">
    <title>จองคิวออนไลน์</title>
  </head>
  <body>
    <!--=============== Header ===============-->
    <header class="header">
      <nav class="navbar">
        <div class="row d-flex container">
          <!-- <a href="" class="logo d-flex">
            <img src="./images/logo.png" alt="" />
          </a> -->

          <ul class="nav-list d-flex">
            <a href="">Home</a>
            <a href="">About</a>
            <a href="">Shop</a>
            <a href="">Food</a>
            <a href="">Recipes</a>
            <a href="">Contact</a>
            <span class="close d-flex"><i class="bx bx-x"></i></span>
          </ul>


          <!-- Hamburger -->
          <div class="hamburger d-flex">
            <i class="bx bx-menu"></i>
          </div>
        </div>
      </nav>

      <!--=============== Home ===============-->
      <div class="home">
        <div class="row container">
          <div class="col">

            <h1>
              จะจองที่ไหน <br />
              จะจองเมื่อไหร่ <br />
              <span class="color">จองได้ที่นี่</span>
            </h1>
            <p>
            </p>
            <div class="col d-flex">
              <a class="btn" href="login.php">ล็อกอิน</a>
            </div>
          </div>

          <div class="col">
            <img src="./images/delivery-guy.svg" alt="" />
          </div>
        </div>
      </div>

      <!--=============== SignIn Form ===============-->
      <!-- <div class="wrapper">
        <form action="login_db.php" method="post">
          <h2>SIGN IN</h2>
          <div class="control">
            <label for="">Enter Email:</label>
            <input type="email" placeholder="Enter Your Email" name="email"/>
          </div>
          <div class="control">
            <label for="">Password:</label>
            <input type="password" placeholder="Password" name="password" />
          </div>
          <div class="checkbox d-flex">
            <input type="checkbox" />
            <span>Remember Me</span>
          </div>
          <button class="btn" name="Sign">Sign In</button>
          
          <div class="links">
            <span>Forgot Password? <a href="">Click Here</a></span>
            <span>Don't Have An Account? <a href="register.php">Create One</a></span>
          </div>
        </form>

        <div class="close-form">
          <i class="bx bx-x"></i>
        </div>
      </div> -->
    </header>

    <!--=============== Footer ===============-->
    <footer class="footer">
      <div class="row container">
        <div class="col">
          <div class="icons d-flex">
          </div>
        </div>
        <div class="col">
          <div>
            <h4>Company</h4>
            <a href="">About Us</a>
            <a href="">Blog</a>
            <a href="">All Products</a>
          </div>
          <div>
            <h4>Contact</h4>
            <a href="">WhatsApp</a>
            <a href="">Support 24 </a>
            <a href="">Quick Chat</a>
          </div>
        </div>
      </div>
    </footer>
    <div class="footer-bottom">
      <div class="row container d-flex">
        <p>Copyright © 2021 Pixency</p>
        <p>Created by Arfilia</p>
      </div>
    </div>


    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="./js/testimonial.js"></script>
    <script src="./js/products.js"></script>
    <script src="./js/main.js"></script>
  </body>
</html>
