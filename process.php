<?php
include 'conn.php';
session_start();

//ADMIN LOGIN
if(ISSET($_POST['loginadmin'])){
   $admin_username = $_POST['admin'];
   $admin_password = $_POST['password'];

   $username_check = mysqli_query($conn, "SELECT * FROM `admin_login` WHERE user='$admin_username'");
   $username_count = mysqli_num_rows($username_check);
   
   if($username_count == 1 ){
      $row = mysqli_fetch_assoc($username_check);
      $DB_password = $row['pass'];

      if($DB_password == $admin_password){
         $DB_id = $row['admin_id'];
         $_SESSION['session_id'] = $DB_id;

         ?>
         <script>
            alert("Account Accepted!");
            window.location.href="admindashboard/index.php";
         </script>
         <?php
      }else{
         ?>
         <script>
            alert("Incorrect Password!");
            window.location.href="index.php";
         </script>
         <?php
      }
   }else{
      ?>
      <script>
         alert("Account not Accepted!");
         window.location.href="index.php";
      </script>
      <?php
   }
}// END FOR ADMIN LOGIN



// student form 
if(isset($_POST['form_submit'])){
   $process_fullName = $_POST['full_name'];
   $process_email = $_POST['email'];
   $process_address = $_POST['address'];
   $process_phone = $_POST['phone'];
   $process_income = $_POST['income'];
   $process_course = $_POST['course'];
   $process_gender = $_POST['gender'];

   
   $process_form137_name = $_FILES['form-137']['name'];
   $process_form137_size = $_FILES['form-137']['size'];
   $files_dir = "uploads/". $process_form137_name;

   if($process_form137_size < 10000000){
       if(move_uploaded_file($_FILES['form-137']['tmp_name'], $files_dir)){
           $insert_student = mysqli_query($conn, "INSERT INTO `students_form` VALUES('0','$process_fullName','$process_email','$process_address','$process_phone', ' $process_income' , '$process_course','$process_gender','$process_form137_name')");

           if($insert_student){
               ?>
               <script>
                   alert("Enrollment form Sumited Succefully, please wait for the email for update");
                   window.location.href="index.php";
               </script>
               <?php
           }else{
               echo"File Uploaded Failed" . mysqli_error($conn);
           }
       }else{
           echo"Failed to move upload file";
       }
   }else{
       echo"file too big";
   }
}

// end of student from

// start of accept student

if(isset($_POST['accept_student'])){
   $accepted_fullName = $_POST['accepted_fn'];
   $accepted_email = $_POST['accepted_email'];
   $accepted_address = $_POST['accepted_address'];
   $accepted_phone = $_POST['accepted_phone'];
   $accepted_course = $_POST['accepted_course'];
   $accepted_gender = $_POST['accepted_gender'];
   $accepted_income = $_POST['accepted_income'];

   $insert_accepted = mysqli_query($conn, "INSERT INTO `accepted_students` VALUES('0','$accepted_fullName','$accepted_email','$accepted_address','$accepted_phone','$accepted_course','$accepted_gender','$accepted_income')");

   if($insert_accepted){
      $delete_fromStudent_form = mysqli_query($conn, "DELETE FROM `students_form`");

      ?>
      <script>
         alert("Accepted");
         window.location.href="admindashboard/documents.php";
      </script>
      <?php
   }else{
      echo"Denied" . mysqli_error($conn);
   }
}
// end of accept student

?>

