<?php
include "connection.php";
session_start();
$searchname = $_GET['searchname'];
?>
<html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="CME Group HR Management System">
        <meta name="robots" content="noindex, nofollow">
        <title>Employee Profile</title>
		
		<!-- Favicon -->
      <link rel="shortcut icon" type="image/x-icon" href="assets/img/cmelogo.png">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="assets/css/line-awesome.min.css">

		<!-- Select2 CSS -->
		<link rel="stylesheet" href="assets/css/select2.min.css">

    <!-- Datatable CSS -->
    <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">

		<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

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
								<h3 class="page-title">Employee</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Employee</li>
								</ul>
							</div>
							<div class="col-auto float-right ml-auto">
								<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_employee"><i class="fa fa-plus"></i> Add Employee</a>
								<!--<div class="view-icons">
									<a href="employees.html" class="grid-view btn btn-link active"><i class="fa fa-th"></i></a>
									<a href="employees-list.html" class="list-view btn btn-link"><i class="fa fa-bars"></i></a>
								</div>-->
							</div>
						</div>
					</div>
					<!-- /Page Header -->

					<!-- Search Filter -->
					<form action="searchprofileconsultancy.php" method="get">
					<div class="row filter-row">
						<!--<div class="col-sm-6 col-md-3">
							<div class="form-group form-focus">
								<input type="text" name="searchname" class="form-control floating">
								<label class="focus-label">Employee ID</label>
							</div>
						</div>-->
						<div class="col-sm-6 col-md-3">
							<div class="form-group form-focus">
								<input type="text" name="searchname" class="form-control floating">
								<label class="focus-label">Employee Username</label>
							</div>
						</div>
					<!--	<div class="col-sm-6 col-md-3">
							<div class="form-group form-focus select-focus">
								<select name="searchposition" class="select floating">
									<option>Select Designation</option>
									<option value="Top Management">Top Management</option>
									<option value="HOD">HOD</option>
									<option value="Admin">Admin</option>
									<option value="Staff">Staff</option>
								</select>
								<label class="focus-label">Designation</label>
							</div>
						</div>-->
						<div class="col-sm-6 col-md-3">
							<button class="btn btn-success btn-block"> Search </button>
						</div>
                    </div>
                </form>
					<!-- Search Filter -->
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table mb-0 datatable">
									<thead>
                    <tr>
                      <th> </th>
                      <th>Name</th>
                      <th>Username</th>
                      <th>Position</th>
                      <th>Password</th>
                      <th style="text-align:center;" colspan="2" >Actions</th>
                    </tr>
									</thead>
<?php
$sql ="SELECT *
		 FROM profile
		 WHERE DepartmentID = '6' AND Username LIKE '%".$searchname."%'";
$query = mysqli_query($connection,$sql);
$numRow = mysqli_num_rows ($query);

