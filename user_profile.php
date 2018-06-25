<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="index, follow" />
<title>Foodwall</title>
<?php include "temp/styles.php"; ?>
  <body>
    <!-- Header
    ================================================= -->
		<header id="header">
        <?php include "temp/header.php";?>
		<link href="css/lightbox.min.css" rel="stylesheet" />
		<script src="js/lightbox-plus-jquery.min.js" type="text/javascript" ></script>
        </header>
    <!--Header End-->

    <div id="page-contents">
    	<div class="container">
    		<div class="row">

          <!-- Newsfeed Common Side Bar Left
          ================================================= -->
    			<div class="col-md-3 static">
                <?php include "temp/sidebar.php"; ?>
          </div>
         <div class="col-md-9">
		 <div class="col-md-4">
		 <div class="profile-view-list"> <p>5 Post</p></div>
		 </div>
		 <div class="col-md-4">
		 <div class="profile-view-list"> <p>3 Followers</p></div>
		 </div>
		 <div class="col-md-4">
		 <div class="profile-view-list"> <p>2 Following</p></div>
		 </div>
		 <span class="clearfix"></span><br><br>
		  <ul class="nav nav-tabs profile-tab">
    <li class="active"><a data-toggle="tab" href="#profile"><i class="fa fa-user"></i> Profile</a></li>
    <li><a data-toggle="tab" href="#gallery"><i class="fa fa-image"></i> Gallery</a></li>
    <li><a data-toggle="tab" href="#reviews"><i class="fa fa-comments" aria-hidden="true"></i> Reviews</a></li>
    <li><a data-toggle="tab" href="#friend-list"><i class="fa fa-address-card-o" aria-hidden="true"></i> Friend List</a></li>
  </ul><br>
   <div class="tab-content">
    <div id="profile" class="tab-pane fade in active">
      <h4>ABOUT</h4>
      <div class="col-md-6">
	  <div class="col-md-6"><p>First Name:</p> </div>
	  <div class="col-md-6"><p>Jhone</p></div>
	  <div class="col-md-6"><p>User Name: </p></div>
	  <div class="col-md-6"><p>Jhone2016</p></div>
	  <div class="col-md-6"><p>Date of Birth: </p></div>
	  <div class="col-md-6"><p>02/08/1990</p></div>
	  <div class="col-md-6"><p>Gender: </p></div>
	  <div class="col-md-6"><p>Male</p></div>
	  </div>
	  <div class="col-md-6">
	  <div class="col-md-6"><p>Last Name: </p></div>
	  <div class="col-md-6"><p>Doe</p></div>
	  <div class="col-md-6"><p>Email: </p></div>
	  <div class="col-md-6"><p>Jhone16@gmail.com</p></div>
	  <div class="col-md-6"><p>Country: </p></div>
	  <div class="col-md-6"><p>India</p></div>
	  <div class="col-md-6"><p>Phone: </p></div>
	  <div class="col-md-6"><p>+94 9988423xxx</p></div>
	  </div><br>
	  <span class="clearfix"></span>
	  <div class="about-content-block">
                  <h4 class="grey"><i class="ion-ios-briefcase-outline icon-in-title"></i> Work Experiences</h4>
                  <div class="organization work-org">
                    <i class="fa fa-address-card pull-left" aria-hidden="true"></i>
                    <div class="work-info">
                      <h5>Company Name 3</h5>
                      <p>Manager - <span class="text-grey">1 April 2016 to present</span></p>
                    </div>
                  </div>
                  <div class="organization work-org">
                    <i class="fa fa-address-card pull-left" aria-hidden="true"></i>
                    <div class="work-info">
                      <h5>Company Name 2</h5>
                      <p>System Engineer  - <span class="text-grey">1 March 2015 to 2016</span></p>
                    </div>
                  </div>
                  <div class="organization work-org">
                    <i class="fa fa-address-card pull-left" aria-hidden="true"></i>
                    <div class="work-info">
                      <h5>Company Name 1</h5>
                      <p>Customer Executive - <span class="text-grey">1 February 2013 to 2015</span></p>
                    </div>
                  </div>
                </div>
				
				<div class="about-content-block">
                  <h4 class="grey"><i class="ion-ios-location-outline icon-in-title"></i> Location</h4>
                  <p>228 Kandanchavadi, Chennai, Tamilnadu, India</p>
                </div><br>
				
				<div class="about-content-block edit-block">
                  <h4 class="grey"><i class="ion-ios-heart-outline icon-in-title"></i> Interests</h4>
				   <ul class="list-inline interests">
                  	<li><a href="#"><i class="icon ion-android-bicycle"></i> Bycicle</a></li>
                  	<li><a href="#"><i class="icon ion-ios-camera"></i> Photgraphy</a></li>
                  	<li><a href="#"><i class="icon ion-android-cart"></i> Shopping</a></li>
                  	<li><a href="#"><i class="icon ion-android-plane"></i> Traveling</a></li>
                  	<li><a href="#"><i class="fa fa-car"></i> Driving</a></li>
                  </ul>
                </div>
				
				<div class="about-content-block">
                  <h4 class="grey"><i class="ion-ios-chatbubble-outline icon-in-title"></i> Language</h4>
                    <ul>
                      <li><a href="#">Tamil</a></li>
                      <li><a href="#">English</a></li>
                    </ul>
                </div>
				
				
    </div>
    <div id="gallery" class="tab-pane fade">
      <h3>GALLERY</h3>
	  <div class="profile-gallery-img">
      <a class="example-image-link" href="images/post-images/food1.jpg" data-lightbox="example-set" ><img class="example-image" src="images/post-images/food1.jpg" alt=""/></a>
      <a class="example-image-link" href="images/post-images/food2.jpg" data-lightbox="example-set"><img class="example-image" src="images/post-images/food2.jpg" alt="" /></a>
      <a class="example-image-link" href="images/post-images/food3.jpg" data-lightbox="example-set" ><img class="example-image" src="images/post-images/food3.jpg" alt="" /></a>
      <a class="example-image-link" href="images/post-images/food4.jpg" data-lightbox="example-set" ><img class="example-image" src="images/post-images/food4.jpg" alt="" /></a>
	  <a class="example-image-link" href="images/post-images/food5.jpg" data-lightbox="example-set" ><img class="example-image" src="images/post-images/food5.jpg" alt="" /></a>
	  </div>
    </div>
    <div id="reviews" class="tab-pane fade">
      <h3>Reviews</h3>
      <div class="friend-list">
                <div class="row">
                  <div class="col-md-6 col-sm-6">
                    <div class="friend-card">
                      <a href="food-reviews.php"><img src="images/post-images/food2.jpg" alt="profile-cover" class="img-responsive cover" /></a>
                      <div class="card-info">
                        <div class="friend-info">
                          <a href="#" class="pull-right text-green rating-points">Rating - 4</a>
                          <h5><a href="timeline.html" class="profile-link">Restaurant 1</a></h5>
                          <p>Pizza, Fast Food</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="friend-card">
                      <a href="#"><img src="images/post-images/food6.jpg" alt="profile-cover" class="img-responsive cover" /></a>
                      <div class="card-info">
                        <div class="friend-info">
                          <a href="food-reviews.php" class="pull-right text-green rating-points"> Rating - 3.5</a>
                          <h5><a href="timeline.html" class="profile-link">Restaurant 2</a></h5>
                          <p>North Indian, Chinese, Fast Food</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="friend-card">
                      <a href="#"><img src="images/post-images/food4.jpg" alt="profile-cover" class="img-responsive cover" /></a>
                      <div class="card-info">
                        <div class="friend-info">
                          <a href="timeline.html" class="pull-right text-green rating-points"> Rating - 2.5</a>
                          <h5><a href="#" class="profile-link">Restaurant 3</a></h5>
                          <p>Street Food, Arabian</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="friend-card">
                      <a href="#"><img src="images/post-images/food5.jpg" alt="profile-cover" class="img-responsive cover" /></a>
                      <div class="card-info">
                        <div class="friend-info">
                          <a href="#" class="pull-right text-green rating-points">Rating - 4.6</a>
                          <h5><a href="timelime.html" class="profile-link">Restaurant 4</a></h5>
                          <p>Juices, Beverages</p>
                        </div>
                      </div>
                    </div>
                  </div>
   
                </div>
              </div>
    </div>
    <div id="friend-list" class="tab-pane fade">
      <h3>FRIENDS LIST</h3>
      <div class="people-nearby">

              <div class="nearby-user">
                <div class="row">
                  <div class="col-md-2 col-sm-2">
                    <img src="images/users/user-17.jpg" alt="user" class="profile-photo-lg" />
                  </div>
                  <div class="col-md-7 col-sm-7">
                    <h5><a href="#" class="profile-link">Nora Wilson</a></h5>
                    <p>Software Developer</p>
                  </div>
                  <div class="col-md-3 col-sm-3">
                    <button class="btn btn-primary pull-right">Add Friend</button>
                  </div>
                </div>
              </div>

              <div class="nearby-user">
                <div class="row">
                  <div class="col-md-2 col-sm-2">
                    <img src="images/users/user-20.jpg" alt="user" class="profile-photo-lg" />
                  </div>
                  <div class="col-md-7 col-sm-7">
                    <h5><a href="#" class="profile-link">Elena Foster</a></h5>
                    <p>System Engineer</p>
                  </div>
                  <div class="col-md-3 col-sm-3">
                    <button class="btn btn-primary pull-right">Add Friend</button>
                  </div>
                </div>
              </div>
              <div class="nearby-user">
                <div class="row">
                  <div class="col-md-2 col-sm-2">
                    <img src="images/users/user-13.jpg" alt="user" class="profile-photo-lg" />
                  </div>
                  <div class="col-md-7 col-sm-7">
                    <h5><a href="#" class="profile-link">Brian Walton</a></h5>
                    <p>Designer at Designer</p>
                  </div>
                  <div class="col-md-3 col-sm-3">
                    <button class="btn btn-primary pull-right">Add Friend</button>
                  </div>
                </div>
              </div>
              <div class="nearby-user">
                <div class="row">
                  <div class="col-md-2 col-sm-2">
                    <img src="images/users/user-12.jpg" alt="user" class="profile-photo-lg" />
                  </div>
                  <div class="col-md-7 col-sm-7">
                    <h5><a href="#" class="profile-link">Cris Haris</a></h5>
                    <p>General Manager at Manager</p>
                  </div>
                  <div class="col-md-3 col-sm-3">
                    <button class="btn btn-primary pull-right">Add Friend</button>
                  </div>
                </div>
              </div>
            </div>
    </div>
  </div>

                
                
        </div>
    	</div>
    	</div>
    </div>

    <!-- Footer
    ================================================= -->
    <footer id="footer">
      <?php include "temp/footer.php"; ?>
	</footer>
    
    <!--preloader-->
    <div id="spinner-wrapper">
      <div class="spinner"></div>
    </div>

    <!-- Scripts
    ================================================= -->
<?php include "temp/script.php"; ?>
  </body>
</html>
