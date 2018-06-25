<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="index, follow" />
<title>Foodwall</title>
<?php include "temp/styles.php"; ?>
<!--<link rel="stylesheet" href="css/smartphoto.min.css">-->
<script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="css/images-grid.css">
<script src="js/images-grid.js"></script>
<script src="js/timeline-gallery.js"></script>
</head>
  <body>
    <!-- Header
    ================================================= -->
		<header id="header">
        <?php include "temp/header.php";?>
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

            <!-- Post Create Box
            ================================================= -->
            <!--<div class="create-post">
            	<div class="row">
            		<div class="col-md-7 col-sm-7">
                  <div class="form-group">
                    <img src="images/users/user-4.jpg" alt="" class="profile-photo-md" />
                    <textarea name="texts" id="exampleTextarea" cols="40" rows="1" class="form-control" placeholder="Write what you wish"></textarea>
                  </div>
                </div>
            		<div class="col-md-5 col-sm-5">
                  <div class="tools">
                    <ul class="publishing-tools list-inline">
					<li><span class="upload-img"><input type="file" name="image_src" id="image_src" /></span></li>
                      <li><span class="upload-img2"><input type="file" name="image_src" id="image_src" /></span></li>
                      <li><span class="upload-img3"><input type="file" name="image_src" id="image_src" /></span></li>
                    </ul>
                    <button class="btn btn-primary pull-right btn-orange">Publish</button>
                  </div>
                </div>
            	</div>
            </div>-->

            <!-- Post Content
            ================================================= -->
            <div class="post-content">

        <div id="gallery6"></div>
			
              <div class="post-container">
                <img src="images/users/user-5.jpg" alt="user" class="profile-photo-md pull-left" />
				  
                <div class="post-detail">
                  <div class="user-info">
                    <h5><span class="profile-link">Alexis Clark</span> <span class="following">following</span></h5>
                    <p class="text-muted">Published a photo about 3 mins ago</p>
                  </div>
                  <div class="reaction">
                    <a class="btn text-green"><i class="icon ion-thumbsup"></i> 13</a>
                  </div>
                  <div class="line-divider"></div>
                  <div class="post-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  
					<i class="em em-anguished"></i> <i class="em em-anguished"></i> <i class="em em-anguished"></i></p>
                  </div>
                  <div class="line-divider"></div>
                  <div class="post-comment">
                    <img src="images/users/user-11.jpg" alt="" class="profile-photo-sm" />
                    <p><span class="profile-link">Diana </span><i class="em em-laughing"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.  </p>
                  </div>
                  <div class="post-comment">
                    <img src="images/users/user-6.jpg" alt="" class="profile-photo-sm" />
                    <p><span class="profile-link">John</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
					incididunt ut labore et dolore magna aliqua.  </p>
                  </div>
                  <div class="post-comment">
                    <img src="images/users/user-4.jpg" alt="" class="profile-photo-sm" />
                    <input type="text" class="form-control" placeholder="Post a comment">
					<button class="btn post-btn">Submit</button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Post Content
            ================================================= -->
            <div class="post-content">
			<div id="gallery5"></div>
               <!--<ul class="album-photos post-img2">
                <li>
                  <div class="img-wrapper" data-toggle="modal" data-target=".photo-11">
                    <img src="images/post-images/8.jpg" alt="post-image" class="img-responsive post-image" />
                  </div>
                  <div class="modal fade photo-11" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <img src="images/post-images/8.jpg" alt="post-image" class="img-responsive view-image" />
                      </div>
                    </div>
                  </div>
                </li>
				</ul>-->
              <div class="post-container">
                <img src="images/users/user-3.jpg" alt="user" class="profile-photo-md pull-left" />
                <div class="post-detail">
                  <div class="user-info">
                    <h5><span class="profile-link">Sophia Lee</span> <span class="following">following</span></h5>
                    <p class="text-muted">Updated her status about 33 mins ago</p>
                  </div>
                  <div class="reaction">
                    <a class="btn text-green"><i class="icon ion-thumbsup"></i> 75</a>
                  </div>
				  
				 <div class="line-divider"></div>
                  <div class="post-text">
                    <p><i class="em em-thumbsup"></i> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, 
					sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
                  </div>

                  <div class="post-comment">
                    <img src="images/users/user-4.jpg" alt="" class="profile-photo-sm" />
                    <input type="text" class="form-control" placeholder="Post a comment">
					<button class="btn post-btn">Submit</button>
                  </div>
                </div>
              </div>
            </div>

               <!-- Post Content
            ================================================= -->
            <div class="post-content">
			<div id="gallery4"></div>
              <div class="masonry">
			<!--
	<div class="brick">
				<a href="images/post-images/6.jpg" class="js-img-viwer" data-id="raion">
					<img src="images/post-images/6.jpg" alt="post-image" class="img-responsive multiple-img" />
				</a>
			</div>
			<div class="brick">
				<a href="images/post-images/2.jpg" class="js-img-viwer" data-id="raion">
					<img src="images/post-images/2.jpg" alt="post-image" class="img-responsive multiple-img" />
				</a>
			</div>
			<div class="brick">
				<a href="images/post-images/5.jpg" class="js-img-viwer" data-id="raion">
					<img src="images/post-images/5.jpg" alt="post-image" class="img-responsive multiple-img" />
				</a>
			</div>
-->

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
 <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky-kit.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/script.js"></script>
<script src="js/dynamic-menu.js"></script>

    <script>
        $('#main-navbar').dynamicMenu();
    </script>
  </body>
</html>
