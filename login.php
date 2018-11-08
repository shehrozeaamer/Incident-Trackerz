<?php 
include("connection.php");


session_start();


if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 

  $myemail = mysqli_real_escape_string($con,$_POST['username']);
  $mypass = mysqli_real_escape_string($con,$_POST['password']); 
  $mypassword=md5($mypass);

  $query="SELECT Name,Type FROM accounts where email='$myemail' AND password='$mypassword'";
  $result = mysqli_query($con,$query);
  $row = mysqli_fetch_array($result);

  $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

  if($count == 1) {




    $_SESSION['email'] = $myusername;
    $_SESSION['user_type'] = $row['type'];
    $type=$row['Type'];
    $_SESSION['Name']=$row['Name'];


    $runner=mysqli_query($con,$query);


    if($runner){
      
    }
    else{
      


    }

    header("location: welcome.php");
  }else {
    $error = "Your Login Name or Password is invalid";
  }
}


?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Incident Tracker</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img class="img-fluid" style="width: 15%;height: 15%;" src="adelphi.png">Incident Tracker</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <div class="dropdown">
  <button class="btn btn-danger nav-link js-scroll-trigger dropdown-toggle" style=" border: 0px; " id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Incident Tracker
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Report an Incident</a>
    <a class="dropdown-item" href="#">Not Registered? Sign up now</a>
    <a class="dropdown-item" href="#"></a>
  </div>
</div>
            </li>
           
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#team">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">
              	

<!-- Button to Open the Modal -->
<div  data-toggle="modal" data-target="#myModal">
  Contact Us
</div>


              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <br>
        <br>
        <br>
        <br>
        <br>
      
         <div class="container">
    <div class="row">

      <div class="col-sm-9 col-md-12 col-lg-5 mx-auto">

        <div class="card card-signin my-5">
          <div class="card-body">

            <h5 class="card-title text-center" style="color: black;">Sign In</h5>
            <form class="form-signin">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                <label for="inputEmail">Email address</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1" style="color: gray;">Remember password</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
              <hr  class="my-4">
              <button class="btn btn-lg btn-danger btn-block text-uppercase" > Forgot Password? Click here</button>
              <button class="btn btn-lg btn-info btn-block text-uppercase" > Not Registered? Click here</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
      </div>
    </header>






<!-- The Modal -->
<div class="modal" id="myModal" >
  <div class="modal-dialog modal-lg">
    <div class="modal-content" >

      <!-- Modal Header <-->
      	<hr>
      </-->
      <div class="text-center">
        <h4 class="modal-title ">Contact Us Form</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       

        <form id="contact-form" method="post" action="contact.php" role="form">

    <div class="messages"></div>

    <div class="controls">

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_name">Firstname *</label>
                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_lastname">Lastname *</label>
                    <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_email">Email *</label>
                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_need">Please specify your need *</label>
                    <select id="form_need" name="need" class="form-control" required="required" data-error="Please specify your need.">
                        <option value=""></option>
                        <option value="Request quotation">Request quotation</option>
                        <option value="Request incident">Request incident</option>
                       
                        <option value="Other">Other</option>
                    </select>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_message">Message *</label>
                    <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12">
                <input type="submit" class="btn btn-block btn-success btn-send" value="Send message">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-muted">
                    <strong>*</strong> These fields are required.</p>
            </div>
        </div>
    </div>

</form>
    


      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>


    <!-- Footer -->
    <footer style="background: grey;">
      <div class="container">
        <div class="row">
          <div class="col-md-12" >
            <span class="copyright">Copyright &copy; Incident Tracker</span>
          </div>
        
        
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

  </body>

</html>