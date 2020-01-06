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
            <div class="col-md-6 col-md-offset-3">
                <div class="login-panel panel panel-default" style="margin-top: 5%">
                    <div class="panel-heading">
                        <div class="text-center">
                            <h3>Applicant Sign Up</h3>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form role="form" action = "#" method = "POST" enctype = "multipart/form-data" id = "register" name= "register">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="First Name" id = "userFirstname" name="userFirstname" type="text" autofocus required="required">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Last Name" id="userLastname" name="userLastname" type="text" required="required">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Email" id="userEmail" name="userEmail" type="email" required="required">
                                </div>
                                <!-- <div class="form-group">
                                    <select class="form-control" id="userCounty" name="userCounty">
                                        <option value="">---Select County---</option>
                                        <option value="Kwale">Kwale</option>
                                        <option value="Mombasa">Mombasa</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" id="userConst" name="userConst">
                                        <option value="">---Select Constituency---</option>
                                        <option value="Msambweni">Msambweni</option>
                                        <option value="Chuda">Nyali</option>
                                    </select>
                                </div> -->
                                 <div class="form-group">
                                    <input class="form-control" placeholder="Phone Number" id="userPhone" name="userPhone" type="number" onKeyDown="if(this.value.length == 10) return false;" required="required">
                                </div>
                                 <div class="form-group">
                                    <input class="form-control" placeholder="Date of birth" id="userbod" name="userbod" type="date" required="required">
                                </div>
                                <div class="form-group">
                                    <select class="form-control" id="userGender" name="userGender" required="required">
                                        <option value="">---Select Gender---</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" id="userEduLevel" name="userEduLevel" required="required">
                                        <option value="">---Academic Level---</option>
                                        <option value="Primary">Primary</option>
                                        <option value="Secondary">Secondary</option>
                                        <option value="Undergraduate">Undergraduate</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <input class="form-control" placeholder="Name of your school" id="userSchool" name="userSchool" type="text" required="required">
                                </div>

                                <div class="form-group">
                                    <select class="form-control" id="userCounty" name="userCounty" required="required">
                                        <option value="">---Select County---</option>
                                        <option value="Mombasa">Mombasa</option>
                                        <option value="Kwale">Kwale</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" id="userConst" name="userConst" required="required">
                                        <option value="">---Select Constituency---</option>
                                        <option value="Nyali"  id="nya">Nyali</option>
                                        <option value="Likoni"  id="liko">Likoni</option>
                                        <option value="Msambweni" id="msambwe">Msambweni</option>
                                        <option value="Kinango" id="kina">Kinango</option>
                                    </select>
                                </div>
                               
                                <!-- <div class="form-group">
                                    <select class="form-control" id="userParentStatus" name="userParentStatus">
                                        <option value="">---Select Parent Status---</option>
                                        <option value="Both">Both parents</option>
                                        <option value="Single">Single Parent</option>
                                        <option value="Orphan">Orphan</option>
                                    </select>
                                </div> -->
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" id="userPass" name="userPass" type="Password" pattern=".{8,}" required title="8 characters minimum">
                                </div>
                                 <div class="form-group">
                                    <input class="form-control" placeholder="Confirm Password" id="userCoPass" name="userCoPass" type="Password" >
                                </div>
                                 <div id = "loading"></div>
                                <button type="submit" class = "form-control btn btn-success" id = "regbtn" style="border-radius:0px">
                                    <!-- <i id="spinner" class="fa fa-spinner fa-spin" style="display:none"></i> --> 
                                Sign Up Now</button>
                            </fieldset>
                        </form>

                        <hr>
                        <div class="text-center">
                            <div>Already Registered ? <a href="login.php">Login</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- <script src = "js/script.js"></script> -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <script>
        $error = $('<center><label class = "text-danger">Please fill up the required field!</label></center>');
        $error1 = $('<center><label class = "text-danger">Password do not match!</label></center>');
        $error2 = $('<center><label class = "text-danger">Email Already Registered!</label></center>');
        $('#register').submit(function(e) {

        var value = document.getElementById('userPhone').value;
         if (value.length < 10) {
           alert('10 characters required in the phone input field!');
           document.getElementById('userPhone').focus();
           return false; // keep form from submitting
         }

        $loading = $('<center><img src = "images/loading.gif" height = "10px"/></center>');
        $error.remove();
        $error1.remove();
        $error2.remove();
        var formData = new FormData($(this)[0]);
        $.ajax({
        url: "add_applicant.php",
        type: "POST",
        data: formData,
        beforeSend: function(){
          $loading.appendTo('#loading');
          $("#regbtn").attr("disabled", 'disabled');
         },
         complete: function(){
         // $loading.remove();
         $("#regbtn").prop("disabled", false);
         },
        success: function (data) {
            if(data == "Success"){
              // alert("Successfully Registered!");
              window.location.href = 'login.php';
            }
            else if(data == "notmatch"){
              // alert("Password do not match!");
              document.getElementById("userPass").value = "";
              document.getElementById("userPass").focus();
              document.getElementById("userCoPass").value = "";
              $loading.remove();
              $error1.appendTo('#loading');
            }
            else if(data == "Exist"){
              // alert("Email Already Registered!");
              $loading.remove();
              $error2.appendTo('#loading');
            }
            else{
              alert(data);
            }
        },
        cache: false,
        contentType: false,
        processData: false
        });
        e.preventDefault();
        });

    $('#userCounty').on('change', function() {
      $cVal = this.value;
      
      if($cVal == "Mombasa"){
        $("#msambwe").css("display", 'none');
        $("#kina").css("display", 'none');
        $("#nya").css("display", 'block');
        $("#liko").css("display", 'block');
      }else if($cVal == "Kwale"){
        $("#nya").css("display", 'none');
        $("#liko").css("display", 'none');
         $("#msambwe").css("display", 'block');
         $("#kina").css("display", 'block');
      }else{
         $("#nya").css("display", 'block');
         $("#liko").css("display", 'block');
         $("#msambwe").css("display", 'block');
         $("#kina").css("display", 'block');
      }
      // if($eduVal == 'Primary' || $eduVal == 'Secondary' ||  $eduVal == 'Undergraduate'){
      //   $('#prisec').show();
      //   $('#uni').hide();
      // }else if($eduVal == 'Undergraduate'){
      //   $('#uni').show();
      //   $('#prisec').hide();
      // }else{
      //   $('#uni').hide();
      //   $('#prisec').hide();
      // }
    });
    </script>
</body>
</html>
