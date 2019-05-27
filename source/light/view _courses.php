
<?php
//include_once "include/validation.php";
include_once "Include/Database.php";
$over = new Database();
?>

<?php
# start page HEADER
include "include/header.php";
?>
<?php
include "include/nav1.php";
?>
<?php

$id = $_GET['edit'];

$roll = $_GET['roll'];

$ok = $over->select_by_id('student', "$id");
?>


                     <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">

                            <div class=" pull-left">

                                <div class="page-title">Student Course View </div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="#">Student</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Student Course View </li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                        	<?php
                        	 
                        	?>
                            <!-- BEGIN PROFILE SIDEBAR -->
                           <!--GIN PROFILE SIDEBAR -->
                            <!-- BEGIN PROFILE CONTENT -->
                            <div class="profile-content">
                                <div class="row">
                                     <div class="col-lg-12">
                                         <div class="card-topline-aqua">
                                             <header></header>
                                         </div>
											<div class="white-box">
					                            <!-- Nav tabs -->
					                            <div class="p-rl-20">
					                            	<p style="color: red;">Note:You are to Provide the Roll No field with Just you Digit</p>
						                            <ul class="nav customtab nav-tabs" role="tablist">
						                                <li class="nav-item"><a href="#tab1" class="nav-link active"  data-toggle="tab" >Course View </a></li>
						                                <div class="p-rl-20">
								                                            <div class="btn-group pull-right">
								                                                <button class="nav-link active" data-toggle="dropdown">Tools
								                                                    <i class="fa fa-angle-down"></i>
								                                                </button>
								                                                <ul class="dropdown-menu pull-right">
								                                                    <li>
								                                                        <a href="javascript:;">
								                                                            <i class="fa fa-print"></i> Print </a>
								                                                    </li>
								                                                    <li>
								                                                        <a href="javascript:;">
								                                                            <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
								                                                    </li>
								                                                    <li>
								                                                        <a href="javascript:;">
								                                                            <i class="fa fa-file-excel-o"></i> Export to Excel </a>
								                                                    </li>
								                                                </ul>
								                                            </div>
								                                        </div>
						                            </ul>
					                            </div>
					                            <!-- Tab panes -->
					                            <div class="tab-content">
					                                <div class="tab-pane active fontawesome-demo" id="tab1">
														<div id="biography" >
						                                    <div class="row">
						                                        <div class="col-md-3 col-6 b-r"> <strong>Full Name</strong>
						                                            <br>
						                                            <p class="text-muted"><?php echo $ok['first_name']." ".$ok['last_name']?></p>
						                                        </div>
						                                        <div class="col-md-3 col-6 b-r"> <strong>Matric No</strong>
						                                            <br>
						                                            <p class="text-muted"><?php echo $ok['roll_no']?></p>
						                                        </div>
						                                        <div class="col-md-3 col-6 b-r"> <strong>Email</strong>
						                                            <br>
						                                            <p class="text-muted"><?php echo $ok['email']?></p>
						                                        </div>
						                                        <div class="col-md-3 col-6"> <strong>Gender</strong>
						                                            <br>
						                                            <p class="text-muted"><?php echo $ok['gender']?></p>
						                                        </div>
						                                        
						                                    </div>
						                                    <hr>
															<div class="">
							                                  <div class="">
							                                    <table id="example1" class="display" style="width:100%;">
							                                    	
							                                        <thead>
							                                            <tr style="text-align: center;">
							                                                <th>Subject Name</th>
							                                                <th>Grade Point</th>
							                                                
							                                            </tr>
							                                        </thead>

							                                        <tbody>

							                                        	<?php
							                                        	
							                                        	$pops = $over->customQuery("SELECT *,  (ca + exam) as total  FROM courses c WHERE roll_no = '$roll'");

							                                        	$cumulative_total = 0;
							                                        	foreach ($pops as $pop) {
							                                        	
							                                        	?>
							                                            <tr style="text-align: center;">
							                                            	
							                                                <td style="text-align: left"><b><?=$pop['course_name']?></b></td>
							                                                <td><?=$pop['Unit']?></td>
							                                                
							                                                <?php
							                                                $cumulative_total += $pop['total'];
							                                                ?>
							                                                



							                                                
							                                                
							                                                
							                                            </tr>
							                                            <?php
							                                        	}
							                                        	?>
							                                        
								                                        	<?php
								                                        		$units = $over->customQuery("SELECT SUM(Unit) as unit_sum FROM courses WHERE roll_no = '$roll'", true);
									                                        	$select = $over->customQuery("SELECT count(course_name) as course_sum FROM courses WHERE roll_no ='$roll'", true); ?>
								                                        	
									                                        
							                                        	
							                                        </tbody>
							                                    </table>
                                                   		</div>
                                                   
					                            </div>
					                        </div>
                                         </div>
                                     </div>
                                </div>
                                <!-- END PROFILE CONTENT -->
                            </div>
                        </div>
                    </div>

                     <!-- add content here -->
                </div>
            </div>
            <!-- end page content -->
            
        <!-- end page container -->
        <!-- start footer -->
        <div class="page-footer">
            <div class="page-footer-inner"> 2018 &copy; Yaba Staff School University Theme By
                <a href="mailto:redstartheme@gmail.com" target="_top" class="makerCss">Codelex</a>
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- end footer -->
    </div>
    <!-- start js include path -->
    <script src="../assets/plugins/jquery/jquery.min.js" ></script>
    <script src="../assets/plugins/popper/popper.js" ></script>
    <script src="../assets/plugins/jquery-blockui/jquery.blockui.min.js" ></script>
	<script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- bootstrap -->
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js" ></script>
    <script src="../assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js" ></script>
    <!-- Common js-->
	<script src="../assets/js/app.js" ></script>
    <script src="../assets/js/layout.js" ></script>
	<script src="../assets/js/theme-color.js" ></script>
	<!-- Material -->
	<script src="../assets/plugins/material/material.min.js"></script>
    <!-- end js include path -->
</body>

<!-- Mirrored from radixtouch.in/templates/admin/Yaba Staff School/source/light/blank_page.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Oct 2018 17:32:44 GMT -->
</html>