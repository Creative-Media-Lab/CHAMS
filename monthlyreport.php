<!DOCTYPE html>
<?php
    include "connection.php";
    session_start();
    $sql = "SELECT *
            FROM profile p, monthlyreport m
            WHERE p.ProfileID = m.ProfileID";
    $result = mysqli_query($connection, $sql) or die (mysqli_error($connection));
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="CME Group HR Management System">
        <meta name="robots" content="noindex, nofollow">
        <title>Monthly Report</title>
		
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
							
						</div>
					</li>
					<!-- /Search -->
				
					
				
					<!-- Notifications -->
					<li class="nav-item dropdown">
						
						<div class="dropdown-menu notifications">
							
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
								<h3 class="page-title">Monthly Reports</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Monthly Reports</li>
								</ul>
							</div>
							<div class="col-auto float-right ml-auto">
								<a href="#" class="btn add-btn" data-toggle="modal" data-target="#create_project"><i class="fa fa-plus"></i> Create Report</a>
								
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<!-- Search Filter -->
					<div class="row filter-row">
						
						<div class="col-sm-6 col-md-3">  
							<div class="form-group form-focus">
								<input type="text" class="form-control floating">
								<label class="focus-label">Report Name</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">  
							<a href="#" class="btn btn-success btn-block"> Search </a>  
						</div>     
                    </div>
					<!-- Search Filter -->
					
					  <div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table mb-0 datatable">
									<thead>
										<tr>
											<th>Report Name</th>
											<th>Month</th>
											<th>Submit Date</th>
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
													<?php
								echo'<a href="monthlyreport-view.php?MonthlyReportID='. $row["MonthlyReportID"].'"</a>'.$row["MonthlyReportName"].'<span></span></a>';
							?>
											

												</h2>
											</td>
											<td><?php echo''.$row["Month"].'';?></td>
											<td><?php echo''.$row["UploadTime"].'';?></td>

                    <td style="text-align:center;"><button class="dropdown-item" data-toggle="modal" type="button" data-target="#delete_monthlyreport<?php echo $row['MonthlyReportID']?>"><span class="glyphicon glyphicon-edit"><i class="fa fa-trash-o m-r-5"></i></span>Delete</button></td>
											</td>
										</tr>
                    		<?php
					//include "deletemonthlyreport.php";
					}
				?>									</tbody>
								</table>
							</div>
						</div>
					</div>
                </div>
				<!-- /Page Content -->
				
				<!-- Create Project Modal -->
				<?php
    include "connection.php";
    $ProfileID = $_SESSION['ProfileID'];
    $sql = "SELECT *
            FROM profile
            WHERE ProfileID = '$ProfileID'";
    $result = mysqli_query($connection, $sql) or die (mysqli_error($connection));
    $data = mysqli_fetch_assoc($result);
  ?>

				<div id="create_project" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Create Report</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form  action="addmonthlyreport.php" method="post" enctype="multipart/form-data">
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>Report Name</label>
												<input name="MonthlyReportName" class="form-control" placeholder="Monthly Report <?php echo''.$data["Username"].'';?>" value="Monthly Report <?php echo''.$data["Username"].'';?>" type="text" readonly>
											</div>
										</div>
										
									 <div class="col-sm-6">
                                        <div class="form-group">
                                        <label>Month<span class="text-danger">*</span></label>
                                           <select class="select" name="Month">
                                             <option>Select Month</option>
                                             <option value="January">January</option>
                                             <option value="February">February</option>
                                             <option value="March">March</option>
                                             <option value="April">April</option>
                                             <option value="May">May</option>
                                             <option value="June">June</option>
                                             <option value="July">July</option>
                                             <option value="August">August</option>
                                             <option value="September">September</option>
                                             <option value="October">October</option>
                                             <option value="November">November</option>
                                             <option value="December">December</option>
                                           </select>
                                        </div>
                                      </div>
				                	</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Start Date<span class="text-danger">*</span></label>
												<input class="form-control" type="date" name="StartDate">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">End Date<span class="text-danger">*</span></label>
												<input class="form-control" type="date" name="EndDate">
											</div>
										</div>
									</div>
									<div class="form-group">
										<label>Comment</label>
										<textarea rows="4" class="form-control summernote" name="Comment" placeholder="Enter your message here"></textarea>
									</div>
									<div class="form-group">
										<label>Upload File</label>
										<input class="form-control" type="file" name="UploadFile" value="" accept=".doc,.docx,.pdf,.txt,.rtf">
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn" name="upload" type="submit">Submit</button>
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
									
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>Add Team</label>
												<input class="form-control" type="text">
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
		
		<!-- Select2 JS -->
		<script src="assets/js/select2.min.js"></script>
		
		<!-- Datetimepicker JS -->
		<script src="assets/js/moment.min.js"></script>
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
		
		<!-- Summernote JS -->
		<script src="assets/plugins/summernote/dist/summernote-bs4.min.js"></script>

		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
    </body>
</html>