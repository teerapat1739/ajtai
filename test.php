<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
  <!-- <img src="http://placehold.it/1200x400"/> -->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
    <head>
        <title>Home</title>
    <?php
        include('include/head-tag.php');
    ?>
    </head>
    <body>
        
         <!--START HOME SECTION-->
        <div id="home-sec">
            <div class="img-head">
                <img src="assets/img/logo.gif">
            </div>
        </div>
        <!--END HOME SECTION-->
       <!--START NAV SECTION-->
         <?php
            include('MENU.php');
        ?>
        <!--END NAV SECTION-->
        
       


        <!-- START NEWS SECTIOLN  - <!-- Page Content -->
    <div class="container">

          <!-- Wrapper for Slides -->
            <div id="myCarousel" class="carousel slide">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for Slides -->
                <div class="carousel-inner">
                    <div class="item active">
                     <!-- Set the first background image using inline CSS below. -->
                    <!-- Heading Row -->
                    <div class="row">
                         <div class="col-md-8">
                <img class="img-responsive img-rounded" src="http://placehold.it/1200x700" alt="">
                        </div>
                        <div class="col-md-4">
                <h1>new1</h1>
                <p>new1new1new1new1new1new1new1new1new1new1new1new1new1new1new1new1new1new1new1
                    new1new1new1new1new1new1new1new1</p>
                <a class="btn btn-primary btn-lg" href="#">Read More >></a>
                        </div>
                        
                    </div>
                    <!-- /.row -->
                    </div>
                     <div class="item ">
                     <!-- Set the first background image using inline CSS below. -->
                    <!-- Heading Row -->
                    <div class="row">
                         <div class="col-md-8">
                <img class="img-responsive img-rounded" src="http://placehold.it/1200x700" alt="">
                        </div>
                        <div class="col-md-4">
                <h1>new2</h1>
                <p>new2new2new2new2new2new2new2new2new2new2new2new2new2new2new2new2new2new2new2new2new2new2new2new2new2new2new2</p>
                <a class="btn btn-primary btn-lg" href="#">Read More >></a>
                        </div>
                        
                    </div>
                    <!-- /.row -->
                    </div>
                     <div class="item ">
                     <!-- Set the first background image using inline CSS below. -->
                    <!-- Heading Row -->
                    <div class="row">
                         <div class="col-md-8">
                <img class="img-responsive img-rounded" src="http://placehold.it/1200x700" alt="">
                        </div>
                        <div class="col-md-4">
                <h1>New 3</h1>
                <p>์New 3New 3New 3New 3New 3New 3New 3New 3
                            New 3New 3New 3New 3New 3New 3
                            New 3New 3New 3New 3New 3New 3</p>
                <a class="btn btn-primary btn-lg" href="#">Read More >></a>
                        </div>
                        
                    </div>
                    <!-- /.row -->
                    </div>
                </div>
                 <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
            </div>
           
            <!-- /.col-md-4 -->
      

        <hr>

        <!-- Call to Action Well -->
        <div class="row">
            <div class="col-lg-12">
                <div class="well text-center">
                   ข่าวสารคณะวิศวกรรมมศาสตร์ มหาวิทยาลัยธรรมศาสตร์ ศูนย์พัทยา
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <?php
            include('phpclass/arrNews.php');
                    $obj = new arrNews;
            foreach($obj->ShowTop3News() as $value){
                echo "<div class='col-md-4'>";
                echo "<h2>".$value['header']."</h2>";
                echo "<p>".$value['content']."</p>";
                echo "<a class='btn btn-succes' href='#'>More Info</a>";
                echo "</div>";
            }
            
            ?>
           
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->
        <!-- END NEWS SECTIOLN  -->
        
        </div>
          <!--START FOOTER-->
        <div class="col-md-12 footer">
        <?php
            include('include/FOOTER.php');
        ?>
        </div>
        <!--END FOOTER-->
        
          <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP CORE SCRIPT   -->
    <script src="assets/plugins/bootstrap.min.js"></script>  
     <!-- ISOTOPE SCRIPT   -->
    <script src="assets/plugins/jquery.isotope.min.js"></script>
    <!-- PRETTY PHOTO SCRIPT   -->
    <script src="assets/plugins/jquery.prettyPhoto.js"></script>    
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
        
         <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
        
        <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>


    </body>
</html>
