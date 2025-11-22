
<?php include_once("../includes/db_config.php") ?>
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Validation Form</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo $project_url ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $project_url ?>/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
<?php include_once("../includes/top_bar.php") ?>
<?php include_once("../includes/side_bar.php") ?>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Student Edit</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Validation</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- ONE Student Record -->

    <?php
   $id = $_REQUEST['stid'];
   $sql ="SELECT * FROM students WHERE employeeID ='$id'";
   $rawdata = $db->query($sql);
   $row = $rawdata ->fetch_array();
   



    ?>

    <!-- Main content -->

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
             <?php 
              
              if(isset($_REQUEST['update'])){
                extract($_REQUEST);
                $sql = "UPDATE students SET first_name ='$fname',last_name = '$lname', birthdate='$bdate' WHERE employeeID ='$id'";
                $db->query($sql);
                if ($db->affected_rows){

                    session_start();
                    $_SESSION['msg'] = "successfully Update";
                    header("Location:index.php");

                //   echo '<div class="alert alert-success"> Successfully Updated </div>';
                }
              }
              
              
              
              ?>
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add New Student</h3>
              



              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" action="" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">First Name</label>
                    <input type="text" name="fname" value="<?php echo $row['first_name'] ;?>" class="form-control" id="exampleInputEmail1" placeholder="Enter First Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Last Name</label>
                    <input type="text" name="lname" value="<?php echo $row['last_name'] ;?>" class="form-control" id="exampleInputEmail1" placeholder="Enter Last Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Birth Date</label>
                    <input type="date" name="bdate" class="form-control" value="<?php echo $row['birthdate'] ;?>" id="exampleInputEmail1" placeholder="Enter birthdate">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Notes</label>
                    <textarea name="notes" class="form-control" rows="4"></textarea>
                  </div>
                 
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary"  name="update">UPDATE</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo $project_url ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo $project_url ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="<?php echo $project_url ?>/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?php echo $project_url ?>/plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $project_url ?>/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo $project_url ?>/dist/js/demo.js"></script>
<!-- Page specific script -->
<!-- <script>
$(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      alert( "Form successful submitted!" );
    }
  });
  $('#quickForm').validate({
    rules: {
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 5
      },
      terms: {
        required: true
      },
    },
    messages: {
      email: {
        required: "Please enter a email address",
        email: "Please enter a valid email address"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      terms: "Please accept our terms"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
}); -->
</script>
</body>
</html>
