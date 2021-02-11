<!DOCTYPE html>
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
  <?php
    include "connection.php";
    session_start();
    $ProfileID = $_SESSION['ProfileID'];
    $sql = "SELECT *
            FROM profile p, department d, emergencycontact c
            WHERE p.DepartmentID = d.DepartmentID and p.ProfileID = c.ProfileID
            AND p.ProfileID = '$ProfileID'";
    $result = mysqli_query($connection, $sql) or die (mysqli_error($connection));
    $data = mysqli_fetch_assoc($result);
  ?>

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

  <!-- Page Wrapper -->
    <div class="page-wrapper">

  <!-- Page Content -->
    <div class="content container-fluid">

  <!-- Page Header -->
    <div class="page-header">
      <div class="row">
        <div class="col-sm-12">
          <h3 class="page-title">Profile</h3>
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
              <li class="breadcrumb-item active">Profile</li>
            </ul>
        </div>
      </div>
    </div>

    <div class="card mb-0">
      <div class="card-body">
        <div class="row">
          <div class="col-md-12">
            <div class="profile-view">
              <div class="profile-img-wrap">
                <div class="profile-img">
                 
                <?php

 $sql="SELECT * FROM profile where ProfileID  = '$ProfileID'";
 $result = $connection->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        ?>
      
      <?php echo '<img src="' . $row['ProfileImage']. '" width="500" height="400">'; ?>

   <?php
        }
        }
        ?> 
                </div>

            </div>
              </div>

              <div class="profile-basic">
                <div class="row">

                  <div class="col-md-5">
                    <div class="profile-info-left">
                      <h3 class="user-name m-t-0 mb-0"><?php echo $data['Username']; ?></h3>
                      <h6 class="text-muted"><?php echo $data['Name']; ?></h6>
                      <small class="text-muted"><?php echo $data['Position']; ?></small>
                      <div class="small doj text-muted">Date of Join : <?php echo $data['WorkStartDate']; ?></div>
                    </div>
        <div class="staff-msg">
      <form  id="upload_image"  class="form-horizontal" method="POST" enctype="multipart/form-data">
        <div class="control-group">
          <div class="controls1">
            <input type="file" name="image" accept=".png,.jpg,.jpeg,.jfif,.webp,.tif" class="font" required>
          </div>
        </div>
         </div>
        <div class="control-group">
          <div class="controls">
            <button type="submit" name="submit" class="btn btn-custom">Change Profile Picture</button>
          </div>
        </div>
      </form>
              <?php
              include "connection.php";
  if (isset($_POST['submit'])) {
 
    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $image_name = addslashes($_FILES['image']['name']);
    $image_size = getimagesize($_FILES['image']['tmp_name']);
 
    move_uploaded_file($_FILES["image"]["tmp_name"], "assets/profileimage/" . $_FILES["image"]["name"]);
    $location = "assets/profileimage/" . $_FILES["image"]["name"];
    $connection->query("update profile set ProfileImage = '$location' where ProfileID  = '$ProfileID' ");
  ?>
  <script>
    window.location = 'profile.php';
  </script>
  <?php
  }
  ?>
      </div>


                  <div class="col-md-7">
                      <div class="pro-edit">
                <a data-target="#profile_info" data-toggle="modal" class="edit-icon" href="#">
                  <i class="fa fa-pencil"></i>
                </a>
              </div>
                    <ul class="personal-info">
                      <li>
                        <div class="title">First Name</div>
                        <div class="text"><?php echo $data['FirstName']; ?></div>
                      </li>
                      <li>
                        <div class="title">Last Name</div>
                        <div class="text"><?php echo $data['LastName']; ?></div>
                      </li>
                      <li>
                        <div class="title">Phone</div>
                        <div class="text"><?php echo $data['PhoneNo']; ?></div>
                      </li>
                      <li>
                        <div class="title">Email</div>
                        <div class="text"><a href=""><?php echo $data['Email']; ?></a></div>
                      </li>
                      <li>
                        <div class="title">Gender</div>
                        <div class="text"><?php echo $data['Gender']; ?></div>
                      </li>
                    </ul>
                  </div>

                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    <div class="card tab-box">
      <div class="row user-tabs">
        <div class="col-lg-12 col-md-12 col-sm-12 line-tabs">
          <ul class="nav nav-tabs nav-tabs-bottom">
            <li class="nav-item">
              <a href="#emp_profile" data-toggle="tab" class="nav-link active">Profile</a>
            </li>
            
          </ul>
        </div>
      </div>
    </div>

    <div class="tab-content">

      <!-- Profile Info Tab -->
      <div id="emp_profile" class="pro-overview tab-pane fade show active">
        <div class="row">
          <div class="col-md-6 d-flex">
            <div class="card profile-box flex-fill">
              <div class="card-body">
                <h3 class="card-title">Personal Informations <a href="#" class="edit-icon" data-toggle="modal" data-target="#personal_info_modal"><i class="fa fa-pencil"></i></a></h3>
                <ul class="personal-info">
                  <li>
                    <div class="title">NRIC</div>
                    <div class="text"><?php echo $data['NRIC']; ?></div>
                  </li>

                  <li>
                    <div class="title">Birth Date</div>
                    <div class="text"><?php echo $data['Birthdate']; ?></div>
                  </li>

                  <li>
                    <div class="title">Race</div>
                    <div class="text"><?php echo $data['Race']; ?></div>
                  </li>

                  <li>
                    <div class="title">Marital Status</div>
                    <div class="text"><?php echo $data['MaritalStatus']; ?></div>
                  </li>

                  <li>
                    <div class="title">Address</div>
                    <div class="text"><?php echo $data['Address']; ?></div>
                  </li>

                  <li>
                    <div class="title">Town/City</div>
                    <div class="text"><?php echo $data['City']; ?></div>
                  </li>

                  <li>
                    <div class="title">Postcode</div>
                    <div class="text"><?php echo $data['Postcode']; ?></div>
                  </li>

                  <li>
                    <div class="title">State</div>
                    <div class="text"><?php echo $data['State']; ?></div>
                  </li>
                </ul>
              </div>
            </div>
          </div>


          <div class="col-md-6 d-flex">
            <div class="card profile-box flex-fill">
              <div class="card-body">
                <h3 class="card-title">Emergency Contacts<a href="#" class="edit-icon" data-toggle="modal" data-target="#emergency_contact_modal"><i class="fa fa-pencil"></i></a></h3>
                <h5 class="section-title">Primary Contact</h5>
                <ul class="personal-info">
                  <li>
                    <div class="title">Name</div>
                    <div class="text"><?php echo $data['PrimaryName']; ?></div>
                  </li>

                  <li>
                    <div class="title">Relationship</div>
                    <div class="text"><?php echo $data['PrimaryRelationship']; ?></div>
                  </li>

                  <li>
                    <div class="title">Phone </div>
                    <div class="text"><?php echo $data['PrimaryPhone1']; ?> , <?php echo $data['PrimaryPhone2']; ?></div>
                  </li>
                </ul>
                <hr>
                <h5 class="section-title">Secondary Contact</h5>
                <ul class="personal-info">
                  <li>
                    <div class="title">Name</div>
                    <div class="text"><?php echo $data['SecondaryName']; ?></div>
                  </li>

                  <li>
                    <div class="title">Relationship</div>
                    <div class="text"><?php echo $data['SecondaryRelationship']; ?></div>
                  </li>

                  <li>
                    <div class="title">Phone </div>
                    <div class="text"><?php echo $data['SecondaryPhone1']; ?> , <?php echo $data['SecondaryPhone2']; ?></div> 
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

	<?php
    include "connection.php";
    $ProfileID = $_SESSION['ProfileID'];
    $sql = "SELECT *
            FROM profile p, bankinformation b
            WHERE p.ProfileID = b.ProfileID
            AND p.ProfileID = '$ProfileID'";
    $result = mysqli_query($connection, $sql) or die (mysqli_error($connection));
    $data = mysqli_fetch_assoc($result);
  ?>

  <div class="row">
    <div class="col-md-6 d-flex">
      <div class="card profile-box flex-fill">
        <div class="card-body">
          <h3 class="card-title">Bank Informations<a href="#" class="edit-icon" data-toggle="modal" data-target="#bank_information_modal"><i class="fa fa-pencil"></i></a></h3>
          <ul class="personal-info">
            <li>
              <div class="title">Bank Name</div>
              <div class="text"><?php echo $data['BankName']; ?></div>
            </li>

            <li>
              <div class="title">Bank Account No.</div>
              <div class="text"><?php echo $data['BankAccNo']; ?></div>
            </li>

            <li>
              <div class="title">EPF No.</div>
              <div class="text"><?php echo $data['EPFNo']; ?></div>
            </li>
          </ul>
        </div>
      </div>
    </div>

  <?php
    include "connection.php";
    $ProfileID = $_SESSION['ProfileID'];
    $sql = "SELECT *
            FROM profile
            WHERE ProfileID = '$ProfileID'";
    $result = mysqli_query($connection, $sql) or die (mysqli_error($connection));
    $row = mysqli_fetch_assoc($result);
  ?>
      <div class="col-md-6 d-flex">
        <div class="card profile-box flex-fill">
          <div class="card-body">
              <h3 class="card-title">Uploaded Resume <a href="#" class="edit-icon" data-toggle="modal" data-target="#resume"><i class="fa fa-pencil"></i></a></h3>
            <ul class="personal-info">
              <li>
              <div class="title">File Name</div>
               <div class="text"> <?php
              echo'<a href="download.php?ProfileID='. $row['ProfileID'].'"><span class="glyphicon glyphicon-download"></span>'.basename($row['Resume']).'</a>'; ?></div>
            </li>
            <li>
              <div class="title">Uploaded</div>
              <div class="text"><?php echo $row['UploadResume']; ?></div>
            </li>
            </ul>
          </div>
        </div>
      </div>

     
      </div>
          </div>
      <!-- /Page Content -->

      <!-- Profile Modal -->
      <?php
            include "connection.php";
            $ProfileID = $_SESSION['ProfileID'];
            $sql = "SELECT *
            from profile p, department d
            where p.DepartmentID = d.DepartmentID
            and p.ProfileID = '$ProfileID'";
            $result = mysqli_query($connection, $sql) or die (mysqli_error($connection));
            $data = mysqli_fetch_assoc($result);
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
            <div class="row">
              <div class="col-md-12">
                <div class="profile-img-wrap edit-img">
                  <img class="inline-block" 
  <?php

 $sql="SELECT * FROM profile where ProfileID  = '$ProfileID'";
 $result = $connection->query($sql);

    if ($result->num_rows > 0) 
    {
    // output data of each row
    while($row = $result->fetch_assoc())
     {
      
     echo '<img src="' . $row['ProfileImage']. '" width="500" height="400">'; 

      }
    }
  ?> 
                alt="user">
                </div>
                <form action="updateprofilemodal.php" method="post">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>First Name</label>
                      <input type="text" name="FirstName" class="form-control" value="<?php echo $data['FirstName']; ?>"required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Last Name</label>
                      <input type="text" name="LastName" class="form-control" value="<?php echo $data['LastName']; ?>"required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Username</label>
                      <input type="text" name="Username" class="form-control"  onkeypress="return AvoidSpace(event)" value="<?php echo $data['Username']; ?>"required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Gender</label>
                      <select class="select" name="Gender">
                        <option selected disabled ><?php echo $data['Gender']; ?></option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Email</label>
                        <input class="form-control" name="Email" type="text" value="<?php echo $data['Email']; ?>"required>
                    </div>
                  </div>
                  <div class="col-md-6">
                <div class="form-group">
                  <label>Phone Number</label>
                  <input type="tel" class="form-control" name="PhoneNo" value="<?php echo $data['PhoneNo']; ?>" required>
                </div>
              </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Department</label>
                  <select class="select" name="DepartmentID">
                  <option selected disabled ><?php echo $data['Name']; ?></option>
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
                     <option selected disabled ><?php echo $data['Position']; ?></option>
                    <option value="Top Management">Top Management</option>
                    <option value="HOD">HOD</option>
                    <option value="Admin">Admin</option>
                    <option value="Staff">Staff</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="submit-section">
              <button class="btn btn-primary submit-btn" type="submit" name="submit">Submit</button>
            </div>
          </form>
        </div>
      </div>
      </div>
      </div>
      <!-- /Profile Modal -->

      <!-- Personal Info Modal -->
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
            <form action="updatepersonalinfo.php" method="post">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>NRIC</label>
                  <input name="NRIC" type="text" class="form-control" value="<?php echo $data['NRIC']; ?>"required>
                </div>
              </div>
               <div class="col-md-6">
                    <div class="form-group">
                      <label>Birth Date</label>
                        <input class="form-control" name="Birthdate" type="date"  value="<?php echo $data['Birthdate']; ?>"required>
                    </div>
                  </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Race</label>
                   <select name="Race" class="select form-control">
                    <option value="Malay">Malay</option>
                    <option value="Chinese">Chinese</option>
                    <option value="Indian">Indian</option>
                    <option value="Others">Others</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Marital Status</label>
                  <select name="MaritalStatus" class="select form-control">
                    <option selected disabled value="<?php echo $data['MaritalStatus']; ?>"><?php echo $data['MaritalStatus']; ?></option>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Address</label>
                  <input name="Address" type="text" class="form-control" value="<?php echo $data['Address']; ?>"required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Town/City</label>
                  <input name="City" class="form-control" type="text" value="<?php echo $data['City']; ?>"required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Postcode</label>
                  <input name="Postcode" class="form-control" type="text" value="<?php echo $data['Postcode']; ?>"required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>State</label>
                   <select class="select" name="State">
                    <option selected disabled ><?php echo $data['State']; ?></option>
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
              <button class="btn btn-primary submit-btn">Submit</button>
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
            $ProfileID = $_SESSION['ProfileID'];
            $sql = "SELECT *
            from profile p, emergencycontact e
            where p.ProfileID = e.ProfileID
            and p.ProfileID = '$ProfileID'";
            $result = mysqli_query($connection, $sql) or die (mysqli_error($connection));
            $data = mysqli_fetch_assoc($result);
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
          <form action="updateemergencycontact.php" method="post">
            <div class="card">
              <div class="card-body">
                <h3 class="card-title">Primary Contact</h3>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Name</label>
                      <input name="PrimaryName" type="text" class="form-control" value="<?php echo $data['PrimaryName']; ?>" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Relationship</label>
                     <select class="select" name="PrimaryRelationship">
                    <option selected disabled ><?php echo $data['PrimaryRelationship']; ?></option>
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
                      <label>Phone</label>
                      <input class="form-control" type="tel" name="PrimaryPhone1" value="<?php echo $data['PrimaryPhone1']; ?>"required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Phone 2</label>
                      <input class="form-control" type="text" name="PrimaryPhone2" value="<?php echo $data['PrimaryPhone2']; ?>">
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
                      <label>Name</label>
                      <input type="text" class="form-control" name="SecondaryName" value="<?php echo $data['SecondaryName']; ?>"required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Relationship</label>
                      <select class="select" name="SecondaryRelationship">
                    <option selected disabled ><?php echo $data['SecondaryRelationship']; ?></option>
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
                      <label>Phone</label>
                      <input class="form-control" type="text" name="SecondaryPhone1" value="<?php echo $data['SecondaryPhone1']; ?>"required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Phone 2</label>
                      <input class="form-control" type="text" name="SecondaryPhone2" value="<?php echo $data['SecondaryPhone2']; ?>">
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
      <!-- /Emergency Contact Modal -->

       <!-- Bank Information Modal -->
        <?php
            include "connection.php";
            $ProfileID = $_SESSION['ProfileID'];
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
            <form action="updatebankinfo.php" method="post">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Bank Name</label>
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
              <button class="btn btn-primary submit-btn">Submit</button>
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

      <script>
      function AvoidSpace (event){
        var k = event ? event.which : window.event.keyCode;
        if (k==32) return false;
      }
    </script>
      </body>
      </html>
