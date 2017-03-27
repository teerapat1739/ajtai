<!DOCTYPE html>
<html>
<head>
	<title>Admin-Menu</title>
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
        
			 <?php
            include('MENU.php');
        	?>
            <div class="row">
            <div style="text-align: center;">
                 <li class="manage-Course dropdown">
                   <a href="showAllnew.php?status=admin" class="btn btn-block btn-info">ManagePerson</a>
                        <div class="dropdown-content">
                               
                            </div>
               </li>
                       
                <li class="manage-Course dropdown">
                   <a href="showAllnew.php" class="btn btn-block btn-info">ManagePerson</a>
                        <div class="dropdown-content">
                               
                            </div>
               </li>

               <li class="manage-Course dropdown">
                   <a href="#" class="btn btn-block btn-info">ManageCourse</a>
                        <div class="dropdown-content">
                                <a href="CourseSoftware.php?status=admin">SOFTWARE</a>
                                <a href="CourseAuto.php?status=admin">AUTOMOTIVE</a>
                            </div>
               </li>

                <li class="manage-Course dropdown">
                   <a href="showAllnew.php" class="btn btn-block btn-info">ManageLife</a>
               </li>
               </div>>
            </div>
	</body>
</html>