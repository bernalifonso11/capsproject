<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>



  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Documents</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Documents</li>
          
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="card">
    <table class="table">
      <tr>
        <th>Student Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Phone #</th>
        <th>Course</th>
        <th>Gender</th>
        <th>Monthly Income</th>
        <th>Form 137</th>
        <th>Accept Enrollee</th>
      </tr>
        <?php
          include "../conn.php";

          $student_info = mysqli_query($conn, "SELECT * FROM students_form");

          while($fetch_info = mysqli_fetch_array($student_info)){

        
            ?>
              <tr>
                <td><?php echo $fetch_info['full_name']; ?></td>
                <td><?php echo $fetch_info['email']; ?></td>
                <td><?php echo $fetch_info['address']; ?></td>
                <td><?php echo $fetch_info['phone']; ?></td>
                <td><?php echo $fetch_info['course']; ?></td>
                <td><?php echo $fetch_info['gender']; ?></td>
                <td><?php echo $fetch_info['income']; ?></td>
              <td><a href="#" data-bs-toggle="modal" data-bs-target="#viewImage">View</a></td>

              <td>
                <form action="../process.php" method="POST">
                  <input type="hidden" name="accepted_fn" value="<?php echo $fetch_info['full_name']; ?>">
                  <input type="hidden" name="accepted_email" value="<?php echo $fetch_info['email']; ?>">
                  <input type="hidden" name="accepted_address" value="<?php echo $fetch_info['address']; ?>">
                  <input type="hidden" name="accepted_phone" value="<?php echo $fetch_info['phone']; ?>">
                  <input type="hidden" name="accepted_course" value="<?php echo $fetch_info['course']; ?>">
                  <input type="hidden" name="accepted_gender" value="<?php echo $fetch_info['gender']; ?>">
                  <input type="hidden" name="accepted_income" value="<?php echo $fetch_info['income']; ?>">

                  <input type="submit" name="accept_student" class="btn btn-primary" value="Accept">

                  <input type="submit" name="denied_student" class="btn btn-success" value="Denied">
                </form>
              </td>

              </tr>


              <div class="modal fade" id="viewImage" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <img src="../uploads/<?php echo $fetch_info['form137']; ?> " style="max-width:100%;">
          
       
  
    </div>
  </div>
</div>
            <?php
          }
        ?>
    </table>
    </div>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include('footer.php'); ?>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>