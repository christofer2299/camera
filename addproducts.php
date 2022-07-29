<?php

include("includes/login_auth.php");
include("includes/conn.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Camera Rental </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  <link rel="stylesheet" href="C:/Users/Admin/Desktop/template/css/style.css">


</head>
<body>
  <div class="container-scroller">
    <!--<div class="row p-0 m-0 proBanner" id="proBanner">
      <div class="col-md-12 p-0 m-0">
        <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
          <div class="ps-lg-1">
            <div class="d-flex align-items-center justify-content-between">
              <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
              <a href="https://www.bootstrapdash.com/product/star-admin-pro/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
            </div>
          </div>
          <div class="d-flex align-items-center justify-content-between">
            <a href="https://www.bootstrapdash.com/product/star-admin-pro/"><i class="mdi mdi-home me-3 text-white"></i></a>
            <button id="bannerClose" class="btn border-0 p-0">
              <i class="mdi mdi-close text-white me-0"></i>
            </button>
          </div>
        </div>
      </div>
    </div>-->
    <!-- partial:partials/_navbar.html -->
    <?php include("header.php"); ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">

      <?php include("nav.php"); ?>

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Products</h4>
                  <p class="card-description">
                    Add Product
                  </p>
                  <form class="forms-sample row" method="post" enctype="multipart/form-data" action="addcustomer-back.php">
                    <div class="form-group col-lg-6">
                      <label for="exampleInputName1">Product Name</label>
                      <input type="text" class="form-control" id="exampleInputName1" name="Productname" placeholder="Product Name">
                    </div>                    
                    <div class="form-group col-lg-6">
                      <label for="exampleInputEmail3">Quantity</label>
                      <input type="number" class="form-control" id="exampleInputEmail3" name="quantity" placeholder="Quantity">
                    </div>
                    <div class="form-group col-lg-6">
                      <label for="exampleInputEmail3">Models</label>
                      <input type="text" class="form-control" id="exampleInputEmail3" name="model" placeholder="Model Name">
                    </div>
                    <div class="form-group col-lg-6">
                      <label for="exampleTextarea1">Rent</label>
                      <input type="text" class="form-control" id="exampleInputEmail3" name="rent" placeholder="Rent">
                      <!-- <textarea class="form-control" id="exampleTextarea1" name="address" rows="4"></textarea> -->
                    </div>
                    <div class="form-group col-lg-6">
                      <label for="">Product Image</label>
                      <input type="file" name="pro_img" class="file" style="visibility:hidden">
                      <div class="input-group mb-3">
                        <input type="text" class="form-control" disabled placeholder="Upload Product Image" aria-label="Upload File" aria-describedby="basic-addon1" required>
                        <div class="input-group-append">
                          <button class="browse input-group-text btn btn-primary" id="basic-addon2"><i class="fas fa-search"></i>Browse</button>
                        </div>
                      </div>
                    </div>

                    <!-- <div class="form-group col-lg-6"> -->
                      <!-- <label for="">Other Proof</label> -->
                      <!-- <input type="file" name="other_img" class="file" style="visibility:hidden"> -->
                      <!-- <div class="input-group mb-3"> -->
                        <!-- <input type="text" class="form-control" disabled placeholder="Upload File" aria-label="Upload File" aria-describedby="basic-addon1" required> -->
                        <!-- <div class="input-group-append"> -->
                          <!-- <button class="browse input-group-text btn btn-primary" id="basic-addon2"><i class="fas fa-search"></i>Browse</button> -->
                        <!-- </div> -->
                      <!-- </div> -->
                    <!-- </div> -->

                    <div class="form-group ">
                      <button href="customerdetails.html" type="submit" class="btn btn-primary me-2" style="float:right">Submit</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- Add New Customers -->

            <!--Add New Customer Section - End -->
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/jquery.cookie.js" type="text/javascript"></script>
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
  <script src="js/file-upload.js" charset="utf-8"></script>
</body>

</html>
