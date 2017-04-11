<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About</title>
   
    <!--BOOTSTRAP-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--COSTOM CSS--> 
    <link href="css/costom.css" rel="stylesheet">
    <link href="css/sidebar.css" rel="stylesheet">
    <!--LINK PHP MENU FILE-->

    <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  </style>
  </head>
  <body>

    <!--TOP MENU-->
   <nav class="navbar navbar-default">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            
            <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".sidebar-nav">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
           </button>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" style="float: right;">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a href="../index.php">Home <span ></span></a></li>
                <li><a href="../albums.php">Albums</a></li>
                <li ><a href="../blog.php">Blogs</a></li>
                <li class="active"><a href="../about.php">Abouts</a></li>
              </ul>
              
              
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    <!--END TOP MENU-->
    <!--breadcrumb-->
        <ol class="breadcrumb">
          <li><a href="../index.php">Index</a></li>
          <li class="active">About</li>
        </ol>


    <div class="col-sm-3 col-md-3 col-lg-3" >
      <!--LEFT Menu -->
             
       <div class="container" >
      <div class="row row-offcanvas row-offcanvas-left">
        
        <!-- sidebar -->
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
            <ul class="nav">

                  <li ><a href="../index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                  <li ><a href="../albums.php"><span class="glyphicon glyphicon-picture"></span> Albums</a></li>
                  <li ><a href="../blog.php"><span class="glyphicon glyphicon-pencil"></span> Blogs</a></li>
                  
                  
                  <li class="active"><a href="../about.php"><span class="glyphicon glyphicon-user"></span> About</a></li>

              </ul>
        </div>
    </div>
    </div>
      <!--//LEFT Menu -->
    </div>


    <div class="col-sm-9 col-md-8 col-lg-8">
    </br>
      <div class="row-sm-6 row-md-6 row-lg-6">
          <div class="col-sm-12 col-md-3 col-lg-2">
          <div style="width: 100%;
text-align:center;"">
<div class="image"><img src="../avatar.jpg" class="img-circle " alt="duong truong an" height="150" width="150" ></div>

</div>
              
          </div> 
          <div class="col-sm-12 col-md-8 col-lg-8">
            <div class="info">
              <h3> This is a handsome boy!</h3>
              <p><b>Name:</b> Duong Truong An</p>
              <p><b>Mobile:</b>0122 8989895</p>
              <p><b>Address:</b> 81 No.7 Road, Linh Trung, Thu Duc, HCMC</p>
            </div>
          </div> 
      </div>

      <div class="row-sm-6 row-md-6 row-lg-6">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.36869407588!2d106.76666161499638!3d10.859536792265112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175279d128bb0e1%3A0xae712e85fa8e2c54!2zODEgxJDGsOG7nW5nIHPhu5EgNywgTGluaCBUcnVuZywgVGjhu6cgxJDhu6ljLCBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1491884109113" width=100% height=450 frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>









    </div>



    
      
    <!--BOTTOM MENU-->
    <div class="row footer">
            <div class="col-xs-12 col-md-6">
              <h4 style="border-left: 5px solid #62A9FF; padding: 5px;">Infomation</h4>
              <p>
                <b>Author:</b> Dương Trường An
              </p>
              <p>
                <b>Student Code:</b> 1412002
              </p>
              <span class="text-muted">Copyright 2017 © lab01-1412002-UDPT</span></p>
            </div>
            <div class="col-xs-12 col-md-6">
              <h4 style="border-left: 5px solid #62A9FF; padding: 5px;">Contact</h4>
              <p>
                <b>Email:</b>
                <a href="mailto:duongtruongan@outlook.com">duongtruongan@outlook.com</a>
              </p>
              <p>
                <b>Mobile:</b>
                0122 8989895
              </p>
              <p>
                <b>Address:</b>
                81 No.7 Road, Linh Trung, Thu Duc, HCMC.
              </p>
            </div>
          </div>
    <!--BOTTOM MENU-->




   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
     <!-- Menu Toggle Script -->
    <script type='text/javascript'>
        $(function () {
            $('.navbar-toggle').click(function () {
                $('.navbar-nav').toggleClass('slide-in');
                $('.side-body').toggleClass('body-slide-in');
                $('#search').removeClass('in').addClass('collapse').slideUp(200);

                /// uncomment code for absolute positioning tweek see top comment in css
                //$('.absolute-wrapper').toggleClass('slide-in');
                
            });
           
           // Remove menu for searching
           $('#search-trigger').click(function () {
                $('.navbar-nav').removeClass('slide-in');
                $('.side-body').removeClass('body-slide-in');

                /// uncomment code for absolute positioning tweek see top comment in css
                //$('.absolute-wrapper').removeClass('slide-in');

            });
        });

        /* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
/* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
/* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
$(document).ready(function() {
  $('[data-toggle=offcanvas]').click(function() {
    $('.row-offcanvas').toggleClass('active');
  });
});

    </script>

  </body>
</html>