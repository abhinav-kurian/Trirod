<?php
session_start();
include('admin/vendor/inc/config.php');
//include('vendor/inc/checklogin.php');
//check_login();
//$aid=$_SESSION['a_id'];
?>
<!DOCTYPE html>
<html lang="en">
<!--Head-->
<?php include("vendor/inc/head.php"); ?>

<body>

  <!-- Navigation -->
  <?php include("vendor/inc/nav.php"); ?>
  <!--End Navigation-->

  <header>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="vendor/img/CarAuto.png" class="d-block w-100" alt="...">
        </div>
        <!-- <div class="carousel-item">
          <img src="..." class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="..." class="d-block w-100" alt="...">
        </div> -->
      </div>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container ">

    <h1 class="my-4 text-center">Welcome to Trirod</h1>

    <!-- Marketing Icons Section -->
    <div class="container overflow-hidden">
      <div class="row g-5 text-center">
        <div class="col-12 ">
          <div class="col-6 mx-auto ">
            <a class="btn btn-block btn-primary text-white" href="usr/" type="button">User Login</a>
          </div>
        </div>
        <div class="col-12 mt-3">
          <div class="col-6 mx-auto ">
            <a href="admin/" class="btn btn-block btn-success text-white" type="button">Admin Login</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->
    <hr>

    <!-- /.row -->


    <hr>
    <!-- <h1 class="my-4">Client Testimonials</h1>

    <div class="row">
    <?php

    //   $ret="SELECT * FROM tms_feedback where f_status ='Published' ORDER BY RAND() LIMIT 3 "; //get all feedbacks
    //   $stmt= $mysqli->prepare($ret) ;
    //   $stmt->execute() ;//ok
    //   $res=$stmt->get_result();
    //   $cnt=1;
    //   while($row=$res->fetch_object())
    // {
    ?>
      <div class="col-lg-6 mb-4">
        <div class="card h-100">
          <h4 class="card-header"><?php //echo $row->f_uname;
                                  ?></h4>
          <div class="card-body">
            <p class="card-text"><?php //echo $row->f_content;
                                  ?></p>
          </div>
          </div>
      </div>
    <?php //}
    ?>
    </div> -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <?php include("vendor/inc/footer.php"); ?>
  <!--.Footer-->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>