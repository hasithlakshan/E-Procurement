<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="../assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Operator Panel</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />



    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="../assets/css/material-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>

	<div class="wrapper">

	    <div class="sidebar" data-color="blue" data-image="../assets/img/sidebar-1.jpg">
			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->

			<div class="logo">
				<a href="#" class="simple-text">
					Operator
				</a>
			</div>

	    	<div class="sidebar-wrapper">
	            <ul class="nav">
								<li >
										<a href="dashboard.php">
												<i class="material-icons">dashboard</i>
												<p>Dashboard</p>
										</a>
								</li>
								<li class="active" >
										<a href="AccTo.php">
												<i class="material-icons">person</i>
												<p>Access To TEC</p>
										</a>
								</li>
								<li>
										<a href="postTender.php">
												<i class="material-icons">content_paste</i>
												<p>Post Tender</p>
										</a>
								</li>
								<li>
										<a href="PostWinners.php">
												<i class="material-icons">bubble_chart</i>
												<p>Post Winners</p>
										</a>
								</li>
	               <!-- <li>
	                    <a href="icons.html">
	                        <i class="material-icons">bubble_chart</i>
	                        <p>Icons</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="maps.html">
	                        <i class="material-icons">location_on</i>
	                        <p>Maps</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="notifications.html">
	                        <i class="material-icons text-gray">notifications</i>
	                        <p>Notifications</p>
	                    </a>
	                </li>-->
					<li class="active-pro">
	                    <a href="upgrade.html">
	                        <i class="material-icons">unarchive</i>
	                        <p>SingOut</p>
	                    </a>
	                </li>
	            </ul>
	    	</div>
	    </div>

	    <div class="main-panel">
			<nav class="navbar navbar-transparent navbar-absolute">
				<!--<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">My Dashboard</a>
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
									<i class="material-icons">dashboard</i>
									<p class="hidden-lg hidden-md">Dashboard</p>
								</a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="material-icons">notifications</i>
									<span class="notification">0</span>
									<p class="hidden-lg hidden-md">Notifications</p>
								</a>
								<ul class="dropdown-menu">
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
								</ul>
							</li>
							<li>
								<a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
	 							   <i class="material-icons">person</i>
	 							   <p class="hidden-lg hidden-md">Profile</p>
		 						</a>
							</li>
						</ul>

						<form class="navbar-form navbar-right" role="search">
							<div class="form-group  is-empty">
								<input type="text" class="form-control" placeholder="Search">
								<span class="material-input"></span>
							</div>
							<button type="submit" class="btn btn-white btn-round btn-just-icon">
								<i class="material-icons">search</i><div class="ripple-container"></div>
							</button>
						</form>
					</div>
				</div>-->
			</nav>

	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Grant access to TEC member</h4>
	                               <!-- <p class="category">Created using Roboto Font Family</p>-->
	                            </div>

									<!--<div class="form-group">-->
										<!--<div class="input-group">-->
											<!--<span class="input-group-addon">Search</span>-->
											<!--<input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control" />-->
										<!--</div>-->
									<!--</div>-->
									<!--<br />-->
									<!--<div id="result"></div>-->
<!--                             -->

												<div class="clear:both"></div>
								<div class="panel-body">
									<div class="row"><div class="col-sm-12 table-responsive">
										<table id="user_data" class="table table-bordered table-striped">
											<thead>
											<tr>
												<!--<th>ID</th>-->
												<!--<th>Email</th>-->
												<!--<th>Name</th>-->
												<!--<th>Status</th>-->
												<!--<th>Edit</th>-->
												<!--<th>Delete</th>-->
												<th>Tec ID</th>
												<th>Member ID</th>
												<th>Tec Mail</th>
												<th>Tp NO</th>
												<th>Special</th>
												<th class="text-left">Grand OP</th>
                                                <th class="text-left">Delete Tec</th>
											</tr>
											</thead>
										</table>
									</div>
									</div>
								</div>
							</div>




	                            </div>
	                        </div>
	                    </div>




	<div id="userModal" class="modal fade" >
		<div class="modal-dialog">
			<form method="post" id="user_form" action="../function/tec_action.php">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title"><i class="fa fa-plus"></i> Add User</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label>TecID</label>
							<input type="text"  name="tec_id" id="tec_id" class="form-control" readonly="true" />
						</div>
                        <div class="form-group">
                            <label>TEC Specialized In</label>
                            <input type="text" name="spc" id="spc_" class="form-control" disabled />
                        </div>
						<div class="form-group">
							<label>Enter Tender ID</label>
							<input type="text" name="tid" id="tid" class="form-control" required />
						</div>
<!--						<div class="form-group">-->
<!--							<label>Enter User Password</label>-->
<!--							<input type="password" name="user_password" id="user_password" class="form-control" required />-->
<!--						</div>-->
					</div>
					<div class="modal-footer">
