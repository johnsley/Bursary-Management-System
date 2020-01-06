<!DOCTYPE html>
<?php
	require_once 'session.php';
	require_once 'connect.php';
?>
<html lang = "eng">
	<head>
		<title>Portal</title>
		<meta charset = "UTF-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<!-- Bootstrap Core CSS -->
	    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	    <!-- MetisMenu CSS -->
	    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

	    <!-- DataTables CSS -->
	    <link href="vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

	    <!-- DataTables Responsive CSS -->
	    <link href="vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

	    <!-- Custom CSS -->
	    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

	    <!-- Custom Fonts -->
	    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
	    <link href="css/sley.css" rel="stylesheet" type="text/css">
	</head>
<body>



    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0; background: #fff">
            <?php include 'header.php'?>
            <!-- /.navbar-top-links -->
            <?php include 'sidebar.php'?>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
           <!--  <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Students</h1>
                </div>
               
            </div> -->
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    </br>
                    <a class = "btn btn-success" href = "activity.php"><span class = "glyphicon glyphicon-hand-right"></span> Back</a>
                    </br></br>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Activity/Update
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                           
                            <div style = "width:40%; margin-left:32%;">	
							<?php
								$q_activity = $conn->query("SELECT * FROM `activity` WHERE `activity_id` = '$_REQUEST[activity_id]'") or die(mysqli_error());
								$f_activity = $q_activity->fetch_array();
							?>
							<form method = "POST" action = "edit_activity_query.php?activity_id=<?php echo $f_activity['activity_id']?>">	
								<div class = "form-group">
									<label>Title</label>
									<input type = "text" value = "<?php echo $f_activity['title']?>" class = "form-control" name = "title" />
								</div>
								<div class = "form-group">
									<label>Introduction</label>
									<textarea name = "description" style = "height:100px; resize:none;" class = "form-control"><?php echo $f_activity['description']?></textarea>
								</div>
								<div class = "form-inline">
									<label>Start</label>
									<input type = "date" value = "<?php echo $f_activity['start']?>" style = "width:41%;" class = "form-control"  name = "start"/>
									<label>End</label>
									<input type = "date" value = "<?php echo $f_activity['end']?>" style = "width:41%;" class = "form-control"  name = "end"/>
								</div>
								<br />
								<div class = "form-group">
									<button class = "btn btn-warning form-control" name = "update_activity"><span class = "glyphicon glyphicon-edit"></span> Save Changes</button>
								</div>
							</form>	
							</div>	

                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->


                </div>
                <!-- /.col-lg-12 -->
            </div>
            
        </div>
        <!-- /#page-wrapper -->

    </div>
 
</body>	
<!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

    <script src = "js/script.js"></script>
</html>
