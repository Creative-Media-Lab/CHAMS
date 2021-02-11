<!DOCTYPE html>
<?php
    include "connection.php";
    session_start();
    $sql = "SELECT * FROM profile WHERE DepartmentID='6'";
    $result = mysqli_query($connection, $sql) or die (mysqli_error($connection));
?>

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
								<h3 class="page-title">Employee</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Employee (Consultancy)</li>
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
								<input type="text" class="form-control floating">
								<label class="focus-label">Employee ID</label>
							</div>
						</div>-->
						<div class="col-sm-6 col-md-3">
							<div class="form-group form-focus">
								<input type="text" onkeypress="return AvoidSpace(event)" name="searchname" class="form-control floating">
								<label class="focus-label">Employee Username</label>
							</div>
						</div>
						<!--<div class="col-sm-6 col-md-3">
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
						<th>Gender</th>
						<th>Email</th>
						<th>Position</th>
						<th style="text-align:center;" colspan="2" >Action</th>
					</tr>
				</thead>

				<?php
					while($row = mysqli_fetch_array($result)) {
				?>
				<tbody>
					<tr>
						<td>
							<h2 class="table-avatar">
							<?php
								echo'<a class="avatar"><img src="'.$row["ProfileImage"].'" width="39" height="39"/></a>';
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
						<td><?php echo''.$row["Gender"].'';?></td>
						<td><?php echo''.$row["Email"].'';?></td>
						<td><?php echo''.$row["Position"].'';?></td>
						<td style="text-align:center;"><button class="dropdown-item" data-toggle="modal" type="button" data-target="#update_modal<?php echo $row['ProfileID']?>"><span class="glyphicon glyphicon-edit"><i class="fa fa-pencil m-r-5"></i></span>Edit</button></td>
							
						<!--	<td style="text-align:center;"><button class="dropdown-item" data-toggle="modal" type="button" data-target="#delete_employee<?php //echo $row['ProfileID']?>" ><span class="glyphicon glyphicon-edit"><i class="fa fa-trash-o m-r-5"></i></span>Delete</button><?php// include'delete_employee.php';?></td> -->				
					</tr>
					<?php
					include "update_user.php";
					}
				?>
                </tbody>
  			</table>
		</div>
	</div>
</div>
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
			<form action="addemployeeshr.php" method="post">
            	<div class="card">
               	 	<div class="card-body">
                    	<h3 class="card-title">Profile Informations</h3>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label class="col-form-label">First Name <span class="text-danger">*</span></label>
									<input class="form-control" type="text" name="FirstName" >
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
									<input class="form-control" onkeypress="return AvoidSpace(event)" type="text" name="Username">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Gender <span class="text-danger">*</span></label>
									<select class="select" name="Gender">
										<option>Select Gender</option>
										<option value = Male >Male</option>
										<option value = Female >Female</option>
									</select>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label class="col-form-label">Email <span class="text-danger">*</span></label>
									<input class="form-control" type="email" name="Email">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label class="col-form-label">Phone<span class="text-danger">*</label>
									<input class="form-control" type="text" name="PhoneNo">
								</div>
							</div>
             				<div class="col-md-6">
                				<div class="form-group">
                 					<label>Department</label>
                  					<select class="select" name="DepartmentID">
                  						<option>Select Department</option>
                    					<option value="2">HR</option>
                    					<option value="3">Finance</option>
                    					<option value="4">Quality/ISO</option>
                    					<option value="5">Training</option>
                    					<option value="6">Consultancy</option>
                    					<option value="7">Marketing</option>
                    					<option value="8">STS</option>
                    					<option value="9">TPR</option>
                    					<option value="1">CML</option>
                  					</select>
                				</div>
             				</div>
              				<div class="col-md-6">
                				<div class="form-group">
                  					<label>Position</span></label>
                  					<select class="select" name="Position">
                  						<option>Select Position</option>
                    					<option value="Top Management">Top Management</option>
                    					<option value="HOD">HOD</option>
                    					<option value="Admin">Admin</option>
                    					<option value="Staff">Staff</option>
                  					</select>
                				</div>
              				</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label class="col-form-label">Joining Date <span class="text-danger">*</span></label>
									<input class="form-control" type="date" name="WorkStartDate">
								</div>
							</div>
						</div>
						<br>
						<h3 class="card-title">Personal Informations</h3>
						<div class="row">
							<div class="col-md-6">
                				<div class="form-group">
                  					<label>NRIC</label>
                  					<input name="NRIC" type="text" class="form-control" value=""required>
                				</div>
              				</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Birth Date<span class="text-danger">*</span></label>
									<input name="Birthdate" type="date" class="form-control" value=""required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Race<span class="text-danger">*</span></label>
									<select name="Race" class="select form-control">
										<option>Select Race</option>
                    					<option value="Malay">Malay</option>
                    					<option value="Chinese">Chinese</option>
                    					<option value="Indian">Indian</option>
                    					<option value="Others">Others</option>
                  					</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Marital Status<span class="text-danger">*</span></label>
									<select name="MaritalStatus" class="select form-control">
										<option>Select Marital Status</option>
										<option value="Single">Single</option>
                   						<option value="Married">Married</option>
                   					</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Address<span class="text-danger">*</span></label>
									<input name="Address" type="" class="form-control" value=""required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Town/City<span class="text-danger">*</span></label>
									<input name="City" type="" class="form-control" value=""required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Postcode<span class="text-danger">*</span></label>
									<input name="Postcode" type="" class="form-control" value=""required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>State<span class="text-danger">*</span></label>
									<select class="select" name="State">
										<option>Select State</option>
                    					<option value="Selangor">Selangor</option>
                    					<option value="Johor">Johor</option>
                    					<option value="Kelantan">Kelantan</option>
                    					<option value="Perak">Perak</option>
                    					<option value="Terengganu">Terengganu</option>
                   						<option value="Pahang">Pahang</option>
                    					<option value="Kedah">Kedah</option>
                    					<option value="Pulau Pinang">Pulau Pinang</option>
                    					<option value="Negeri Sembilan">Negeri Sembilan</option>
                    					<option value="Melaka">Melaka</option>
                    					<option value="Perlis">Perlis</option>
                    					<option value="Sabah">Sabah</option>
                    					<option value="Sarawak">Sarawak</option>
                 					 </select>
								</div>
							</div>
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

		<script>
			function AvoidSpace (event){
				var k = event ? event.which : window.event.keyCode;
				if (k==32) return false;
			}
		</script>

		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>

    </body>
</html>
