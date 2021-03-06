<!doctype html>
<?php  session_start();
if (isset($_SESSION['pc_data'])) {
	$pc=$_SESSION['pc_data'];
}else {
    header("location:../Bidder_Module/login.php");

}
?>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Procurement Commitee Member Panel</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="assets/css/material-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>

	<div class="wrapper">
		<div class="sidebar" data-color="green" data-image="assets/img/sidebar-1.jpg">

			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->

			<div class="logo">
				<a href="#" class="simple-text">
					PC MEMBER
				</a>

			</div>
								<div class="sidebar-wrapper">
											<ul class="nav">
												<li class="active">
													<a href="pc_dashboard.php">
														<i class="material-icons">dashboard</i>
														<p>Dashboard</p>
													</a>
												</li>

												<li>
																					<a href="pc_profile.php">
																						 <i class="material-icons">person</i>
																							<p>My Profile</p>
																					</a>
																			</li>

																			<li>


												<li >
													<a href="pc_winner.php">
														<i class="material-icons">bubble_chart</i>
														<p>Select Winners</p>
													</a>
												</li>


					<li class="active-pro">
		                    <a href="pc_logout.php">
		                        <i class="material-icons">unarchive</i>
		                        <p>SignOut</p>
		                    </a>
		            </li>
	            </ul>
	    	</div>
	    </div>


	    <div class="main-panel">
			<nav class="navbar navbar-transparent navbar-absolute">

			</nav>

			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class=" col-md-12 col-sm-12">
							<div class="card card-stats">
								<div class="card-header" data-background-color="orange">
									<i class="material-icons">content_copy</i>
								</div>
								<h3>WELCOME! <?php echo $pc['PcName'] ?></h3>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="card" style="width: 30rem;">
									  <img class="card-img-top" src="profile.png" alt="Card image cap">
									  <div class="card-block" align="center">
									    <h4 class="card-title">My Profile</h4>
									    <p class="card-text">See your profile details and edit  your profile..</p>
									    <a href="pc_profile.php" class="btn btn-primary" style="background-color:green;">MY PROFILE</a>
									  </div>
									</div>
								</div>

								<div class="col-md-4">
									<div class="card" style="width: 30rem;">
									  <img class="card-img-top" src="icon_play.png" alt="Card image cap">
									  <div class="card-block" align="center">
									    <h4 class="card-title">Select Winners</h4>
									    <p class="card-text">Select the winner of the tenders..e</p>
									    <a href="pc_winner.php" class="btn btn-primary" style="background-color:green;" >SELECT WINNERS</a>
									  </div>
									</div>
								</div>

								<div class="col-md-4">
									<div class="card" style="width: 30rem;">
									  <img class="card-img-top" src="Logout.png" alt="Card image cap">
									  <div class="card-block" align="center">
									    <h4 class="card-title">SIGNOUT</h4>
									    <p class="card-text">Signout from your account..</p>
									    <a href="pc_logout.php" class="btn btn-primary" style="background-color:green;">SIGN OUT</a>
									  </div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>

</body>

	<!--   Core JS Files   -->
	<script src="assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/material.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

	<!--  Notifications Plugin    -->
	<script src="assets/js/bootstrap-notify.js"></script>

	<!--  Google Maps Plugin    -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

	<!-- Material Dashboard javascript methods -->
	<script src="assets/js/material-dashboard.js"></script>

	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

			// Javascript method's body can be found in assets/js/demos.js
        	demo.initDashboardPageCharts();

    	});
	</script>

</html>
