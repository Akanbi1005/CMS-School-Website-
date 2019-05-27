<?php


$image = $_SESSION['image'];
$fullname = $_SESSION['Fullname'];
$user = $_SESSION['Username'];

ob_start();


?>


<?php 
$con = new Database();


 ?>
<div class="page-container">
    <!-- start sidebar menu -->
    <div class="sidebar-container">
        <div class="sidemenu-container navbar-collapse collapse fixed-menu">
            <div id="remove-scroll" class="left-sidemenu">
                <ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                    <li class="sidebar-toggler-wrapper hide">
                        <div class="sidebar-toggler">
                            <span></span>
                        </div>
                    </li>
                    <li class="sidebar-user-panel">
                        <div class="user-panel">
                            <div class="pull-left image">
                                <img src="../assets/img/dp.jpg" class="img-circle user-img-circle" alt="User Image">
                            </div>
                            <div class="pull-left info">
                                <p> <?php echo $fullname; ?></p>
                                <a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline"> Online</span></a>
                            </div>
                        </div>
                    </li>




                    <li class="nav-item">
                        <a href="#" class="nav-link nav-toggle"> <i class="material-icons">person</i>
                            <span class="title">Professors</span> <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="all_professors.php" class="nav-link "> <span class="title">All Professors</span>
                                </a>
                            </li>
                            <!--  <li class="nav-item">
                                 <a href="add_professor.html" class="nav-link "> <span class="title">Add Professor</span>
                                 </a>
                             </li> -->
                            <li class="nav-item">
                                <a href="add_professor_bootstrap.php" class="nav-link "> <span class="title">Add Professor </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="edit_professor.php" class="nav-link "> <span class="title">Edit Professor</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="professor_profile.php" class="nav-link "> <span class="title">About Professor</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link nav-toggle"><i class="material-icons">group</i>
                            <span class="title">Students</span><span class="arrow"></span></a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="all_students.php" class="nav-link "> <span class="title">All Students</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="add_student_bootstrap.php" class="nav-link "> <span class="title">Register Student </span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="add_student_bootstrap.php" class="nav-link "> <span class="title">Add Student (Verify Student)</span>
                                </a>
                            </li>
                            <!-- <li class="nav-item">
                                <a href="edit_student.php" class="nav-link "> <span class="title">Edit Student</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="course.php" class="nav-link "> <span class="title">Add Student Course</span>
                                </a>
                            </li>  -->
                        </ul>
                    </li>


                    <li class="nav-item">
                        <a href="#" class="nav-link nav-toggle"> <i class="material-icons">business</i>
                            <span class="title">Departments</span> <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="all_department.php" class="nav-link "> <span class="title">All Departments</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="add_department_bootstrap.php" class="nav-link "> <span class="title">Add Department</span>
                                </a>
                            </li>
                           <!--  <li class="nav-item">
                                <a href="edit_department.php" class="nav-link "> <span class="title">Edit Department</span>
                                </a>
                            </li> -->
                        </ul>
                    </li>


                    <!-- <li class="nav-item">
                        <a href="#" class="nav-link nav-toggle"> <i class="material-icons">face</i>
                            <span class="title">Staff</span> <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="all_staffs.php" class="nav-link "> <span class="title">All Staff</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="add_staff.php" class="nav-link "> <span class="title">Add Staff </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="edit_staff.php" class="nav-link "> <span class="title">Edit Staff</span>
                                </a>
                            </li>

                        </ul>
                    </li>
 -->

                    <li class="nav-item">
                        <a href="#" class="nav-link nav-toggle"> <i class="material-icons">local_library</i>
                            <span class="title">Library</span> <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="all_assets.php" class="nav-link "> <span class="title">All Library Assets</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <!--  -->


                    <!--  -->
                </ul>
                </li>

                </ul>
            </div>
        </div>
    </div>