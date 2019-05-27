<?php
//include_once "include/validation.php";
include_once "Include/Database.php";
?>

<?php
# start page HEADER
include "include/header.php";
?>
<?php
include "include/nav1.php";
?>
			 <!-- end sidebar menu -->
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">All Courses List</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="#">Courses</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">All Courses List</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                           <div class="card-box">
                               <div class="card-head">
                                   <header>All Courses</header>
                               </div>
                               <div class="card-body ">
                               	<!-- start course list -->
		                     <div class="row">
								<div class="col-lg-3 col-md-6 col-12 col-sm-6"> 
									<div class="blogThumb">
										<div class="thumb-center"><img class="img-responsive" alt="user" src="../assets/img/course/course1.jpg"></div>
			                        	<div class="course-box">
			                        	<h4>PHP Development Course</h4>
				                            <div class="text-muted"><span class="m-r-10">April 23</span> 
				                            	<a class="course-likes m-l-10" href="#"><i class="fa fa-heart-o"></i> 654</a>
				                            </div>
				                            <p><span><i class="ti-alarm-clock"></i> Duration: 6 Months</span></p>
				                            <p><span><i class="ti-user"></i> Professor: Jane Doe</span></p>
				                            <p><span><i class="fa fa-graduation-cap"></i> Students: 200+</span></p>
				                            <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-info">Read More</button>
			                        	</div>
			                        </div>	
		                    	</div>
			                    <div class="col-lg-3 col-md-6 col-12 col-sm-6 "> 
				                    <div class="blogThumb">
										<div class="thumb-center"><img class="img-responsive" alt="user" src="../assets/img/course/course2.jpg"></div>
			                        	<div class="course-box">
			                        	<h4>PHP Development Course</h4>
				                            <div class="text-muted"><span class="m-r-10">April 23</span> 
				                            	<a class="course-likes m-l-10" href="#"><i class="fa fa-heart-o"></i> 654</a>
				                            </div>
				                            <p><span><i class="ti-alarm-clock"></i> Duration: 6 Months</span></p>
				                            <p><span><i class="ti-user"></i> Professor: Jane Doe</span></p>
				                            <p><span><i class="fa fa-graduation-cap"></i> Students: 200+</span></p>
				                            <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-info">Read More</button>
			                        	</div>
			                        </div>	
		                    	</div>
			                    <div class="col-lg-3 col-md-6 col-12 col-sm-6"> 
				                    <div class="blogThumb">
										<div class="thumb-center"><img class="img-responsive" alt="user" src="../assets/img/course/course3.jpg"></div>
			                        	<div class="course-box">
			                        	<h4>PHP Development Course</h4>
				                            <div class="text-muted"><span class="m-r-10">April 23</span> 
				                            	<a class="course-likes m-l-10" href="#"><i class="fa fa-heart-o"></i> 654</a>
				                            </div>
				                            <p><span><i class="ti-alarm-clock"></i> Duration: 6 Months</span></p>
				                            <p><span><i class="ti-user"></i> Professor: Jane Doe</span></p>
				                            <p><span><i class="fa fa-graduation-cap"></i> Students: 200+</span></p>
				                            <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-info">Read More</button>
			                        	</div>
			                        </div>	
		                    	</div>
			                    <div class="col-lg-3 col-md-6 col-12 col-sm-6"> 
				                    <div class="blogThumb">
										<div class="thumb-center"><img class="img-responsive" alt="user" src="../assets/img/course/course4.jpg"></div>
			                        	<div class="course-box">
			                        	<h4>PHP Development Course</h4>
				                            <div class="text-muted"><span class="m-r-10">April 23</span> 
				                            	<a class="course-likes m-l-10" href="#"><i class="fa fa-heart-o"></i> 654</a>
				                            </div>
				                            <p><span><i class="ti-alarm-clock"></i> Duration: 6 Months</span></p>
				                            <p><span><i class="ti-user"></i> Professor: Jane Doe</span></p>
				                            <p><span><i class="fa fa-graduation-cap"></i> Students: 200+</span></p>
				                            <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-info">Read More</button>
			                        	</div>
			                        </div>	
		                    	</div>
		                    	<div class="col-lg-3 col-md-6 col-12 col-sm-6"> 
									<div class="blogThumb">
										<div class="thumb-center"><img class="img-responsive" alt="user" src="../assets/img/course/course1.jpg"></div>
			                        	<div class="course-box">
			                        	<h4>PHP Development Course</h4>
				                            <div class="text-muted"><span class="m-r-10">April 23</span> 
				                            	<a class="course-likes m-l-10" href="#"><i class="fa fa-heart-o"></i> 654</a>
				                            </div>
				                            <p><span><i class="ti-alarm-clock"></i> Duration: 6 Months</span></p>
				                            <p><span><i class="ti-user"></i> Professor: Jane Doe</span></p>
				                            <p><span><i class="fa fa-graduation-cap"></i> Students: 200+</span></p>
				                            <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-info">Read More</button>
			                        	</div>
			                        </div>	
		                    	</div>
			                    <div class="col-lg-3 col-md-6 col-12 col-sm-6 "> 
				                    <div class="blogThumb">
										<div class="thumb-center"><img class="img-responsive" alt="user" src="../assets/img/course/course2.jpg"></div>
			                        	<div class="course-box">
			                        	<h4>PHP Development Course</h4>
				                            <div class="text-muted"><span class="m-r-10">April 23</span> 
				                            	<a class="course-likes m-l-10" href="#"><i class="fa fa-heart-o"></i> 654</a>
				                            </div>
				                            <p><span><i class="ti-alarm-clock"></i> Duration: 6 Months</span></p>
				                            <p><span><i class="ti-user"></i> Professor: Jane Doe</span></p>
				                            <p><span><i class="fa fa-graduation-cap"></i> Students: 200+</span></p>
				                            <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-info">Read More</button>
			                        	</div>
			                        </div>	
		                    	</div>
			                    <div class="col-lg-3 col-md-6 col-12 col-sm-6"> 
				                    <div class="blogThumb">
										<div class="thumb-center"><img class="img-responsive" alt="user" src="../assets/img/course/course3.jpg"></div>
			                        	<div class="course-box">
			                        	<h4>PHP Development Course</h4>
				                            <div class="text-muted"><span class="m-r-10">April 23</span> 
				                            	<a class="course-likes m-l-10" href="#"><i class="fa fa-heart-o"></i> 654</a>
				                            </div>
				                            <p><span><i class="ti-alarm-clock"></i> Duration: 6 Months</span></p>
				                            <p><span><i class="ti-user"></i> Professor: Jane Doe</span></p>
				                            <p><span><i class="fa fa-graduation-cap"></i> Students: 200+</span></p>
				                            <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-info">Read More</button>
			                        	</div>
			                        </div>	
		                    	</div>
			                    <div class="col-lg-3 col-md-6 col-12 col-sm-6"> 
				                    <div class="blogThumb">
										<div class="thumb-center"><img class="img-responsive" alt="user" src="../assets/img/course/course4.jpg"></div>
			                        	<div class="course-box">
			                        	<h4>PHP Development Course</h4>
				                            <div class="text-muted"><span class="m-r-10">April 23</span> 
				                            	<a class="course-likes m-l-10" href="#"><i class="fa fa-heart-o"></i> 654</a>
				                            </div>
				                            <p><span><i class="ti-alarm-clock"></i> Duration: 6 Months</span></p>
				                            <p><span><i class="ti-user"></i> Professor: Jane Doe</span></p>
				                            <p><span><i class="fa fa-graduation-cap"></i> Students: 200+</span></p>
				                            <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-info">Read More</button>
			                        	</div>
			                        </div>	
		                    	</div>
		                    	<div class="col-lg-3 col-md-6 col-12 col-sm-6"> 
									<div class="blogThumb">
										<div class="thumb-center"><img class="img-responsive" alt="user" src="../assets/img/course/course1.jpg"></div>
			                        	<div class="course-box">
			                        	<h4>PHP Development Course</h4>
				                            <div class="text-muted"><span class="m-r-10">April 23</span> 
				                            	<a class="course-likes m-l-10" href="#"><i class="fa fa-heart-o"></i> 654</a>
				                            </div>
				                            <p><span><i class="ti-alarm-clock"></i> Duration: 6 Months</span></p>
				                            <p><span><i class="ti-user"></i> Professor: Jane Doe</span></p>
				                            <p><span><i class="fa fa-graduation-cap"></i> Students: 200+</span></p>
				                            <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-info">Read More</button>
			                        	</div>
			                        </div>	
		                    	</div>
			                    <div class="col-lg-3 col-md-6 col-12 col-sm-6 "> 
				                    <div class="blogThumb">
										<div class="thumb-center"><img class="img-responsive" alt="user" src="../assets/img/course/course2.jpg"></div>
			                        	<div class="course-box">
			                        	<h4>PHP Development Course</h4>
				                            <div class="text-muted"><span class="m-r-10">April 23</span> 
				                            	<a class="course-likes m-l-10" href="#"><i class="fa fa-heart-o"></i> 654</a>
				                            </div>
				                            <p><span><i class="ti-alarm-clock"></i> Duration: 6 Months</span></p>
				                            <p><span><i class="ti-user"></i> Professor: Jane Doe</span></p>
				                            <p><span><i class="fa fa-graduation-cap"></i> Students: 200+</span></p>
				                            <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-info">Read More</button>
			                        	</div>
			                        </div>	
		                    	</div>
			                    <div class="col-lg-3 col-md-6 col-12 col-sm-6"> 
				                    <div class="blogThumb">
										<div class="thumb-center"><img class="img-responsive" alt="user" src="../assets/img/course/course3.jpg"></div>
			                        	<div class="course-box">
			                        	<h4>PHP Development Course</h4>
				                            <div class="text-muted"><span class="m-r-10">April 23</span> 
				                            	<a class="course-likes m-l-10" href="#"><i class="fa fa-heart-o"></i> 654</a>
				                            </div>
				                            <p><span><i class="ti-alarm-clock"></i> Duration: 6 Months</span></p>
				                            <p><span><i class="ti-user"></i> Professor: Jane Doe</span></p>
				                            <p><span><i class="fa fa-graduation-cap"></i> Students: 200+</span></p>
				                            <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-info">Read More</button>
			                        	</div>
			                        </div>	
		                    	</div>
			                    <div class="col-lg-3 col-md-6 col-12 col-sm-6"> 
				                    <div class="blogThumb">
										<div class="thumb-center"><img class="img-responsive" alt="user" src="../assets/img/course/course4.jpg"></div>
			                        	<div class="course-box">
			                        	<h4>PHP Development Course</h4>
				                            <div class="text-muted"><span class="m-r-10">April 23</span> 
				                            	<a class="course-likes m-l-10" href="#"><i class="fa fa-heart-o"></i> 654</a>
				                            </div>
				                            <p><span><i class="ti-alarm-clock"></i> Duration: 6 Months</span></p>
				                            <p><span><i class="ti-user"></i> Professor: Jane Doe</span></p>
				                            <p><span><i class="fa fa-graduation-cap"></i> Students: 200+</span></p>
				                            <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-info">Read More</button>
			                        	</div>
			                        </div>	
		                    	</div>
					        </div>
	        				<!-- End course list -->
                            </div>
                         </div>
                    </div>
                </div>
            </div>
            <!-- end page content -->
            <!-- start chat sidebar -->
            <div class="chat-sidebar-container" data-close-on-body-click="false">
                <div class="chat-sidebar">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="#quick_sidebar_tab_1" class="nav-link active tab-icon"  data-toggle="tab"> <i class="material-icons">chat</i>Chat
                                    <span class="badge badge-danger">4</span>
                                </a>
                        </li>
                        <li class="nav-item">
                            <a href="#quick_sidebar_tab_3" class="nav-link tab-icon"  data-toggle="tab"> <i class="material-icons">settings</i> Settings
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <!-- Start User Chat --> 
 						<div class="tab-pane active chat-sidebar-chat in active show" role="tabpanel" id="quick_sidebar_tab_1">
                        	<div class="chat-sidebar-list">
	                            <div class="chat-sidebar-chat-users slimscroll-style" data-rail-color="#ddd" data-wrapper-class="chat-sidebar-list">
	                                <div class="chat-header"><h5 class="list-heading">Online</h5></div>
	                                <ul class="media-list list-items">
	                                    <li class="media"><img class="media-object" src="../assets/img/prof/prof3.jpg" width="35" height="35" alt="...">
	                                        <i class="online dot"></i>
	                                        <div class="media-body">
	                                            <h5 class="media-heading">John Deo</h5>
	                                            <div class="media-heading-sub">Spine Surgeon</div>
	                                        </div>
	                                    </li>
	                                    <li class="media">
	                                        <div class="media-status">
	                                            <span class="badge badge-success">5</span>
	                                        </div> <img class="media-object" src="../assets/img/prof/prof1.jpg" width="35" height="35" alt="...">
	                                        <i class="busy dot"></i>
	                                        <div class="media-body">
	                                            <h5 class="media-heading">Rajesh</h5>
	                                            <div class="media-heading-sub">Director</div>
	                                        </div>
	                                    </li>
	                                    <li class="media"><img class="media-object" src="../assets/img/prof/prof5.jpg" width="35" height="35" alt="...">
	                                        <i class="away dot"></i>
	                                        <div class="media-body">
	                                            <h5 class="media-heading">Jacob Ryan</h5>
	                                            <div class="media-heading-sub">Ortho Surgeon</div>
	                                        </div>
	                                    </li>
	                                    <li class="media">
	                                        <div class="media-status">
	                                            <span class="badge badge-danger">8</span>
	                                        </div> <img class="media-object" src="../assets/img/prof/prof4.jpg" width="35" height="35" alt="...">
	                                        <i class="online dot"></i>
	                                        <div class="media-body">
	                                            <h5 class="media-heading">Kehn Anderson</h5>
	                                            <div class="media-heading-sub">CEO</div>
	                                        </div>
	                                    </li>
	                                    <li class="media"><img class="media-object" src="../assets/img/prof/prof2.jpg" width="35" height="35" alt="...">
	                                        <i class="busy dot"></i>
	                                        <div class="media-body">
	                                            <h5 class="media-heading">Sarah Smith</h5>
	                                            <div class="media-heading-sub">Anaesthetics</div>
	                                        </div>
	                                    </li>
	                                    <li class="media"><img class="media-object" src="../assets/img/prof/prof7.jpg" width="35" height="35" alt="...">
	                                        <i class="online dot"></i>
	                                        <div class="media-body">
	                                            <h5 class="media-heading">Vlad Cardella</h5>
	                                            <div class="media-heading-sub">Cardiologist</div>
	                                        </div>
	                                    </li>
	                                </ul>
	                                <div class="chat-header"><h5 class="list-heading">Offline</h5></div>
	                                <ul class="media-list list-items">
	                                    <li class="media">
	                                        <div class="media-status">
	                                            <span class="badge badge-warning">4</span>
	                                        </div> <img class="media-object" src="../assets/img/prof/prof6.jpg" width="35" height="35" alt="...">
	                                        <i class="offline dot"></i>
	                                        <div class="media-body">
	                                            <h5 class="media-heading">Jennifer Maklen</h5>
	                                            <div class="media-heading-sub">Nurse</div>
	                                            <div class="media-heading-small">Last seen 01:20 AM</div>
	                                        </div>
	                                    </li>
	                                    <li class="media"><img class="media-object" src="../assets/img/prof/prof8.jpg" width="35" height="35" alt="...">
	                                        <i class="offline dot"></i>
	                                        <div class="media-body">
	                                            <h5 class="media-heading">Lina Smith</h5>
	                                            <div class="media-heading-sub">Ortho Surgeon</div>
	                                            <div class="media-heading-small">Last seen 11:14 PM</div>
	                                        </div>
	                                    </li>
	                                    <li class="media">
	                                        <div class="media-status">
	                                            <span class="badge badge-success">9</span>
	                                        </div> <img class="media-object" src="../assets/img/prof/prof9.jpg" width="35" height="35" alt="...">
	                                        <i class="offline dot"></i>
	                                        <div class="media-body">
	                                            <h5 class="media-heading">Jeff Adam</h5>
	                                            <div class="media-heading-sub">Compounder</div>
	                                            <div class="media-heading-small">Last seen 3:31 PM</div>
	                                        </div>
	                                    </li>
	                                    <li class="media"><img class="media-object" src="../assets/img/prof/prof10.jpg" width="35" height="35" alt="...">
	                                        <i class="offline dot"></i>
	                                        <div class="media-body">
	                                            <h5 class="media-heading">Anjelina Cardella</h5>
	                                            <div class="media-heading-sub">Physiotherapist</div>
	                                            <div class="media-heading-small">Last seen 7:45 PM</div>
	                                        </div>
	                                    </li>
	                                </ul>
	                            </div>
                            </div>
                            <div class="chat-sidebar-item">
                                <div class="chat-sidebar-chat-user">
                                    <div class="page-quick-sidemenu">
                                        <a href="javascript:;" class="chat-sidebar-back-to-list">
                                            <i class="fa fa-angle-double-left"></i>Back
                                        </a>
                                    </div>
                                    <div class="chat-sidebar-chat-user-messages">
                                        <div class="post out">
                                            <img class="avatar" alt="" src="../assets/img/dp.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span> <a href="javascript:;" class="name">Kiran Patel</a> <span class="datetime">9:10</span>
                                                <span class="body-out"> could you send me menu icons ? </span>
                                            </div>
                                        </div>
                                        <div class="post in">
                                            <img class="avatar" alt="" src="../assets/img/prof/prof5.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span> <a href="javascript:;" class="name">Jacob Ryan</a> <span class="datetime">9:10</span>
                                                <span class="body"> please give me 10 minutes. </span>
                                            </div>
                                        </div>
                                        <div class="post out">
                                            <img class="avatar" alt="" src="../assets/img/dp.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span> <a href="javascript:;" class="name">Kiran Patel</a> <span class="datetime">9:11</span>
                                                <span class="body-out"> ok fine :) </span>
                                            </div>
                                        </div>
                                        <div class="post in">
                                            <img class="avatar" alt="" src="../assets/img/prof/prof5.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span> <a href="javascript:;" class="name">Jacob Ryan</a> <span class="datetime">9:22</span>
                                                <span class="body">Sorry for
													the delay. i sent mail to you. let me know if it is ok or not.</span>
                                            </div>
                                        </div>
                                        <div class="post out">
                                            <img class="avatar" alt="" src="../assets/img/dp.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span> <a href="javascript:;" class="name">Kiran Patel</a> <span class="datetime">9:26</span>
                                                <span class="body-out"> it is perfect! :) </span>
                                            </div>
                                        </div>
                                        <div class="post out">
                                            <img class="avatar" alt="" src="../assets/img/dp.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span> <a href="javascript:;" class="name">Kiran Patel</a> <span class="datetime">9:26</span>
                                                <span class="body-out"> Great! Thanks. </span>
                                            </div>
                                        </div>
                                        <div class="post in">
                                            <img class="avatar" alt="" src="../assets/img/prof/prof5.jpg" />
                                            <div class="message">
                                                <span class="arrow"></span> <a href="javascript:;" class="name">Jacob Ryan</a> <span class="datetime">9:27</span>
                                                <span class="body"> it is my pleasure :) </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-sidebar-chat-user-form">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Type a message here...">
                                            <div class="input-group-btn">
                                                <button type="button" class="btn deepPink-bgcolor">
                                                    <i class="fa fa-arrow-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End User Chat --> 
 						<!-- Start Setting Panel --> 
 						<div class="tab-pane chat-sidebar-settings" role="tabpanel" id="quick_sidebar_tab_3">
                            <div class="chat-sidebar-settings-list slimscroll-style">
                                <div class="chat-header"><h5 class="list-heading">Layout Settings</h5></div>
	                            <div class="chatpane inner-content ">
									<div class="settings-list">
					                    <div class="setting-item">
					                        <div class="setting-text">Sidebar Position</div>
					                        <div class="setting-set">
					                           <select class="sidebar-pos-option form-control input-inline input-sm input-small ">
	                                                <option value="left" selected="selected">Left</option>
	                                                <option value="right">Right</option>
                                            	</select>
					                        </div>
					                    </div>
					                    <div class="setting-item">
					                        <div class="setting-text">Header</div>
					                        <div class="setting-set">
					                           <select class="page-header-option form-control input-inline input-sm input-small ">
	                                                <option value="fixed" selected="selected">Fixed</option>
	                                                <option value="default">Default</option>
                                            	</select>
					                        </div>
					                    </div>
					                    <div class="setting-item">
					                        <div class="setting-text">Sidebar Menu </div>
					                        <div class="setting-set">
					                           <select class="sidebar-menu-option form-control input-inline input-sm input-small ">
	                                                <option value="accordion" selected="selected">Accordion</option>
	                                                <option value="hover">Hover</option>
                                            	</select>
					                        </div>
					                    </div>
					                    <div class="setting-item">
					                        <div class="setting-text">Footer</div>
					                        <div class="setting-set">
					                           <select class="page-footer-option form-control input-inline input-sm input-small ">
	                                                <option value="fixed">Fixed</option>
	                                                <option value="default" selected="selected">Default</option>
                                            	</select>
					                        </div>
					                    </div>
					                </div>
									<div class="chat-header"><h5 class="list-heading">Account Settings</h5></div>
									<div class="settings-list">
					                    <div class="setting-item">
					                        <div class="setting-text">Notifications</div>
					                        <div class="setting-set">
					                            <div class="switch">
					                                <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect" 
									                  for = "switch-1">
									                  <input type = "checkbox" id = "switch-1" 
									                     class = "mdl-switch__input" checked>
									               	</label>
					                            </div>
					                        </div>
					                    </div>
					                    <div class="setting-item">
					                        <div class="setting-text">Show Online</div>
					                        <div class="setting-set">
					                            <div class="switch">
					                                <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect" 
									                  for = "switch-7">
									                  <input type = "checkbox" id = "switch-7" 
									                     class = "mdl-switch__input" checked>
									               	</label>
					                            </div>
					                        </div>
					                    </div>
					                    <div class="setting-item">
					                        <div class="setting-text">Status</div>
					                        <div class="setting-set">
					                            <div class="switch">
					                                <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect" 
									                  for = "switch-2">
									                  <input type = "checkbox" id = "switch-2" 
									                     class = "mdl-switch__input" checked>
									               	</label>
					                            </div>
					                        </div>
					                    </div>
					                    <div class="setting-item">
					                        <div class="setting-text">2 Steps Verification</div>
					                        <div class="setting-set">
					                            <div class="switch">
					                                <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect" 
									                  for = "switch-3">
									                  <input type = "checkbox" id = "switch-3" 
									                     class = "mdl-switch__input" checked>
									               	</label>
					                            </div>
					                        </div>
					                    </div>
					                </div>
                                    <div class="chat-header"><h5 class="list-heading">General Settings</h5></div>
                                    <div class="settings-list">
					                    <div class="setting-item">
					                        <div class="setting-text">Location</div>
					                        <div class="setting-set">
					                            <div class="switch">
					                                <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect" 
									                  for = "switch-4">
									                  <input type = "checkbox" id = "switch-4" 
									                     class = "mdl-switch__input" checked>
									               	</label>
					                            </div>
					                        </div>
					                    </div>
					                    <div class="setting-item">
					                        <div class="setting-text">Save Histry</div>
					                        <div class="setting-set">
					                            <div class="switch">
					                                <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect" 
									                  for = "switch-5">
									                  <input type = "checkbox" id = "switch-5" 
									                     class = "mdl-switch__input" checked>
									               	</label>
					                            </div>
					                        </div>
					                    </div>
					                    <div class="setting-item">
					                        <div class="setting-text">Auto Updates</div>
					                        <div class="setting-set">
					                            <div class="switch">
					                                <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect" 
									                  for = "switch-6">
									                  <input type = "checkbox" id = "switch-6" 
									                     class = "mdl-switch__input" checked>
									               	</label>
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
            <!-- end chat sidebar -->
        </div>
        <!-- end page container -->
        <!-- start footer -->
        <div class="page-footer">
            <div class="page-footer-inner"> 2017 &copy; Yaba Staff School University Theme By
                <a href="mailto:redstartheme@gmail.com" target="_top" class="makerCss">Redstar Theme</a>
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
    <!-- data tables -->
    <script src="../assets/plugins/datatables/jquery.dataTables.min.js" ></script>
 	<script src="../assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js" ></script>
    <script src="../assets/js/pages/table/table_data.js" ></script>
    <!-- Common js-->
	<script src="../assets/js/app.js" ></script>
    <script src="../assets/js/layout.js" ></script>
	<script src="../assets/js/theme-color.js" ></script>
	<!-- Material -->
	<script src="../assets/plugins/material/material.min.js"></script>
     <!-- end js include path -->
</body>

<!-- Mirrored from radixtouch.in/templates/admin/Yaba Staff School/source/light/all_courses.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Oct 2018 17:30:15 GMT -->
</html>