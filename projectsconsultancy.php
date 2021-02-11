<!DOCTYPE html>
<?php
    include "connection.php";
    session_start();
    $sql = "SELECT *
            FROM project p, profile l
            WHERE p.ProjectMember = l.ProfileID AND P.DepartmentID='6'";
    $result = mysqli_query($connection, $sql) or die (mysqli_error($connection));
?>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="CME Group HR Management System">
        <meta name="robots" content="noindex, nofollow">
        <title>Projects - HRMS admin </title>

		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/cmelogo.png">

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="assets/css/line-awesome.min.css">

		<!-- Select2 CSS -->
		<link rel="stylesheet" href="assets/css/select2.min.css">

		<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

		<!-- Summernote CSS -->
		<link rel="stylesheet" href="assets/plugins/summernote/dist/summernote-bs4.css">

		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
		<!-- Main Wrapper -->
      <div class="main-wrapper">
		
			<!-- Header -->
            <div class="header">
			
				<!-- Logo -->
                <div class="header-left">
                    
                </div>
				<!-- /Logo -->
				
				<a id="toggle_btn" href="javascript:void(0);">
					<span class="bar-icon">
						<span></span>
						<span></span>
						<span></span>
					</span>
				</a>
				
				<!-- Header Title -->
                <div class="page-title-box">
					<h3>C.H.A.M.S<h3>
                </div>
				<!-- /Header Title -->
				
				<a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>
				
				<!-- Header Menu -->
				<ul class="nav user-menu">
				
					<!-- Search -->
					<li class="nav-item">
						<div class="top-nav-search">
							<a href="javascript:void(0);" class="responsive-search">
								<i class="fa fa-search"></i>
						   </a>
							<!-- <form action="search.html"> -->
								<!-- <input class="form-control" type="text" placeholder="Search here"> -->
								<!-- <button class="btn" type="submit"><i class="fa fa-search"></i></button> -->
							<!-- </form> -->
						</div>
					</li>
					<!-- /Search -->
				
					
				
					<!-- Notifications -->
					<li class="nav-item dropdown">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<i class="fa fa-bell-o"></i> <span class="badge badge-pill"></span>
						</a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">Notifications</span>
								<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
							</div>
							<div class="noti-content">
								<ul class="notification-list">
									<li class="notification-message">
										<a href="activities.html">
											<div class="media">
												<span class="avatar">
													<img alt="" src="assets/img/profiles/2.jpg">
												</span>
												
												<div class="media-body">
													<p class="noti-details"><span class="noti-title"></span> has add you to Discover Penyabong Porject<span class="noti-title"></span></p>
													<p class="noti-time"><span class="notification-time"></span></p>
												</div>
											</div>
										</a>
									</li>
									
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="activities.html">View all Notifications</a>
							</div>
						</div>
					</li>


					<li class="nav-item dropdown has-arrow main-drop">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img"><img src="assets/img/profiles/1.jpg" alt="">
							<span class="status online"></span></span>
							<span>Admin</span>
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="profile.php">My Profile</a>
							<a class="dropdown-item" href="login.html">Logout</a>
						</div>
					</li>
				</ul>
				<!-- /Header Menu -->
				
				<!-- Mobile Menu -->
				<div class="dropdown mobile-user-menu">
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="profile.php">My Profile</a>
						<a class="dropdown-item" href="login.html">Logout</a>
					</div>
				</div>
				<!-- /Mobile Menu -->
				
            </div>
			<!-- /Header -->
			
			<!-- Sidebar -->
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="menu-title"> 
								<span>Main</span>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-dashboard"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="active" href="dsadmin.html">Admin Dashboard</a></li>
									
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-cube"></i> <span> Apps</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">	
									<li><a href="activities.html">History</a></li>
									<li><a href="history.html">Calendar</a></li>
								</ul>
							</li><i class="las la-user-circle"></i>
							
							<li class="submenu">
								<a href="#" ><i class="la la-user"></i> <span>Staff</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li class="submenu">
									<a href="#"><span>Profile</span><span class="menu-arrow"></span></a>
									<ul style="display:none;">
									<li><a href="employeeshr.php">HR</a></li>
									<li><a href="employeesfinance.php">Finance</a></li>
									<li><a href="employeesquality.php">Quality/ISO</a></li>
									<li><a href="employeestraining.php">Training</a></li>
									<li><a href="employeesconsultancy.php">Consultancy</a></li>
									<li><a href="employeesmarketing.php">Marketing</a></li>
									<li><a href="employeessts.php">STS</a></li>
									<li><a href="employeestpr.php">TPR</a></li>
									<li><a href="employeescml.php">CML</a></li>
									</ul>
									</li>
									<li><a href="leaves.html">Leaves (Admin)</a></li>
									<li><a href="leaves-employee.php">Leaves (Employee)</a></li>
									
								</ul>
							</li>
						    

							<li class="submenu">
								<a href="#"><i class="la la-users"></i> <span>Department Projects</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="projectshr.php">HR</a></li>
									<li><a href="projectsfinance.php">Finance</a></li>
									<li><a href="projectsquality.php">Quality/ISO</a></li>
									<li><a href="projectstraining.php">Training</a></li>
									<li><a href="projectsconsultancy.php">Consultancy</a></li>
									<li><a href="projectsmarketing.php">Marketing</a></li>
									<li><a href="projectssts.php">STS</a></li>
									<li><a href="projectstpr.php">TPR</a></li>
									<li><a href="projectscml.php">CML</a></li>
									
							    </ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="fa fa-book"></i> <span>Monthly Report</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="monthlyreport.html">HR</a></li>
									<li><a href="monthlyreport.html">Finance</a></li>
									<li><a href="monthlyreport.html">Quality/ISO</a></li>
									<li><a href="monthlyreport.html">Training</a></li>
									<li><a href="monthlyreport.html">Consultancy</a></li>
									<li><a href="monthlyreport.html">Marketing</a></li>
									<li><a href="monthlyreport.html">STS</a></li>
									<li><a href="monthlyreport.html">TPR</a></li>
									<li><a href="monthlyreport.html">CML</a></li>
									
							    </ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-book"></i> <span>Independent Projects</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="projects.html">Projects</a></li>
									
								</ul>
							</li>
							
							<li class="submenu">
								<a href="#"><i class="fa fa-upload"></i> <span>Storage Upload</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="file-manager.html">HR</a></li>
									<li><a href="file-manager.html">Finance</a></li>
									<li><a href="file-manager.html">Quality/ISO</a></li>
									<li><a href="file-manager.html">Training</a></li>
									<li><a href="file-manager.html">Consultancy</a></li>
									<li><a href="file-manager.html">Marketing</a></li>
									<li><a href="file-manager.html">STS</a></li>
									<li><a href="file-manager.html">TPR</a></li>
									<li><a href="file-manager.html">CML</a></li>
									
							    </ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-edit"></i> <span>Personal Workspace</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="projects.html">Projects</a></li>
									
								</ul>
							</li>
							
						</ul>
					</div>
                </div>
            </div>
			<!-- /Sidebar -->

			<!-- Page Wrapper -->
            <div class="page-wrapper">

				<!-- Page Content -->
                <div class="content container-fluid">
				 <a href="dsadmin.html" class="logo">
						<img src="assets/img/logocme.png" width="115" height="50" alt="">
					</a>
					

					<!-- Page Header -->
					<div class="page-header">
					<br>
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Projects</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Projects (Consultancy)</li>
								</ul>
							</div>
							<div class="col-auto float-right ml-auto">
								<a href="#" class="btn add-btn" data-toggle="modal" data-target="#create_project"><i class="fa fa-plus"></i> Create Project</a>

							</div>
						</div>
					</div>
					<!-- /Page Header -->

					<!-- Search Filter -->
					<div class="row filter-row">
						<div class="col-sm-6 col-md-3">
							<div class="form-group form-focus">
								<input type="text" class="form-control floating">
								<label class="focus-label">Project Name</label>
							</div>
						</div>
						<!--<div class="col-sm-6 col-md-3">
							<div class="form-group form-focus">
								<input type="text" class="form-control floating">
								<label class="focus-label">Employee Name</label>
							</div>
						</div>
					<div class="col-sm-6 col-md-3">
							<div class="form-group form-focus select-focus">
								<select class="select floating">
									<option>Select Roll</option>
									<option>Web Developer</option>
									<option>Web Designer</option>
									<option>Android Developer</option>
									<option>Ios Developer</option>
								</select>
								<label class="focus-label">Designation</label>
							</div>
						</div> -->
						<div class="col-sm-6 col-md-3">
							<a href="#" class="btn btn-success btn-block"> Search </a>
						</div>
                    </div>
					<!-- Search Filter -->

					<!--<div class="row">
						<div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
							<div class="card">
								<div class="card-body">
									<div class="dropdown dropdown-action profile-action">
										<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a>
											<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_project"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
										</div>
									</div>
									<h4 class="project-title"><a href="project-view.html">Discover Penyabong</a></h4>
									<small class="block text-ellipsis m-b-15">
										<span class="text-xs">1</span> <span class="text-muted">open tasks, </span>
										<span class="text-xs">9</span> <span class="text-muted">tasks completed</span>
									</small> -->
								<!--	<p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
										typesetting industry. When an unknown printer took a galley of type and
										scrambled it...
									</p> -->
								<!--	<div class="pro-deadline m-b-15">
										<div class="sub-title">
											Deadline:
										</div>
										<div class="text-muted">
											17 Apr 2019
										</div>
									</div> -->
									<!-- <div class="project-members m-b-15"> -->
										<!-- <div>Project Leader :</div> -->
										<!-- <ul class="team-members"> -->
											<!-- <li> -->
												<!-- <a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="assets/img/profiles/avatar-16.jpg"></a> -->
											<!-- </li> -->
										<!-- </ul> -->
									<!-- </div> -->
									<!--<div class="project-members m-b-15">
										<div>Member :</div>
										<ul class="team-members">
											<li>
												<a href="#" data-toggle="tooltip" ><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
											</li>
											<li>
												<a href="#" data-toggle="tooltip" ><img alt="" src="assets/img/profiles/avatar-09.jpg"></a></a>
											</li>
											<li>
												<a href="#" data-toggle="tooltip" ><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
											</li>
											<li>
												<a href="#" data-toggle="tooltip" ><img alt="" src="assets/img/profiles/avatar-05.jpg"></a>
											</li>
											<li class="dropdown avatar-dropdown">
												<a href="#" class="all-users dropdown-toggle" data-toggle="dropdown" aria-expanded="false">+15</a>
												<div class="dropdown-menu dropdown-menu-right">
													<div class="avatar-group">
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-02.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-09.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-10.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-05.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-11.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-12.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-13.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-01.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-16.jpg">
														</a>
													</div>
													<div class="avatar-pagination">
														<ul class="pagination">
															<li class="page-item">
																<a class="page-link" href="#" aria-label="Previous">
																	<span aria-hidden="true">«</span>
																	<span class="sr-only">Previous</span>
																</a>
															</li>
															<li class="page-item"><a class="page-link" href="#">1</a></li>
															<li class="page-item"><a class="page-link" href="#">2</a></li>
															<li class="page-item">
																<a class="page-link" href="#" aria-label="Next">
																	<span aria-hidden="true">»</span>
																<span class="sr-only">Next</span>
																</a>
															</li>
														</ul>
													</div>
												</div>
											</li>
										</ul>
									</div>-->
									<!-- <p class="m-b-5">Progress <span class="text-success float-right">40%</span></p> -->
									<!-- <div class="progress progress-xs mb-0"> -->
										<!-- <div class="progress-bar bg-success" role="progressbar" data-toggle="tooltip" title="40%" style="width: 40%"></div> -->
									<!-- </div> -->
								<!--</div>
							</div>
						</div>-->

				<!--		<div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
							<div class="card">
								<div class="card-body">
									<div class="dropdown dropdown-action profile-action">
										<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a>
											<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_project"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
										</div>
									</div>
									<h4 class="project-title"><a href="project-view.html">Project Management</a></h4>
									<small class="block text-ellipsis m-b-15">
										<span class="text-xs">2</span> <span class="text-muted">open tasks, </span>
										<span class="text-xs">5</span> <span class="text-muted">tasks completed</span>
									</small>
									<p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
										typesetting industry. When an unknown printer took a galley of type and
										scrambled it...
									</p>
									<div class="pro-deadline m-b-15">
										<div class="sub-title">
											Deadline:
										</div>
										<div class="text-muted">
											17 Apr 2019
										</div>
									</div>
									<div class="project-members m-b-15">
										<div>Project Leader :</div>
										<ul class="team-members">
											<li>
												<a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="assets/img/profiles/avatar-16.jpg"></a>
											</li>
										</ul>
									</div>
									<div class="project-members m-b-15">
										<div>Team :</div>
										<ul class="team-members">
											<li>
												<a href="#" data-toggle="tooltip" title="John Doe"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
											</li>
											<li>
												<a href="#" data-toggle="tooltip" title="Richard Miles"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a></a>
											</li>
											<li>
												<a href="#" data-toggle="tooltip" title="John Smith"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
											</li>
											<li>
												<a href="#" data-toggle="tooltip" title="Mike Litorus"><img alt="" src="assets/img/profiles/avatar-05.jpg"></a>
											</li>
											<li class="dropdown avatar-dropdown">
												<a href="#" class="all-users dropdown-toggle" data-toggle="dropdown" aria-expanded="false">+15</a>
												<div class="dropdown-menu dropdown-menu-right">
													<div class="avatar-group">
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-02.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-09.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-10.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-05.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-11.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-12.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-13.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-01.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-16.jpg">
														</a>
													</div>
													<div class="avatar-pagination">
														<ul class="pagination">
															<li class="page-item">
																<a class="page-link" href="#" aria-label="Previous">
																	<span aria-hidden="true">«</span>
																	<span class="sr-only">Previous</span>
																</a>
															</li>
															<li class="page-item"><a class="page-link" href="#">1</a></li>
															<li class="page-item"><a class="page-link" href="#">2</a></li>
															<li class="page-item">
																<a class="page-link" href="#" aria-label="Next">
																	<span aria-hidden="true">»</span>
																<span class="sr-only">Next</span>
																</a>
															</li>
														</ul>
													</div>
												</div>
											</li>
										</ul>
									</div>
									<p class="m-b-5">Progress <span class="text-success float-right">40%</span></p>
									<div class="progress progress-xs mb-0">
										<div class="progress-bar bg-success" role="progressbar" data-toggle="tooltip" title="40%" style="width: 40%"></div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
							<div class="card">
								<div class="card-body">
									<div class="dropdown dropdown-action profile-action">
										<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a>
											<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_project"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
										</div>
									</div>
									<h4 class="project-title"><a href="project-view.html">Video Calling App</a></h4>
									<small class="block text-ellipsis m-b-15">
										<span class="text-xs">3</span> <span class="text-muted">open tasks, </span>
										<span class="text-xs">3</span> <span class="text-muted">tasks completed</span>
									</small>
									<p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
										typesetting industry. When an unknown printer took a galley of type and
										scrambled it...
									</p>
									<div class="pro-deadline m-b-15">
										<div class="sub-title">
											Deadline:
										</div>
										<div class="text-muted">
											17 Apr 2019
										</div>
									</div>
									<div class="project-members m-b-15">
										<div>Project Leader :</div>
										<ul class="team-members">
											<li>
												<a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="assets/img/profiles/avatar-16.jpg"></a>
											</li>
										</ul>
									</div>
									<div class="project-members m-b-15">
										<div>Team :</div>
										<ul class="team-members">
											<li>
												<a href="#" data-toggle="tooltip" title="John Doe"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
											</li>
											<li>
												<a href="#" data-toggle="tooltip" title="Richard Miles"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a></a>
											</li>
											<li>
												<a href="#" data-toggle="tooltip" title="John Smith"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
											</li>
											<li>
												<a href="#" data-toggle="tooltip" title="Mike Litorus"><img alt="" src="assets/img/profiles/avatar-05.jpg"></a>
											</li>
											<li class="dropdown avatar-dropdown">
												<a href="#" class="all-users dropdown-toggle" data-toggle="dropdown" aria-expanded="false">+15</a>
												<div class="dropdown-menu dropdown-menu-right">
													<div class="avatar-group">
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-02.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-09.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-10.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-05.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-11.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-12.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-13.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-01.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-16.jpg">
														</a>
													</div>
													<div class="avatar-pagination">
														<ul class="pagination">
															<li class="page-item">
																<a class="page-link" href="#" aria-label="Previous">
																	<span aria-hidden="true">«</span>
																	<span class="sr-only">Previous</span>
																</a>
															</li>
															<li class="page-item"><a class="page-link" href="#">1</a></li>
															<li class="page-item"><a class="page-link" href="#">2</a></li>
															<li class="page-item">
																<a class="page-link" href="#" aria-label="Next">
																	<span aria-hidden="true">»</span>
																<span class="sr-only">Next</span>
																</a>
															</li>
														</ul>
													</div>
												</div>
											</li>
										</ul>
									</div>
									<p class="m-b-5">Progress <span class="text-success float-right">40%</span></p>
									<div class="progress progress-xs mb-0">
										<div class="progress-bar bg-success" role="progressbar" data-toggle="tooltip" title="40%" style="width: 40%"></div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
							<div class="card">
								<div class="card-body">
									<div class="dropdown dropdown-action profile-action">
										<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a>
											<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_project"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
										</div>
									</div>
									<h4 class="project-title"><a href="project-view.html">Hospital Administration</a></h4>
									<small class="block text-ellipsis m-b-15">
										<span class="text-xs">12</span> <span class="text-muted">open tasks, </span>
										<span class="text-xs">4</span> <span class="text-muted">tasks completed</span>
									</small>
									<p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
										typesetting industry. When an unknown printer took a galley of type and
										scrambled it...
									</p>
									<div class="pro-deadline m-b-15">
										<div class="sub-title">
											Deadline:
										</div>
										<div class="text-muted">
											17 Apr 2019
										</div>
									</div>
									<div class="project-members m-b-15">
										<div>Project Leader :</div>
										<ul class="team-members">
											<li>
												<a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="assets/img/profiles/avatar-16.jpg"></a>
											</li>
										</ul>
									</div>
									<div class="project-members m-b-15">
										<div>Team :</div>
										<ul class="team-members">
											<li>
												<a href="#" data-toggle="tooltip" title="John Doe"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
											</li>
											<li>
												<a href="#" data-toggle="tooltip" title="Richard Miles"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a></a>
											</li>
											<li>
												<a href="#" data-toggle="tooltip" title="John Smith"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
											</li>
											<li>
												<a href="#" data-toggle="tooltip" title="Mike Litorus"><img alt="" src="assets/img/profiles/avatar-05.jpg"></a>
											</li>
											<li class="dropdown avatar-dropdown">
												<a href="#" class="all-users dropdown-toggle" data-toggle="dropdown" aria-expanded="false">+15</a>
												<div class="dropdown-menu dropdown-menu-right">
													<div class="avatar-group">
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-02.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-09.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-10.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-05.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-11.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-12.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-13.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-01.jpg">
														</a>
														<a class="avatar avatar-xs" href="#">
															<img alt="" src="assets/img/profiles/avatar-16.jpg">
														</a>
													</div>
													<div class="avatar-pagination">
														<ul class="pagination">
															<li class="page-item">
																<a class="page-link" href="#" aria-label="Previous">
																	<span aria-hidden="true">«</span>
																	<span class="sr-only">Previous</span>
																</a>
															</li>
															<li class="page-item"><a class="page-link" href="#">1</a></li>
															<li class="page-item"><a class="page-link" href="#">2</a></li>
															<li class="page-item">
																<a class="page-link" href="#" aria-label="Next">
																	<span aria-hidden="true">»</span>
																<span class="sr-only">Next</span>
																</a>
															</li>
														</ul>
													</div>
												</div>
											</li>
										</ul>
									</div>
									<p class="m-b-5">Progress <span class="text-success float-right">40%</span></p>
									<div class="progress progress-xs mb-0">
										<div class="progress-bar bg-success" role="progressbar" data-toggle="tooltip" title="40%" style="width: 40%"></div>
									</div>
								</div>
							</div>
						</div> -->
					<!--</div>
          </div>-->
          <div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table mb-0 datatable">
									<thead>
										<tr>
											<th>Project Name</th>
											<th>Deadline</th>
											<th>Project Member</th>
											<th class="text-right">Actions</th>
										</tr>
									</thead>
									<tbody>
                    <?php
                    while($row = mysqli_fetch_array($result)) {
                    ?>
										<tr>
											<td>
												<h2 class="table-avatar">
													<a href="project-view.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
													<a href="project-view.html"><?php echo''.$row["ProjectName"].'';?></a>
												</h2>
											</td>
											<td><?php echo''.$row["Deadline"].'';?></td>
											<td><?php echo''.$row["FirstName"].' '.$row["LastName"];?></td>
                      <td style="text-align:center;"><?php echo'<a class="dropdown-item" href="projectshr.php?ProjectID='. $row["ProjectID"].'" data-toggle="modal" data-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a>';?></td>
											<td style="text-align:center;"><a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_project"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
											</td>
										</tr>
                    	<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
                </div>
				<!-- /Page Content -->

				<!-- Create Project Modal -->
        <form action="addprojectsconsultancy.php" method="post">
				<div id="create_project" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header"S>
								<h5 class="modal-title">Create Project</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>Project Name</label>
												<input class="form-control" type="text" name="ProjectName">
											</div>
										</div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Add Team</label>
                          <select class="select" name="ProjectMember" multiple="multiple">
                          <option>Select Team</option>
                            <?php
                            $sql = mysqli_query($connection, "SELECT * From profile where DepartmentID = '6'");
                            $row = mysqli_num_rows($sql);
                            while ($row = mysqli_fetch_array($sql)){
                              echo "<option value='". $row['ProfileID'] ."'>" .$row['FirstName'] .' ' .$row['LastName'] ."</option>" ;
                            }
                            ?>
                          </select>
                        </div>
                      </div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>Start Date</label>
												<div class="cal-icon">
													<input class="form-control datetimepicker" type="text" name="StartDate">
												</div>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label>Deadline</label>
												<div class="cal-icon">
													<input class="form-control datetimepicker" type="text" name="Deadline">
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label>Description</label>
										<textarea rows="4" class="form-control summernote" name="Description" placeholder="Enter your message here"></textarea>
									</div>
									<div class="form-group">
										<label>Upload Files</label>
										<input class="form-control" type="file">
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Create Project Modal -->

				<!-- Edit Project Modal -->
				<div id="edit_project" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Edit Project</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>Project Name</label>
												<input class="form-control" value="Project Management" type="text">
											</div>
										</div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Add Team</label>
                        <select class="select" name="ProjectMember" multiple="multiple">
                        <option>Select Team</option>
                          <?php
                          $sql = mysqli_query($connection, "SELECT * From profile where DepartmentID = '6'");
                          $row = mysqli_num_rows($sql);
                          while ($row = mysqli_fetch_array($sql)){
                            echo "<option value='". $row['ProfileID'] ."'>" .$row['FirstName'] .' ' .$row['LastName'] ."</option>" ;
                          }
                          ?>
                        </select>
                      </div>
                    </div>

									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>Start Date</label>
												<div class="cal-icon">
													<input class="form-control datetimepicker" type="text">
												</div>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label>End Date</label>
												<div class="cal-icon">
													<input class="form-control datetimepicker" type="text">
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label>Description</label>
										<textarea rows="4" class="form-control" placeholder="Enter your project description here"></textarea>
									</div>
									<div class="form-group">
										<label>Comment</label>
										<textarea rows="4" class="form-control" placeholder="Enter your comment here"></textarea>
									</div>
									<div class="form-group">
										<label>Upload Files</label>
										<input class="form-control" type="file">
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Save</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Edit Project Modal -->

				<!-- Delete Project Modal -->
				<div class="modal custom-modal fade" id="delete_project" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
								<div class="form-header">
									<h3>Delete Project</h3>
									<p>Are you sure want to delete?</p>
								</div>
								<div class="modal-btn delete-action">
									<div class="row">
										<div class="col-6">
											<a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
										</div>
										<div class="col-6">
											<a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Delete Project Modal -->

            </div>
			<!-- /Page Wrapper -->

        </div>
		<!-- /Main Wrapper -->

		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>

		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>

		<!-- Slimscroll JS -->
		<script src="assets/js/jquery.slimscroll.min.js"></script>

    <!-- Datatable JS -->
		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/dataTables.bootstrap4.min.js"></script>

		<!-- Select2 JS -->
		<script src="assets/js/select2.min.js"></script>

		<!-- Datetimepicker JS -->
		<script src="assets/js/moment.min.js"></script>
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

		<!-- Summernote JS -->
		<script src="assets/plugins/summernote/dist/summernote-bs4.min.js"></script>

		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>

    <script> $document.ready(function(){
      $(#'ProjectMember').multiselect();
    });
  </script>

    </body>
</html>