if($numRow == 0)
{
		echo "<script>alert('Staff Not Exist')</script>";
     echo "<meta http-equiv='refresh' content='0; url=employeesconsultancy.php'/>";
}
else
{
	//echo "<script>alert('Data found by position and username')</script>";
	while($row =mysqli_fetch_array($query))
	{
			?>
			<tbody>
										<tr>
											<td>
												<h2 class="table-avatar">
													<?php
													echo'<a href="fetchprofile.php?ProfileID= '. $row["ProfileID"].'" class="avatar"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>';
													?>
												</h2>
											</td>
											<td>
												<h2 class="table-avatar">
													<?php
													echo'<a href="fetchprofile.php?ProfileID='. $row["ProfileID"].'"</a>'.$row["FirstName"].' '.$row["LastName"].'<span></span></a>';
													?>
												</h2>
											</td>
											<td><?php echo''.$row["Username"].'';?></td>
                      <td><?php echo''.$row["Position"].'';?></td>
											<td><?php echo''.$row["Password"].'';?></td>
                      <td style="text-align:center;"><?php echo'<a class="dropdown-item" href="employeeshr.php?ProfileID='. $row["ProfileID"].'" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a>';?></td>
                      <td style="text-align:center;"><a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                      </td>
										</tr>
	<?php }
}
?>
<!-- Add Employee Modal -->
				<div id="add_employee" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add Employee</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="addemployees.php" method="post">
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">First Name <span class="text-danger">*</span></label>
												<input class="form-control" type="text" name="FirstName">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Last Name <span class="text-danger">*</label>
												<input class="form-control" type="text" name="LastName">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Username <span class="text-danger">*</span></label>
												<input class="form-control" type="text" name="Username">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Passport No <span class="text-danger">*</label>
												<input class="form-control" type="text" name="PassportNo">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Phone <span class="text-danger">*</label>
												<input class="form-control" type="text" name="PhoneNo">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Email<span class="text-danger">*</span></label>
												<input class="form-control" type="email" name="Email">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Birth date <span class="text-danger">*</label>
												<input class="form-control" type="date" name="Birthdate">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Gender <span class="text-danger">*</span></label>
												<select class="select">
													<option>Select Gender</option>
													<option value = Male >Male</option>
													<option value = Female >Female</option>
												</select>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Nationality <span class="text-danger">*</label>
												<input class="form-control" type="password" name="Nationality">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Religion</label>
												<input class="form-control" type="password" name="Religion">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Marital Status <span class="text-danger">*</span></label>
												<select class="select">
													<option>Select Marital Status</option>
													<option>Single</option>
													<option>Married</option>
												</select>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Address <span class="text-danger">*</label>
												<input class="form-control" type="password" name="Address">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">City <span class="text-danger">*</label>
												<input class="form-control" type="password" name="City">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Postcode <span class="text-danger">*</label>
												<input class="form-control" type="password" name="Postcode">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">State <span class="text-danger">*</label>
												<input class="form-control" type="password" name="State">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Country <span class="text-danger">*</label>
												<input class="form-control" type="password" name="Country">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Password <span class="text-danger">*</label>
												<input class="form-control" type="password" name="Password">
											</div>
										</div>
										<!--<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Confirm Password <span class="text-danger">*</label>
												<input class="form-control" type="password" name="Confirmpassword">
											</div>
										</div>-->
										<!--<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Employee ID <span class="text-danger">*</span></label>
												<input type="text" class="form-control">
											</div>
										</div> -->
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Joining Date <span class="text-danger">*</span></label>
												<div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
											</div>
										</div>
										<!--<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Phone </label>
												<input class="form-control" type="text">
											</div>
										</div>-->
										<!--<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Company</label>
												<select class="select">
													<option value="">Global Technologies</option>
													<option value="1">Delta Infotech</option>
												</select>
											</div>
										</div> -->
										<div class="col-md-6">
											<div class="form-group">
												<label>Department <span class="text-danger">*</span></label>
												<select class="select">
													<option>Select Department</option>
													<option value="HR">HR</option>
													<option value="Finance">Finance</option>
													<option value="Quality/ISO">Quality/ISO</option>
													<option value="Training">Training</option>
													<option value="Consultancy">Consultancy</option>
													<option value="Marketing">Marketing</option>
													<option value="STS">STS</option>
													<option value="TPR">TPR</option>
													<option value="CML">CML</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Designation <span class="text-danger">*</span></label>
												<select class="select">
													<option>Select Designation</option>
													<option value="Top Management">Top Management</option>
													<option value="HOD">HOD</option>
													<option value="Admin">Admin</option>
													<option vakue="Staff">Staff</option>
												</select>
											</div>
										</div>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Add Employee Modal -->

				<!-- Edit Employee Modal -->

				<div id="edit_employee" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Edit Employee</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">First Name <span class="text-danger">*</span></label>
												<input class="form-control" value="<?php echo $data['FirstName']; ?>" type="text">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Last Name</label>
												<input class="form-control" value="Doe" type="text">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Username<span class="text-danger">*</span></label>
												<input class="form-control" value="johndoe" type="text">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Email<span class="text-danger">*</span></label>
												<input class="form-control" value="johndoe@example.com" type="email">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Password</label>
												<input class="form-control" value="johndoe" type="password">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Confirm Password</label>
												<input class="form-control" value="johndoe" type="password">
											</div>
										</div>
										<!--<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Employee ID <span class="text-danger">*</span></label>
												<input type="text" value="FT-0001" readonly class="form-control floating">
											</div>
										</div>-->
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Joining Date <span class="text-danger">*</span></label>
												<div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Phone </label>
												<input class="form-control" value="9876543210" type="text">
											</div>
										</div>
										<!--<div class="col-sm-6">
											<div class="form-group">
												<label class="col-form-label">Company</label>
												<select class="select">
													<option>Global Technologies</option>
													<option>Delta Infotech</option>
													<option selected>International Software Inc</option>
												</select>
											</div>
										</div>-->
										<div class="col-md-6">
											<div class="form-group">
												<label>Department <span class="text-danger">*</span></label>
												<select class="select">
													<option>Select Department</option>
													<option>HR</option>
													<option>Finance</option>
													<option>Quality/ISO</option>
													<option>Training</option>
													<option>Consultancy</option>
													<option>Marketing</option>
													<option>STS</option>
													<option>TPR</option>
													<option>CML</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Designation <span class="text-danger">*</span></label>
												<select class="select">
													<option>Select Designation</option>
													<option>Top Management</option>
													<option>HOD</option>
													<option>Admin</option>
													<option>Staff</option>
												</select>
											</div>
										</div>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Save</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Edit Employee Modal -->

				<!-- Delete Employee Modal -->
				<div class="modal custom-modal fade" id="delete_employee" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
								<div class="form-header">
									<h3>Delete Employee</h3>
									<p>Are you sure want to delete?</p>
								</div>
								<div class="modal-btn delete-action">
									<div class="row">
										<div class="col-6">
											<a href="delemployeeshr.php" class="btn btn-primary continue-btn">Delete</a>
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
				<!-- /Delete Employee Modal -->

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

		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>

    </body>
</html>