<!--						<input type="hidden" name="tec_id" id="tec_id" />-->
<!--						<input type="hidden" name="btn_action" id="btn_action" />-->
<!--						<input type="submit" name="action" id="action" class="btn btn-info" value="Edit" />-->
                        <input type="submit" name="submit"  class="btn btn-info" value="Submit" />
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</form>

		</div>
	</div>

					<footer class="footer">
				 		 <div class="container-fluid">
				 				 <nav class="pull-left">
				 						 <ul>
				 								 <li>
				 										 <a href="#">
				 												 Home
				 										 </a>
				 								 </li>
				 								<!-- <li>
				 										 <a href="#">
				 												 Company
				 										 </a>
				 								 </li>
				 								 <li>
				 										 <a href="#">
				 												 Portfolio
				 										 </a>
				 								 </li>
				 								 <li>
				 										 <a href="#">
				 												Blog
				 										 </a>
				 								 </li>-->
				 						 </ul>
				 				 </nav>
				 				 <p class="copyright pull-right">
				 						 &copy; <script>document.write(new Date().getFullYear())</script> <a href="#">E-Procurement</a>
				 				 </p>
				 		 </div>
				  </footer>
            </div>
        </div>
    </div>



</body>

	<!--   Core JS Files   -->
	<script src="../assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
	<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../assets/js/material.min.js" type="text/javascript"></script>

<script src="../assets/js/jquery.dataTables.min.js"></script>
<script src="../assets/js/dataTables.bootstrap.min.js"></script>

	<!--  Charts Plugin -->
	<script src="../assets/js/chartist.min.js"></script>

	<!--  Notifications Plugin    -->
	<script src="../assets/js/bootstrap-notify.js"></script>

	<!--  Google Maps Plugin    -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

	<!-- Material Dashboard javascript methods -->
	<script src="../assets/js/material-dashboard.js"></script>

	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script src="../assets/js/demo.js"></script>

</html>

<!--<script>-->
    <!--$(document).ready(function(){-->

        <!--load_data();-->

        <!--function load_data(query)-->
        <!--{-->
            <!--$.ajax({-->
                <!--url:"../function/fetch1.php",-->
                <!--method:"POST",-->
                <!--data:{query:query},-->
                <!--success:function(data)-->
                <!--{-->
                    <!--$('#result').html(data);-->
                <!--}-->
            <!--});-->
        <!--}-->
        <!--$('#search_text').keyup(function(){-->
            <!--var search = $(this).val();-->
            <!--if(search != '')-->
            <!--{-->
                <!--load_data(search);-->
            <!--}-->
            <!--else-->
            <!--{-->
                <!--load_data();-->
            <!--}-->
        <!--});-->
    <!--});-->
<!--</script>-->

<script>
    $(document).ready(function(){



        var userdataTable = $('#user_data').DataTable({
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax":{
                url:"../function/tec_fetch.php",
                type:"POST"
            },
            "columnDefs":[
                {
                    "target":[4,5],
                    "orderable":false
                }
            ],
            "pageLength": 25
        });


//
//        $(document).on('submit', '#user_form', function(event){
//            event.preventDefault();
//            $('#action').attr('disabled','disabled');
//            var form_data = $(this).serialize();
//            $.ajax({
//                url:"user_action.php",
//                method:"POST",
//                data:form_data,
//                success:function(data)
//                {
//                    $('#user_form')[0].reset();
//                    $('#userModal').modal('hide');
//                    $('#alert_action').fadeIn().html('<div class="alert alert-success">'+data+'</div>');
//                    $('#action').attr('disabled', false);
//                    userdataTable.ajax.reload();
//                }
//            })
//        });
//
        $(document).on('click', '.update', function(){
            var TecID = $(this).attr("id");
            var btn_action = 'fetch_single';
            $.ajax({
                url:"../function/tec_action.php",
                method:"POST",
                data:{TecID:TecID, btn_action:btn_action},
                dataType:"json",
                success:function(data)
                {
                    $('#userModal').modal('show');
                   // $('#tec_id').val(data.tec_id);
                    $('#tid').val(data.tid);
                    $('#spc_').val(data.spc);


                    $('.modal-title').html("<i class='fa fa-pencil-square-o'></i>Give Grand Access");
                    $('#tec_id').val(TecID);
                    //$('#action').val('Edit');
                    //$('#btn_action').val('Edit');

                }
            })
        });

        $(document).on('click', '.delete', function(){
            var TecID = $(this).attr("id");

            var btn_action = "delete";
            if(confirm("Are you sure you want to Delete?"))
            {
                $.ajax({
                    url:"../function/tec_action.php",
                    method:"POST",
                    data:{TecID:TecID, btn_action:btn_action},
                    success:function(data)
                    {
                        $('#alert_action').fadeIn().html('<div class="alert alert-info">'+data+'</div>');
                        userdataTable.ajax.reload();
                    }
                })
            }
            else
            {
                return false;
            }
        });


//        $(document).on('click', '.update', function(){
//            var user_id = $(this).attr("id");
//            $('#userModal').modal('show');
//            $('#user_name').val(data.user_name);
//        });


    });






</script>

