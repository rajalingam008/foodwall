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
          <div class="edit-profile-container">
                <div class="block-title">
                  <h4 class="grey"><i class="icon ion-ios-locked-outline"></i>Change Password</h4>
                  <div class="line"></div>
             
                </div>
                <div class="edit-block">
                  <form name="update-pass" id="education" class="form-inline">
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="my-password">Old password</label>
                        <input id="my-password" class="form-control input-group-lg" type="password" name="password" title="Enter password" placeholder="Old password"/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label>New password</label>
                        <input class="form-control input-group-lg" type="password" name="password" title="Enter password" placeholder="New password"/>
                      </div>
                      <div class="form-group col-xs-6">
                        <label>Confirm password</label>
                        <input class="form-control input-group-lg" type="password" name="password" title="Enter password" placeholder="Confirm password"/>
                      </div>
                    </div>
                    <button class="btn profile-btn pull-right">Update Password</button>
                  </form>
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
