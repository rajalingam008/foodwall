<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="index, follow" />
<title>Foodwall</title>
<?php include "temp/styles.php"; ?>
<style>
.success-box {
  border:1px solid #eee;
  background:#f9f9f9;
}
.success-box img {
  margin-right:10px;
  display:inline-block;
  vertical-align:top;
}
.success-box > div {
  vertical-align:top;
  display:inline-block;
  color:#2697ea;
}
/* Rating Star Widgets Style */
.rating-stars ul {
  list-style-type:none;
  padding:0;
  
  -moz-user-select:none;
  -webkit-user-select:none;
}
.rating-stars ul > li.star {
  display:inline-block;
  
}
/* Idle State of the stars */
.rating-stars ul > li.star > i.fa {
  font-size:1.5em; /* Change the size of the stars */
  color:#ccc; /* Color on idle state */
}
/* Hover state of the stars */
.rating-stars ul > li.star.hover > i.fa {
  color:#FFCC36;
}
/* Selected state of the stars */
.rating-stars ul > li.star.selected > i.fa {
  color:#FF912C;
}
</style>
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
         <div class="col-md-9 rating-reviews">
		 <h4 class="grey titile-name"><i class="icon ion-android-checkmark-circle"></i> Restaurant Name</h4>
		 <div class="form-group">
      <label class="control-label col-sm-3" for="email">Dish Name:</label>
      <div class="col-sm-9">
        <select class="form-control" id="year">
                          <option value="year">Dish1</option>
                          <option selected>Dish 2</option>
                          <option>Food 3</option>
                          <option>Food 4</option>
                          <option>Food 5</option>
                          <option>Food 6</option>
                        </select>
      </div>
    </div>
	<span class="clearfix"></span>
	<div class="rating-view">
	<div class="col-sm-3"><p>Overall Food Experience :</p></div>
	<div class="col-sm-9">
			   <input id="input-21e" value="0" type="text" class="rating" data-min=0 data-max=5 data-step=0.5 data-size="xs" title="">
			   </div>
			   </div>
   <span class="clearfix"></span>
   <div class="rating-view">
	<div class="col-sm-3"><p>Ambiance :</p></div>
	<div class="col-sm-9">
			   <input id="input-21e" value="0" type="text" class="rating" data-min=0 data-max=5 data-step=0.5 data-size="xs" title="">
			   </div>
			   </div>
<span class="clearfix"></span>
   <div class="rating-view">
	<div class="col-sm-3"><p>Taste :</p></div>
	<div class="col-sm-9">
			   <input id="input-21e" value="0" type="text" class="rating" data-min=0 data-max=5 data-step=0.5 data-size="xs" title="">
			   </div>
			   </div>
<span class="clearfix"></span>
   <div class="rating-view">
	<div class="col-sm-3"><p>Service :</p></div>
	<div class="col-sm-9">
			   <input id="input-21e" value="0" type="text" class="rating" data-min=0 data-max=5 data-step=0.5 data-size="xs" title="">
			   </div>
			   </div>
<span class="clearfix"></span>
   <div class="rating-view">
	<div class="col-sm-3"><p>Value of Money :</p></div>
	<div class="col-sm-9">
			   <input id="input-21e" value="0" type="text" class="rating" data-min=0 data-max=5 data-step=0.5 data-size="xs" title="">
			   </div>
			   </div>
<span class="clearfix"></span>
   <div class="rating-view">
	<div class="col-sm-3"><p>Share Your Review About Restaurant :</p></div>
	<div class="col-sm-9">
			   <textarea class="form-control" name="reviews" rows="8" ></textarea>
			   </div>
			   </div>
<span class="clearfix"></span><br>
<button class="btn profile-btn pull-right">Submit</button>			   

                
                
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
<link href="css/star-rating.css" media="all" rel="stylesheet" type="text/css"/>
 <script src="js/star-rating.js" type="text/javascript"></script>

  </body>
</html>
