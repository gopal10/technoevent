<!DOCTYPE html>
<html>
<head>
     <title>Welcome to Container</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/g.png">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link rel="stylesheet" href="css/animated.css">
    </head>
  <script>
      $('.message a').click(function() {
  $('form').animate({
    height: "toggle",
    opacity: "toggle"
  }, "slow");
});
  </script>
  
   <style>
      /* Form */
.form {
  position: relative;
  z-index: 1;
   background: url("") no-repeat center ;
  max-width: 300px;
  margin: 0 auto 100px;
  padding-top: -100px;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
  text-align: right;
}
.form .thumbnail {
  background: #fff;
  width: 150px;
  height: 150px;
  margin: 0 auto 30px;
  padding: 50px 30px;
 
  box-sizing: border-box;
}
.form .thumbnail img {
  display: block;
  width: 100%;
}
.form input {
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  outline: 0;
  background: #EF3B3A;
  width: 100%;
  border: 0;
  padding: 15px;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #EF3B3A;
  text-decoration: none;
}
.form .register-form {
  display: none;
}

/* END Form */
/* Demo Purposes */
body {
  background: #fff;
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
body:before {
  content: "";
  position: fixed;
  top: 0;
  left: 0;
  display: block;
  background: rgba(255, 255, 255, 0.8);
  width: 100%;
  height: 100%;
}



/*old css data*/
#cover {
  background: url("lp4.jpg") no-repeat center ;
  background-size:cover;
  background-attachment:fixed;
  height: 1000px;
  position: relative;
  text-align: center;
  top: -55px;
  width: 100%;
}


.navigation {
  background-color: rgba(255, 255, 255, 0.9);
  overflow-y: auto;
  position: fixed;
  left: 0;
  top: 0;
  text-align: center;
  width: 100%;
  z-index: 10000;
} 

ul {
  padding: 0;
}

li {
  color: #14213D;
  display: inline-block;
  font-family: 'Abel', sans-serif;
  font-size: 16px;
  font-weight: 300;
  margin: 16px 20px;
  text-transform: uppercase;
}

#logo {
  color: #FCA311;
  font-family: 'Raleway', sans-serif;;
  font-size: 26px;
  padding: 0px 50px;
}

.cover-content {
  box-sizing: border-box;
 
  position: relative;
  text-align: right;
  top: 280px;
  width: 70%;
}

h1 {
  color: #FFF;
  font-family: 'Amatic SC', cursive;
  font-size: 72px;
  line-height: 60px;
  padding: 20px 10px;
  text-align: center;
}

h2 {
  color: #FF4500;
  font-family: 'Raleway', sans-serif;
  font-size: 42px;
  font-weight: 300;
  text-align: center;
}

h3 {
  color: #14213D;
  font-family: 'Abel', sans-serif;
  font-size: 28px;
  text-align: center;
  text-transform: uppercase;
}

h4 {
  color: #FCA311;
  font-family: 'Abel', sans-serif;
  font-size: 24px;
  margin: 0px 0px 50px 0px;
}

p {
  color: #333;
  font-family: 'Raleway', sans-serif;
  font-size: 16px;
  font-weight: 300;
}

a {
  text-decoration: none;
}

.btn {
  background-color: #ff4500;
  font-family: 'Raleway', sans-serif;
}

#btn{
background-color:#ff4500;
}

.products {
  background: #EEEFF1;
  box-sizing: border-box;
  width: 90%;
  margin: 20px auto;
  padding: 20px 0px;
  text-align: center;
}

.product {
  display: inline-block;
  margin: 0px 2% 80px 2%;
  text-align: center;
  width: 45%;
}

.product img {
  width: 100%;
}

.blue {
  color: #14213D !important;
}


.footer{
    background-color: #333;
  color: #fff;
  padding: 30px 100px ;
}
.footer p {
    font-family: 'Raleway', sans-serif;
    color:#EEEFF1;
  text-transform: uppercase;
  font-size: 20px;
  position:center;
}
.okok{
    padding-top: 0px;
    width:1400px;
        height:1600px;
      position: relative;
       margin-top: 10px; 
}


  </style>    
  <body>
   <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href="index.php">
                    <div-col-xs-3><img src="images/g.png" alt="logo" width="35px"></div-col-xs-3>
                    <div-col-xs-9>Container</div-col-xs-9>
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php"><i class="fa fa-home" aria-hidden="true">Home</i>
</a></li>
                    <li><a href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i>

 Login</a></li>
        
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    
<div id="cover">
    <div class="cover-content">
     
<div class="form">


  <div class="login-form">
   <form action="registercon.php" method="POST">
    <input type="text" id="user" name="user" placeholder="Username"/>
    <input type="email" id="email" name="email" placeholder="E-Mail Address"/>
    <input type="password" id="pass" name="pass" placeholder="Password"/>
    <input type="password" id="confpass" name="confpass" placeholder="Confirm-Password"/>
    <input type="text" id="contno" name="contno" placeholder="Contact Number"/>
    <input type="text" id="city" name="city" placeholder="City"/>
    <input type="submit" id="btn" value="Register" />
   </form>
  </div>
</div>
</div>
</div>
</body>
<footer >
    <div class="TechnoEvent"> <center>&copy; Copyrights By www.technoevent.com All Rights Reserved   </center></div>
    </footer>

      
</html>


