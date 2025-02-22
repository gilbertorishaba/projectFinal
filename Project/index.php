
<!DOCTYPE html>
<html lang="en">
  <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Group16 Project</title>
        <link rel="stylesheet" href="style.css">
    <!-- using fontawesome cdn -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
       integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
  <body>
    <!-- Navigation bar -->
    <nav>  
      <img src="images/img2.jpg" alt="Logo">
      <a href="#"id="registerLink">Register</a>
           <a href="#"id="LoginButton">Login</a>
            <a href="#">Contact</a>
             <a href="#">Faqs</a>
              <a href="#">About</a>
               <a href="#">Home</a>
               <a href="display.php">Display Customers</a>
       </nav>


       <!-- end of navigation bar -->
    
  <!-- Banner section -->
    <div class="banner">
      <div class="welcome-message">
        <h1>Welcome to SLAREG gadgets!</h1>
          <p>To the moon with slareg.</p>
</div>
    </div>

 
    <!-- About us section -->
    <h3 class="title">About slareg gadgets</h3>
    <div class="about-section">
        <div class="column left-column">
           <img src="images/img2.jpg" alt="Motherboard Image" style="width:100%;">
    </div>

    <div class="column right-column">
        <h2>Welcome to slareg gadgets!</h2>
          <p>slareg gaadgets is a leading supplier of laptops, mobile phones, tablets, and personal computers, covering both local and international markets.</p>
           <p>Our company is intended to provide gadgets that will facilitate business activities, enable our clients, especially students in fields like computer science and software engineering, to obtain practical skills.</p>
            <p>To our customers, we have a fully trained team capable of guiding you on quality brands and how to use, maintain the digital devices. Come and experience that enchanting welcome!</p>
      </div>
    </div>
    

  <div class="about-section">
      <div class="columns right-columns">
          <img src="images/img3.jpg" alt="brands" style="width:100%;">
   </div>


    <div class=" column left-columns">
          <h2>Products</h2>
              <p>We deal in new laptops,desktops,phones and all other gadgets .</p> compa
              <p>We have even a team of experienced personel to carry out networking computers into organisations like banks and schools </p>
              <p>Are you also interested to perfect your software skills,we are here to get you covered</p>
        </div>
      </div>  
      
 <h4 class="brands">Available Products</h4>
    <div class="container">
      <div  class="about-section">
<div class="more">
    <img class="imga" src="images/image5.jpg"alt="brands-image" width="300px">
    <img class="imgb" src="images/image4.jpg"alt="brands-image" width="300px">
    <img class="imgc" src="images/image6.jpg"alt="brands-image" width="300px">
  </div>
</div>
</div>

<div>
<h1>Our Esteemed Client</h1>
 <div class="video">
  <video controls>
  <source  src="vid.mp4" type="video/mp4"></div>
  </video>
</div>
<div>


 <!-- Footer Section -->
   <div class="footer">
      <div class="columned">
        <div class="column">
          <h4>Contact information</h4>
          <p>Contact: <a href="mailto:slareggadgets.com">slareg gadgets</a></p>
          <p>Phone: (256) 709242703</p>
          <p>Address: 123 Pioneer Mall, Kampala Uganda</p>
        </div>


  <div class=" social-links">
        <h4>Follow Us</h4>

        <ul>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li> <a href=""><i class="fab fa-instagram"></i></a></li>
                <li> <a href=""><i class="fab fa-whatsapp"></i></a></li>
          </ul>
    </div>    

        <div class="pages">
          <h3 class="linkpages">Quick Links</h3>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Products</a></li>
          </ul>
      </div>
       
      <div class="copyright">
        <p >copyright &copy;2024:Designed by Gilbert,Ruthie,Sarah,Lawrence and Natasha</p>
      </div>
   
      <div class="login-popup" id="registerForm">
    <h2>Register</h2>
    <form action="insert.php" method="POST">
        <label for="firstName">First Name</label>
        <input type="text" id =firstName name="firstName"placeholder="Please enter your First Name">

        <label for="lastName">Last Name</label>
        <input type="text" id="lastName" name="lastName" placeholder="Please enter your Last Name">

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Please input your Password">

        <button type="button" onclick="register()">Register</button>
        <button type="button" onclick="cancelRegister()">Cancel</button>
    </form>
</div>


<div>
<!-- <button id="LoginButton"></button> -->
<div class="loginContainer" id="LoginForm">
  <h2>Login</h2>
  <form id="loginForm">
    <label for="UserName">UserName</label>
    <input type="text" id="UserName" name="UserName" placeholder="UserName" required>

    <label for="email">Email</label>
    <input type="email" id="Email" name="Email" placeholder="Email" required>

    <label for="Password">Password</label>
    <input type="Password" id="Password" name="Password" placeholder="Please input your password" required>
    
    <button type="button" onclick="Login()">Login</button>
    <button onclick="cancelLogin">Cancel</button>
  </form>
</div>

     <script src="index.js"></script>
  </body>
</html>
