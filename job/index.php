<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blue Collar</title>
<link rel="stylesheet" href="bootstrap.min.css" />
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" href="style.css" />
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<!--header starts here-->
<?php
include_once 'config.php';
include_once 'header.php';
?>

<!--header ends here-->

<!--slider section starts here-->
<section>
  <div style="background-image: url('images/grey.jpg');">
  <div class="container-fluid">
    <div class="row">
      <div id="myCarousel" class="carousel slide" data-ride="carousel" >
        <!---carousel content--->
        <div class="carousel-content">
          <h1>Your Future Begins Here</h1>
          <p> More than 1000+ Jobs Available </p>
          <div class="col-lg-10 col-lg-push-1">
            <form action="search.php" method="post">
              <div class="form-group">
                <div class="col-lg-8">
                  <div class="row">
                    <input type="text" class="form-control" name="search" placeholder="Looking for a Job" style="border:none; border-radius: 10px 0px 0px 10px;"/>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-4">
                  <div class="row">
                    <select name="location" class="form-control" style="border:none; border-radius: 0px 10px 10px 0px;">
                      <option>All Locations</option>
                    </select>
                    <br />
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-4 col-lg-push-5">
                  <div class="row">
                    <input type="submit" class="slider-btn" value="Search" />
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active" > <img src="images/background.jpg" > </div>
          <div class="item" > <img src="images/job1.jpg"> </div>
          <div class="item" > <img src="images/job2.jpg"> </div>
          <div class="item"> <img src="images/job3.jpg"> </div>
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> <span class="sr-only">Next</span> </a> </div>
      </div>
    </div>
  </div>
  </div>
</section>
<!--slider section ends here-->



<!--footer section starts here-->
<?php
include_once 'footer.php';
?>
<!--footer section ends here-->

</body>
</html>
