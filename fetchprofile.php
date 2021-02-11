<!DOCTYPE html>

<?php
    include "connection.php";
    session_start();
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

  <!-- Datetimepicker CSS -->
      <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

  <!-- Tagsinput CSS -->
      <link rel="stylesheet" href="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">

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

<?php
if(isset($_GET['ProfileID']))
{
  	{
		$ProfileID =$_GET['ProfileID'];
		$sql = "SELECT * from profile p, department d
				WHERE p.DepartmentID = d.DepartmentID
				AND p.ProfileID = '$ProfileID'";
		$result = mysqli_query($connection, $sql) or die (mysqli_error($connection));
		while($row = mysqli_fetch_array($result))
    	{
    		echo'<div id="emp_profile" class="pro-overview tab-pane fade show active">';
        	echo'<div class="page-wrapper">';
        		echo' <div class="content container-fluid">';
					echo'<div class="page-header">';
						echo'<div class="row">';
							echo'<div class="col-sm-12">';
							echo'<h3 class="page-title">Profile</h3>';
							echo'<ul class="breadcrumb">';
								echo'<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>';
								echo'<li class="breadcrumb-item active">Profile</li>';
							echo'</ul>';
							echo'</div>';
						echo'</div>';
					echo'</div>';
					echo'<div class="card mb-0">';
						echo'<div class="card-body">';
							echo'<div class="row">';
								echo'<div class="col-md-12">';
									echo'<div class="profile-view">';
										echo'<div class="profile-img-wrap">';
											echo'<div class="profile-img">';
												echo'<img src="'.$row["ProfileImage"].'">';
											echo'</div>';
										echo'</div>';
										echo'<div class="profile-basic">';
											echo'<div class="row">';
												echo'<div class="col-md-5">';
													echo'<div class="profile-info-left">';
													echo'<h3 class="user-name m-t-0 mb-0">'.$row['Username'].'</h3>';
													echo'<h6 class="text-muted">'.$row['Name'].'</h6>';
													echo'<small class="text-muted">'.$row['Position'].'</small>';
														echo'<div class="small doj text-muted">Date of Join : '.$row['WorkStartDate'].'</div>';
													echo'</div>';
												echo'</div>';
												echo'<div class="col-md-7">';
													echo'<ul class="personal-info">';
														echo'<li>';
															echo'<div class="title">First Name</div>';
															echo'<div class="text">'.$row['FirstName'].'</div>';
														echo'</li>';
														echo'<li>';
															echo'<div class="title">Last Name</div>';
															echo'<div class="text">'.$row['LastName'].'</div>';
														echo'</li>';
														echo'<li>';
															echo'<div class="title">Phone</div>';
															echo'<div class="text">'.$row['PhoneNo'].'</div>';
														echo'</li>';
														echo'<li>';
															echo'<div class="title">Email</div>';
															echo'<div class="text"><a href="">'.$row['Email'].'</a>';echo'</div>';
														echo'</li>';
														echo'<li>';
															echo'<div class="title">Gender</div>';
															echo'<div class="text">'.$row['Gender'].'</div>';
														echo'</li>';
													echo'</ul>';
												echo'</div>';
											echo'</div>';
										echo'</div>';
										
									echo'</div>';
								echo'</div>';
						echo'</div>';
					echo'</div>';

					echo'<div class="card tab-box">';
						echo'<div class="row user-tabs">';
							echo'<div class="col-lg-12 col-md-12 col-sm-12 line-tabs">';
								echo'<ul class="nav nav-tabs nav-tabs-bottom">';
									echo'<li class="nav-item"><a href="#emp_profile" data-toggle="tab" class="nav-link active">Profile</a></li>';
									
								echo'</ul>';
							echo'</div>';
					echo'</div>';
					echo'<div class="tab-content">';
  		}
	}
	{
		$ProfileID =$_GET['ProfileID'];
		$sql = "SELECT * from profile
				WHERE ProfileID = '$ProfileID'";
		$result = mysqli_query($connection, $sql) or die (mysqli_error($connection));
		while($row = mysqli_fetch_array($result))
    	{
				echo'<div class="row">';
					echo'<div class="col-md-6 d-flex">';
						echo'<div class="card profile-box flex-fill">';
							echo'<div class="card-body">';
								echo'<h3 class="card-title">Personal Informations <a href="#" class="edit-icon" data-toggle="modal" data-target="#personal_info_modal"><i class="fa fa-pencil"></i></a></h3>';
								echo'<ul class="personal-info">';
									echo'<li>';
										echo'<div class="title">NRIC</div>';
										echo'<div class="text">'.$row['NRIC'].'</div>';
									echo'</li>';
    								echo'<li>';
    									echo'<div class="title">Birth date:</div>';
    									echo'<div class="text">'.$row['Birthdate'].'</div>';
    								echo'</li>';
									echo'<li>';
										echo'<div class="title">Race</div>';
										echo'<div class="text">'.$row['Race'].'</div>';
									echo'</li>';
									echo'<li>';
										echo'<div class="title">Marital status</div>';
										echo'<div class="text">'.$row['MaritalStatus'].'</div>';
									echo'</li>';
									echo'<li>';
										echo'<div class="title">Address</div>';
										echo'<div class="text">'.$row['Address'].'</div>';
									echo'</li>';
									echo'<li>';
										echo'<div class="title">Town/City</div>';
										echo'<div class="text">'.$row['City'].'</div>';
									echo'</li>';
									echo'<li>';
										echo'<div class="title">Postcode</div>';
										echo'<div class="text">'.$row['Postcode'].'</div>';
									echo'</li>';
									echo'<li>';
										echo'<div class="title">State</div>';
										echo'<div class="text">'.$row['State'].'</div>';
									echo'</li>';
								echo'</ul>';
							echo'</div>';
						echo'</div>';
					echo'</div>';
		}
	}
	{
		$ProfileID =$_GET['ProfileID'];
		$sql = "SELECT * from profile p, emergencycontact c
				WHERE p.ProfileID = c.ProfileID
				AND p.ProfileID = '$ProfileID'";
		$result = mysqli_query($connection, $sql) or die (mysqli_error($connection));
		while($row = mysqli_fetch_array($result))
		{
					echo'<div class="col-md-6 d-flex">';
						echo'<div class="card profile-box flex-fill">';
							echo'<div class="card-body">';
							echo'<h3 class="card-title">Emergency Contact <a href="#" class="edit-icon" data-toggle="modal" data-target="#emergency_contact_modal"><i class="fa fa-pencil"></i></a></h3>';
							echo'<h5 class="section-title">Primary Contact</h5>';
							echo'<ul class="personal-info">';
								echo'<li>';
									echo'<div class="title">Name</div>';
									echo'<div class="text">'.$row['PrimaryName'].'</div>';
								echo'</li>';
								echo'<li>';
									echo'<div class="title">Relationship</div>';
									echo'<div class="text">'. $row['PrimaryRelationship'].'</div>';
								echo'</li>';
								echo'<li>';
									echo'<div class="title">Phone </div>';
									echo'<div class="text">'. $row['PrimaryPhone1'].','.$row['PrimaryPhone2'].'</div>';
								echo'</li>';
							echo'</ul>';
							echo'<hr>';
							echo'<h5 class="section-title">Secondary Contact</h5>';
							echo'<ul class="personal-info">';
								echo'<li>';
									echo'<div class="title">Name</div>';
									echo'<div class="text">'.$row['SecondaryName'].'</div>';
								echo'</li>';
								echo'<li>';
									echo'<div class="title">Relationship</div>';
									echo'<div class="text">'. $row['SecondaryRelationship'].'</div>';
								echo'</li>';
								echo'<li>';
									echo'<div class="title">Phone </div>';
									echo'<div class="text">'.$row['SecondaryPhone1'].', '.$row['SecondaryPhone2'].'</div>';
								echo'</li>';
							echo'</ul>';
						echo'</div>';
					echo'</div>';
				echo'</div>';
		}
	}
	{
		$ProfileID =$_GET['ProfileID'];
		$sql = "SELECT * from profile p, bankinformation b
				WHERE p.ProfileID = b.ProfileID
				AND p.ProfileID = '$ProfileID'";
		$result = mysqli_query($connection, $sql) or die (mysqli_error($connection));
		while($row = mysqli_fetch_array($result))
		{
				echo'<div class="row">';
					echo'<div class="col-md-6 d-flex">';
						echo'<div class="card profile-box flex-fill">';
							echo'<div class="card-body">';
								echo'<h3 class="card-title">Bank Informations<a href="#" class="edit-icon" data-toggle="modal" data-target="#bank_information_modal"><i class="fa fa-pencil"></i></a></h3>';
								echo'<ul class="personal-info">';
									echo'<li>';
										echo'<div class="title">Bank Name</div>';
										echo'<div class="text">'.$row['BankName'].'</div>';
									echo'</li>';
									echo'<li>';
										echo'<div class="title">Bank Account No.</div>';
										echo'<div class="text">'.$row['BankAccNo'].'</div>';
									echo'</li>';
									echo'<li>';
										echo'<div class="title">EPF No.</div>';
										echo'<div class="text">'.$row['EPFNo'].'</div>';
									echo'</li>';
								echo'</ul>';
							echo'</div>';
						echo'</div>';
					echo'</div>';

		}
	}
	{		
		$ProfileID =$_GET['ProfileID'];
		$sql = "SELECT * from profile 
				WHERE ProfileID = '$ProfileID'";
		$result = mysqli_query($connection, $sql) or die (mysqli_error($connection));
		while($row = mysqli_fetch_array($result))
		{
					echo'<div class="col-md-6 d-flex">';
        				echo'<div class="card profile-box flex-fill">';
          					echo'<div class="card-body">';
              					echo'<h3 class="card-title">Uploaded Resume <a href="#" class="edit-icon" data-toggle="modal" data-target="#resume"><i class="fa fa-pencil"></i></a></h3>';
            					echo'<ul class="personal-info">';
              						echo'<li>';
              							echo'<div class="title">File Name</div>';	
      									echo'<a href="download.php?ProfileID='. $row['ProfileID'].'"><span class="glyphicon glyphicon-download"></span>'.basename($row['Resume']).'</a>';
            						echo'</li>';
           							echo'<li>';
              							echo'<div class="title">Uploaded</div>';
              							echo'<div class="text">'.$row['UploadResume'].'</div>';
            						echo'</li>';
           						echo'</ul>';
          					echo'</div>';
        				echo'</div>';
      				echo'</div>';
		}
	}
}
mysqli_close($connection);
?>


						<!-- Bank Statutory Tab -->
						<div class="tab-pane fade" id="bank_statutory">
							<div class="card">
								<div class="card-body">
									
									<form>
						
										
	
								
										<div class="row">
											
											<div class="col-sm-4">
												<div class="form-group">
													<label class="col-form-label">Additional rate <span class="text-danger">*</span></label>
													<select class="select">
														<option>Select additional rate</option>
														<option>0%</option>
														<option>1%</option>
														<option>2%</option>
														<option>3%</option>
														<option>4%</option>
														<option>5%</option>
														<option>6%</option>
														<option>7%</option>
														<option>8%</option>
														<option>9%</option>
														<option>10%</option>
													</select>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<label class="col-form-label">Total rate</label>
													<input type="text" class="form-control" placeholder="N/A" value="11%">
												</div>
											</div>
									   </div>

										<div class="submit-section">
											<button class="btn btn-primary submit-btn" type="submit">Save</button>
										</div>
									</form>
								</div>
							</div>
						</div>
						<!-- /Bank Statutory Tab -->

					</div>
                </div>
				<!-- /Page Content -->

				<!-- Profile Modal -->
				<?php
            include "connection.php";
            $sql = "SELECT *
            from profile p, department d
            where p.DepartmentID = d.DepartmentID
            and p.ProfileID = '$ProfileID'";
            $result = mysqli_query($connection, $sql) or die (mysqli_error($connection));
            $row = mysqli_fetch_assoc($result);
      ?>
				<div id="profile_info" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Profile Informations</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="updateprofilemodal1.php" method="post">
									<div class="row">
										<div class="col-md-12">
											<div class="profile-img-wrap edit-img">
												<img class="inline-block" src="<?php echo $row['ProfileImage'];?>" alt="user">
												
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label>First Name</label>
														<input type="hidden" name="ProfileID" value="<?php echo $row['ProfileID']?>"/>
														<input type="text" name="FirstName" class="form-control" value="<?php echo $row['FirstName']; ?>"required>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label>Last Name</label>
														<input type="text" name="LastName" class="form-control"value="<?php echo $row['LastName']; ?>"required>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label>Username</label>
														<input type="text" name="Username" class="form-control" value="<?php echo $row['Username']; ?>"required>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label>Gender</label>
														<input type="text" name="Gender" class="form-control" value="<?php echo $row['Gender']; ?>"required>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label>Email</label>
															<input class="form-control" name="Email" type="text" value="<?php echo $row['Email']; ?>"required>
													</div>
												</div>
												<div class="col-md-6">
											<div class="form-group">
												<label>Phone Number</label>
												<input type="text" class="form-control" name="PhoneNo" value="<?php echo $row['PhoneNo']; ?>"required>
											</div>
										</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Department <span class="text-danger">*</span></label>
												<select class="select" name="DepartmentID">
													
													 <option value="<?php echo $row['DepartmentID']; ?>"><?php echo $row['Name']; ?></option>
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
												<label>Position <span class="text-danger">*</span></label>
												<select class="select" name="Position">
													
													 <option value="<?php echo $row['Position']; ?>"><?php echo $row['Position']; ?></option>
													<option value="Top Management">Top Management</option>
													<option value="HOD">HOD</option>
													<option value="Admin">Admin</option>
													<option value="Staff">Staff</option>
												</select>
											</div>
										</div>
									</div>
									<div class="submit-section">
										<button name="submit3" class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Profile Modal -->

				<!-- Personal Info Modal -->

					<?php
            include "connection.php";
            $sql = "SELECT *
            from profile
            where ProfileID = '$ProfileID'";
            $result = mysqli_query($connection, $sql) or die (mysqli_error($connection));
            $row = mysqli_fetch_assoc($result);
      ?>
				<div id="personal_info_modal" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Personal Informations</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
									<form action="updatepersonalinfo1.php" method="post">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>NRIC</label>
												<input type="hidden" name="ProfileID" value="<?php echo $row['ProfileID']?>"/>
												<input name="NRIC" type="text" class="form-control"value="<?php echo $row['NRIC']; ?>"required>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Birth Date</label>
												<input name="Birthdate" type="date" class="form-control" value="<?php echo $row['Birthdate']; ?>"required>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Race</label>
												 <select name="Race" class="select form-control">
												 	<option selected disabled ><?php echo $row['Race']; ?></option>
                                                    <option value="Malay">Malay</option>
                                                    <option value="Chinese">Chinese</option>
                                                    <option value="Indian">Indian</option>
                                                   <option value="Others">Others</option>
                                                 </select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Marital Status <span class="text-danger">*</span></label>
												<select name="MaritalStatus" class="select form-control">
													<option selected disabled value=""><?php echo $row['MaritalStatus']; ?></option>
													<option>Single</option>
													<option>Married</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Address</label>
												<input name="Address" type="text" class="form-control" value="<?php echo $row['Address']; ?>">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Town/City</label>
												<input name="City" class="form-control" type="text" value="<?php echo $row['City']; ?>">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Postcode</label>
												<input name="Postcode" class="form-control" type="text" value="<?php echo $row['Postcode']; ?>">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>State</label>
												<select class="select" name="State">
                    <option selected disabled ><?php echo $row['State']; ?></option>
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
									<div class="submit-section">
										<button name="submit2" class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Personal Info Modal -->

				<!-- Emergency Contact Modal -->
				  <?php
            include "connection.php";
            $sql = "SELECT *
            from profile p, emergencycontact e
            where p.ProfileID = e.ProfileID
            and p.ProfileID = '$ProfileID'";
            $result = mysqli_query($connection, $sql) or die (mysqli_error($connection));
            $row = mysqli_fetch_assoc($result);
      ?>
				<div id="emergency_contact_modal" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Emergency Contacts</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">

								<form action="updateemergencycontact1.php" method="post">
									<div class="card">
										<div class="card-body">
											<h3 class="card-title">Primary Contact</h3>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label>Name<span class="text-danger">*</span></label>
														<input type="hidden" name="ProfileID" value="<?php echo $row['ProfileID']?>"/>
														<input name="PrimaryName" type="text" class="form-control" value="<?php echo $row['PrimaryName']; ?>">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label>Relationship<span class="text-danger">*</span></label>
														<select class="select" name="PrimaryRelationship">
                    <option selected disabled ><?php echo $row['PrimaryRelationship']; ?></option>
                    <option value="Mother">Mother</option>
                    <option value="Father">Father</option>
                    <option value="Brother">Brother</option>
                    <option value="Sister">Sister</option>
                    <option value="Son">Son</option>
                    <option value="Daughter">Daughter</option>
                    <option value="Family">Family</option>
                    <option value="Friend">Friend</option>
                    <option value="Spouse">Spouse</option>
                    <option value="Partner">Partner</option>
                    <option value="Assistant">Assistant</option>
                    <option value="Close Neighbour">Close Neighbour</option>
                  </select>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label>Phone <span class="text-danger">*</span></label>
														<input class="form-control" type="text" name="PrimaryPhone1" value="<?php echo $row['PrimaryPhone1']; ?>" required>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label>Phone 2</label>
														<input class="form-control" type="text" name="PrimaryPhone2" value="<?php echo $row['PrimaryPhone2']; ?>">
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="card">
										<div class="card-body">
											<h3 class="card-title">Secondary Contact</h3>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label>Name <span class="text-danger">*</span></label>
														<input type="text" class="form-control" name="SecondaryName" value="<?php echo $row['SecondaryName']; ?>">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label>Relationship <span class="text-danger">*</span></label>
														<select class="select" name="SecondaryRelationship">
                    <option selected disabled ><?php echo $row['SecondaryRelationship']; ?></option>
                    <option value="Mother">Mother</option>
                    <option value="Father">Father</option>
                    <option value="Brother">Brother</option>
                    <option value="Sister">Sister</option>
                    <option value="Son">Son</option>
                    <option value="Daughter">Daughter</option>
                    <option value="Family">Family</option>
                    <option value="Friend">Friend</option>
                    <option value="Spouse">Spouse</option>
                    <option value="Partner">Partner</option>
                    <option value="Assistant">Assistant</option>
                    <option value="Close Neighbour">Close Neighbour</option>
                  </select>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label>Phone <span class="text-danger">*</span></label>
														<input class="form-control" type="text" name="SecondaryPhone1" value="<?php echo $row['SecondaryPhone1']; ?>">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label>Phone 2</label>
														<input class="form-control" type="text" name="SecondaryPhone2" value="<?php echo $row['SecondaryPhone2']; ?>">
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="submit-section">
										<button name="submit" class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Emergency Contact Modal -->
 <?php
            include "connection.php";
            $sql = "SELECT *
            from profile p, bankinformation b
            where p.ProfileID = b.ProfileID
            and p.ProfileID = '$ProfileID'";
            $result = mysqli_query($connection, $sql) or die (mysqli_error($connection));
            $data = mysqli_fetch_assoc($result);
      ?>
				<div id="bank_information_modal" class="modal custom-modal fade" role="dialog">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Bank Information</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="updatebankinfo1.php" method="post">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Bank Name</label>
                  <input type="hidden" name="ProfileID" value="<?php echo $row['ProfileID']?>"/>
                 <select class="select" name="BankName">
                 	 <option selected disabled ><?php echo $data['BankName']; ?></option>
                    <option value="Maybank">Maybank/Maybank Islamic</option>
                    <option value="RHB Bank">RHB Bank</option>
                    <option value="CIMB Bank">Cimb Bank</option>
                    <option value="Public Bank">Public Bank</option>
                    <option value="Bank Islam">Bank Islam</option>
                    <option value="BSN">BSN</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Bank Account No.</label>
                  <input class="form-control" name="BankAccNo" type="text" value="<?php echo $data['BankAccNo']; ?>"required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>EPF No.</label>
                    <input name="EPFNo" class="form-control" type="text" value="<?php echo $data['EPFNo']; ?>">
                </div>
              </div>
              </div>
            <div class="submit-section">
              <button name="submit1" class="btn btn-primary submit-btn">Submit</button>
            </div>
          </form>
        </div>
      </div>
      </div>
      </div>
      <!-- /Bank Information Modal -->

      <!-- Resume Modal -->
      <div id="resume" class="modal custom-modal fade" role="dialog">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Resume</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
             <form  id="upload_resume" class="form-horizontal" method="POST" enctype="multipart/form-data">
            <div class="row">
              <div class="form-group">
                <h5><span class="text-danger">*</span>Your file must be in Word (.doc or .docx), Text (.txt), Rich Text (.rtf) or PDF (.pdf) format</h5>
                <label>Upload File</label>
                 <input type="hidden" name="ProfileID" value="<?php echo $row['ProfileID']?>"/>
                <input class="form-control" type="file" name="Resume" value="" accept=".doc,.docx,.pdf,.txt,.rtf">
              </div>
            </div>
            <div class="submit-section">
              <button class="btn btn-primary submit-btn" type="submit" name="upload">Submit</button>
            </div>
          </form>
<?php
              include "connection.php";
  if (isset($_POST['upload'])) {
 
    $Resume = addslashes(file_get_contents($_FILES['Resume']['tmp_name']));
    $Resume_name = addslashes($_FILES['Resume']['name']);
    $Resume_size = getimagesize($_FILES['Resume']['tmp_name']);
 
    move_uploaded_file($_FILES["Resume"]["tmp_name"], "assets/resume/" . $_FILES["Resume"]["name"]);
    $location = "assets/resume/" . $_FILES["Resume"]["name"];
    $connection->query("update profile set Resume = '$location', UploadResume = now() where ProfileID  = '$ProfileID' ");
  ?>
  <script>
    window.location = 'profile.php';
  </script>
  <?php
  }
  ?>
        </div>
      </div>
      </div>
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

		<!-- Tagsinput JS -->
		<script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>

		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>

    </body>
</html>
