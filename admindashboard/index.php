
<?php include ('header.php'); ?>
<?php include ('sidebar.php'); ?>

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

  <!-- start of pending req -->
<div class="container-fluid">
  <div class="row">

  <div class="col-md-6 col-lg-4">
    <div class="card rounded" style="height:200px;">
      <div class="card-body p-2">
        <h5>Pending Request</h5>
        <?php
         $getdata = mysqli_query($conn, "SELECT * FROM students_form");
         $num = mysqli_num_rows($getdata);
         ?> 
        <a href="documents.php">
          <div class="d-flex align-items-center justify-content-center" style="height:150px; color: red;">
          <p class="fs-2"><?php echo $num; ?> </p>
            </div>
        </a>
         <?php

?>
         
                  
</div>
</div>
</div>



</div>
</div>

<!-- End of pending req -->

<!-- start of accepted student -->


<div class="container-fluid">
  <div class="row">

  <div class="col-md-6 col-lg-4">
    <div class="card rounded" style="height:200px;">
      <div class="card-body p-2">
        <h5>Accepted Student</h5>
        <?php
         $getdata = mysqli_query($conn, "SELECT * FROM accepted_students");
         $num = mysqli_num_rows($getdata);
         ?> 
        <a href="student.php">
          <div class="d-flex align-items-center justify-content-center" style="height:150px; color: green;">
          <p class="fs-2"><?php echo $num; ?> </p>
            </div>
        </a>
         <?php

?>


                  
</div>
</div>
</div>



</div>
</div>


<!-- End accpepted students -->
    
</div>
  </main><!-- End #main -->
  
  <?php include('footer.php'); ?><!--FOOTER-->
 

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>


  

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html> 