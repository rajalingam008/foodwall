<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <title>Foodwall</title>
   <meta content="" name="description">
   <meta content="" name="author">
   <meta content="" name="keywords">
   <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
   <!-- Bootstrap CSS -->
   <link href="css/bootstrap.min.css" rel="stylesheet">
   <!-- font awesome CSS -->
   <link rel="stylesheet" href="css/font-awesome.css">
   <!-- fastresto CSS -->
   <link href="css/login/animated-fastresto.css" rel="stylesheet">
   <link href="css/login/fastresto-style.css" rel="stylesheet">
   <link href="css/login/queries-fastresto.css" media="all" rel="stylesheet" type="text/css">

</head>

<body>

   <!-- preloader -->
   <div class="preloader">
      <div class="mainpreloader"><span></span>
      </div>
   </div>
   <!-- preloader end -->

   <!-- website -->
   <div id="wraperfastresto">

      <!-- section background slider -->
      <section class="bgfastresto" aria-label="section-background">
         <div id="owl-slider-home" class="owl-carousel">
            <div class="item">
               <img alt="background" src="images/img/bg-2.jpg">
               <div class="overlay-home noselect"></div>
            </div>
            <div class="item">
               <img alt="background" src="images/img/bg-1.jpg">
               <div class="overlay-home noselect"></div>
            </div>
            <div class="item">
               <img alt="background" src="images/img/bg-3.jpg">
               <div class="overlay-home noselect"></div>
            </div>
         </div>
      </section>
      <!-- section background slider close -->

      <!-- content home -->
      <section class="contentfastresto noselect" aria-label="section-home">
         <div class="row">
            <!-- row -->
            <div class="col-md-12">
               <h1 class="animfadeInUpBig" data-time="1500">Welcome to <span class="color">Food wall</span></h1>
               <div id="slidertext" class="animfadeInUpBig" data-time="1800">
                  <div class="main-text">we deliver fast food</div>
                  <div class="main-text">we deliver healthy food</div>
                  <div class="main-text">we deliver fresh food</div>
               </div>
               <div class="devider-center animfadeInUpBig" data-time="1700"></div>
               <div class="btn-home animfadeInRight" data-time="2400"><a class="popup-form link-class" href="#reservation">Login</a>
               </div>
            </div>
         </div>
         <!-- row end -->
      </section>
      <!-- content home end -->

      <!-- reservation start -->
      <section aria-label="section-reservation">
         <div id="reservation" class="gray-popup-block mfp-hide animbounceInDown">
            <div class="devider-doted">
               <div class="col-md-12">
                  <h3 class="latin-font color">Login</h3>
                  <div class="devider-black"></div>
                  
               </div>
               <form action="#" class="row" id="form1" method="post" name="form1">
                  
                  <input id="username" name="username" class="login-inputbox" placeholder="Username" type="text"><br>
                  <input id="password" name="password" class="login-inputbox" placeholder="Password" type="text"><br>
                  <div class="pull-left">
                  <p class="login-text-color pull-left"><a class="popup-form link-class" href="#register">Register</a> </p>
                  <p class="social-login"><span>Or Login With</span>  <span><a href="#"><img src="images/img/facebook.png" width="25"> </a> 
			   <a href="#"><img src="images/img/googleplus.png" width="25"></a></span></p>
                  </div>
                  <div class="pull-right">
                  <button class="btn-content login-button2" id="send">LOGIN</button>
                  </div>
               </form>
			 <p class="login-text-color"><a class="popup-form link-class forget-password" href="#forget-password">Forget Your Password?</a></p><br>
            </div>
         </div>
      </section>
      <!-- reservation end -->
      
      <section aria-label="section-reservation">
         <div id="register" class="gray-popup-block mfp-hide animbounceInDown">
            <div class="devider-doted">
               <div class="col-md-12">
                  <h3 class="latin-font color">Register</h3>
                  <div class="devider-black"></div>
                  
               </div>
               <form action="#" class="row" id="form1" method="post" name="form1">
                  
                  <input name="firstname" class="reg-first-name col-md-6" placeholder="First Name" type="text">
                  <input name="firstname" class="reg-first-name col-md-6" placeholder="Last Name" type="text">
                  <input name="mail" class="login-input" placeholder="Your Email" type="text"><br>
                  <input name="password" class="login-input" placeholder="Password" type="text"><br>
                  <input name="birth" class="login-input" placeholder="Date Of Birth" type="text"><br>
                  <div class="gender">
                  <span>I am a: </span>
                  <label class="radio-inline"><input type="radio" name="optradio">Male</label>
                  <label class="radio-inline"><input type="radio" name="optradio">Female</label><br>
                  </div>
                  
                  <p class="login-text-color pull-left"><a class="popup-form link-class" href="#reservation">BACK</a></p>
                  <button class="btn-content pull-right login-button2" id="send">REGISTER NOW</button>
               </form><br>
               
            </div>
         </div>
      </section>
      
        <section aria-label="section-reservation">
         <div id="forget-password" class="gray-popup-block mfp-hide animbounceInDown">
            <div class="devider-doted">
               <div class="col-md-12">
                  <h3 class="latin-font color">Forget Password</h3>
                  <div class="devider-black"></div>
                  
               </div>
               <form action="#" class="row" id="form1" method="post" name="form1">
                  
                  <input id="username" name="username" class="login-inputbox" placeholder="Email" type="text"><br>
                  <p class="login-text-color pull-left"><a class="popup-form link-class" href="#reservation">BACK</a></p>
                  <button class="btn-content pull-right login-button2" id="send">SUBMIT</button>
               </form><br>
               
            </div>
         </div>
      </section>


   </div>
   <!-- website end -->

   <!-- Plugin JS -->
   <script src="js/login/pluginsfastresto.js" type="text/javascript"></script>
   <!-- fastresto JS -->
   <script src="js/login/fastresto.js" type="text/javascript"></script>
</body>
</html>