<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>BMSYSTEM</title>
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body style="background: #e9eaed">

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;background: #fff">
            <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span celass="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="font-weight:bold;padding: 0"><img src="images/logo.png"></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li><a href="login.php">LOGIN</a></li>
                <li>|</li>
                <li><a href="signup.php"><button style="background: #006600;color: #fff;border:0;padding: 10px 15px">REGISTER</button></a></li>
            </ul>
        </div>
        </nav>
    </div> 

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default" style="margin-top: 5%">
                    <div class="panel-heading">
                        <div class="text-center">
                            <h3>Applicant Login</h3>
                        </div>
                        
                    </div>
                    <div class="panel-body">
                        <form role="form" action="#" method = "POST" enctype = "multipart/form-data" id = "login" name= "login">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Email" id = "email" name="email" type="email" required="required">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" id="password" name="password" type="password" value="" pattern=".{8,}" required title="8 characters minimum">
                                </div>
                                <div id = "loading"></div>
                                <button type = "submit" class = "form-control btn btn-success" id = "lgbtn" style="border-radius:0px"><span class = "glyphicon glyphicon-log-in"></span> Login</button>
                            </fieldset>
                        </form>

                        <br>
                        <div class="text-center">
                            <div>Not Registered ? <a href="signup.php">Sign Up Now</a></div>
                            <hr>
                            <a href="#">Forgot Password</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
   <!--  <script src = "js/script.js"></script> -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/metisMenu/metisMenu.min.js"></script>
    <script src="dist/js/sb-admin-2.js"></script>

     <script>
        $error3 = $('<center><label class = "text-danger">Invalid username or password!</label></center>');
        $error4 = $('<center><label class = "text-danger">User Not Found!</label></center>');

        $('#login').submit(function(e) {
        $loading = $('<center><img src = "images/loading.gif" height = "10px"/></center>');
        $error3.remove();
        $error4.remove();
        var formData = new FormData($(this)[0]);
        $.ajax({
        url: "check_applicant.php",
        type: "POST",
        data: formData,
        beforeSend: function(){
          $loading.appendTo('#loading');
          $("#lgbtn").attr("disabled", 'disabled');
         },
         complete: function(){
         // $loading.remove();
         $("#lgbtn").prop("disabled", false);
         },
        success: function (data) {
            if(data == "Student"){
              window.location.href = 'applicant/';
            }else if(data == "Admin"){
              window.location.href = 'home.php';
            }else{
              $loading.remove();
              $error3.appendTo('#loading');
            }
        },
        cache: false,
        contentType: false,
        processData: false
        });
        e.preventDefault();
        });
    </script>
</body>
</html>
