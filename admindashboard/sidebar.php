<aside id="sidebar" class="sidebar" style="background-color: #28381b;">

    <ul class="sidebar-nav" id="sidebar-nav">

    <div class="profile d-flex flex-column mb-5 p-2">
      <img src="assets/img/profile-image.png" alt="Profile" class="rounded-circle m-auto">
      <h5 class="mt-3 m-auto"></h5>
</div>


      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span></a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a  class="nav-link" href="documents.php">
           <i class="bi bi-file-earmark-richtext-fill"></i>
            <span>Documents</span>
        </a>
      </li><!-- End Documents Nav -->

      <li class="nav-item">
        <a  class="nav-link" href="student.php">
           <i class="bi bi-person-fill"></i>
            <span>Students</span>
        </a>
      </li><!-- End Students Nav -->

      <li class="nav-heading">Account Settings</li>


      <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#profile-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person-circle"></i><span>Profile</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="profile-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li class="nav-item">
        <a  class="nav-link" >
            <span>My Profile</span>
        </a>
      </li>
      <li class="nav-item">
        <a  class="nav-link" >
            <span>Change Pass</span>
        </a>
      </li>
          <li class="nav-item">
            <a class="nav-link" href="../signout.php">
            <span>Sign out</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

    </ul>

  </aside><!-- End Sidebar-->