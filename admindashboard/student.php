<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

  
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Students</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    
    <table class="table">
                <thead>
                  <tr>
                  <th>Student Name</th>
                  <th>Email</th>
                  <th>Address</th>
                  <th>Phone #</th>
                  <th>Course</th>
                  <th>Gender</th>
                  <th>Monthly Income</th>
                  <th>Accept Student With Scholar</th>
                 
                  </tr>

                  <?php
          include "../conn.php";

          $student_info = mysqli_query($conn, "SELECT * FROM accepted_students");

          while($fetch_info = mysqli_fetch_array($student_info)){

        
            ?>
              <tr>
                <td><?php echo $fetch_info['a_fn']; ?></td>
                <td><?php echo $fetch_info['a_email']; ?></td>
                <td><?php echo $fetch_info['a_address']; ?></td>
                <td><?php echo $fetch_info['a_phone']; ?></td>
                <td><?php echo $fetch_info['a_course']; ?></td>
                <td><?php echo $fetch_info['a_gender']; ?></td>
                <td><?php echo $fetch_info['a_income']; ?></td>

                <td>
                  <input type="submit" name="accept_student" class="btn btn-primary" value="Accept">

                  <input type="submit" name="denied_student" class="btn btn-success" value="Denied">
                </td>
                <?php
          }
        ?>
                </thead>
              </table>  
        

         
     

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include('footer.php'); ?>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>