<?php
include('connection.php');
session_start();
@include('session.php');

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Profile</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <?php 
    include('login_navbar.php'); ?>
      <div id="content-wrapper">

        <div class="container-fluid">

           <!-- Breadcrumbs-->
          <ol class='breadcrumb'>
            <li class='breadcrumb-item'>
              <a href='welcome.php'>Dashboard</a>
            </li>
            <li class='breadcrumb-item active'>Report Incident</li>
          </ol>




        <div class="card card-signin my-5">
          <div class="card-body">



          


            <h5 class="card-title text-center" style="color: black;">Report Incident</h5>
          





    

        

<?php 



if(count($_POST)>0){
      $email=$_SESSION['email'];
     
      $category=$_POST['category'];
      $description=$_POST['description'];
      $tag=$_POST['tag'];
      $explanation=$_POST['explanation'];
      $action_to_be_taken=$_POST['action_to_be_taken'];
      $date=$_POST['date'];
      $point_of_contact=$_POST['point_of_contact'];
      $state='open';
      



      $query="INSERT INTO `incident`(`email`,`category`, `description`, `explanation`, `action_to_be_taken`,`date_of_incident`,`state`, `point_of_contact`, `tags`) VALUES ('$email','$category','$description','$explanation','$action_to_be_taken','$date','$state','$point_of_contact','$tag')";


      $runner=mysqli_query($con,$query);



      if($runner ){
      
        echo "<a href='login.php'><div class='text-center btn btn-block btn-success'>Incident Generated click here to view all incidents</div></a>";

            }
      else{
       echo "<div class='text-center btn btn-block btn-danger'>Error while generating the incident</div>";

      }





    }



 ?>






          </div>
        </div>
    </div>
  </div>
      </div>
    </header>







        </div>
        <!-- /.container-fluid -->

   <?php include('footer_login.php'); ?>
    

      </div>
      <!-- /.content-wrapper -->

    

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

  </body>

</html>
