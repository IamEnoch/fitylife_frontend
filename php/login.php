<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/signin.css">
    <title>Document</title>
</head>
<body>
   <main>
       <section class="francis-container">
           <div class="francis-row">
               <div class="francis-inner-container overlay">
                   <h1>Be Happy with <strong>Fity Life:</strong> <br> 
                    "Physical fitness is the first requisite of happiness."</h1>
               </div>
               <div class="francis-inner-container card_holder">
                   <img src="https://raw.githubusercontent.com/waithakaFM/signup-frank-projo/main/life.jpg" alt="fittylife" class="francis">
               <div class="francis-front">
                   <h2>Please input your personal info</h2>
                   <form action="../db/sign.php" method="POST" enctype="multipart/form-data" >
                       <div class="francis-form-holder">
                           <input type="text" name="name" id="name" required placeholder="Your Name">
                           <input type="text" name="number" id="number" required placeholder="Your Phone Number">
                           <input type="email" name="email" id="email" required placeholder="Your email address">
                           <input type="password" name="password" id="password" placeholder="Password" required>
                           <input type="password" name="confirmPassword" id="password" placeholder="Confirm your Password" required>
                           <button type="submit">Sign Up</a> </button>
                           <!-- <div class="francis-checkbox">
                            <input type="checkbox" class="francis-custom-control-input" id="customCheck1">
                            <label class="francis-custom-control-label" for="customCheck1" required>Agree terms and conditions</label>
                           </div> -->
                           <p>Already have an account? <span><a href="javascript:void(0)" id="logInLink" class="logInLink">Log In</a></span></p>
                       </div>
                   </form>
               </div>
               <div class="francis-back" method="POST" enctype="multipart/form" >
                   <form action="../db/login.php" method="POST" enctype="multipart/form-data">
                       <div class="francis-form-holder">
                           <input type="email" name="email" id="email" placeholder="Your Email" required>
                           <input type="password" name="password" id="password" placeholder="Password" required>
                           <button type="submit">Login</a> </button>
                           <p>Don't have a account? <span><a href="javascript:void(0)" id="logInLink2" class="logInLink">Sign
                            Up</a></span></p>
                       </div>
                   </form>  
               </div>
            </div>
           </div>
       </section>
   </main>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="../js/signin.js"></script>
</html>