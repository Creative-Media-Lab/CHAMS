<?php
include "connection.php";
session_start();

$Username = $_POST['Username'];
$Password = $_POST['Password'];
$op = $_GET['op'];

if($op=="in")
{
	$sql=mysqli_query($connection,"SELECT *
	 	FROM profile
	 	WHERE Username='$Username'
	 	AND Password='$Password'");

	if (mysqli_num_rows($sql)==1)
	{
		$execute = mysqli_fetch_array($sql);

		$_SESSION['ProfileID'] = $execute['ProfileID'];
		$_SESSION['Username'] = $execute['Username'];
		$_SESSION['Password'] = $execute['Password'];
		$_SESSION['Position'] = $execute['Position'];

		if($execute['Position']=="Staff")
		{
			echo "<meta http-equiv='refresh' content='0; url= dsadmin.html'/>";
		}
		else if ($execute['Position']=="HOD")
		{
			echo "<meta http-equiv='refresh' content='0; url= DashboardHOD.php'/>";
		}
		else if ($execute['Position']=="Admin")
		{
			echo "<meta http-equiv='refresh' content='0; url=  dsadmin.html'/>";
		}
		else if ($execute['Position']=="TPR")
		{
			echo "<meta http-equiv='refresh' content='0; url= DashboardHOD.php'/>";
		}
		else
		{
			?>

			<script language ="JavaScript">
				alert('Incorrect password or email');
				document.location='Login.html';
			</script>

			<?php
		}
	}
	else
	{
		echo "<meta http-equiv='refresh' content='0; url=Login.html'/>";
	}
}
else
{
	unset($_SESSION['Username']);
	unset($_SESSION['Position']);
}