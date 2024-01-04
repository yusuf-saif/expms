<?php
session_start();
include('../connection.php');
$name = $_SESSION['name'];
$id = $_SESSION['id'];
if (empty($id)) {
  header("Location: index.php");
}
if (isset($_REQUEST['sb  `2654321c
-0/;t-usr'])) {

  $user_name = $_POST['user_name'];
  $emailid = $_POST['emailid'];
  $pwd = md5($_POST['pwd']);
  $role = $_POST['role'];
  $status = $_POST['status'];

  $insert_user = mysqli_query($conn, "insert into tbl_users set 
   first_name='$first_name', last_name='$last_name', 
   user_name='$user_name', emailid='$emailid', password='$pwd', 
   lrole='$role', status='$status'");

  if ($insert_user > 0) {
?>
    <script type="text/javascript">
      alert("User added successfully.")
    </script>
<?php
  }
}
?>
<?php include('include/header.php'); ?>
<div id="wrapper">
  <?php include('include/side-bar.php'); ?>

  <div id="content-wrapper">

    <div class="container-fluid">

      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Add User</a>
        </li>
        <li class="breadcrumb-item">
          <a href="#">User Report</a>
        </li>

      </ol>

      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-info-circle"></i>
          Submit Details
        </div>

        <form method="post" class="form-valide">
          <div class="card-body">
            <div class="form-group row">
              <label class="col-lg-4 col-form-label" for="remarks">First Name <span class="text-danger">*</span></label>
              <div class="col-lg-6">
                <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Enter User Name" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-4 col-form-label" for="remarks">Last Name <span class="text-danger">*</span></label>
              <div class="col-lg-6">
                <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Enter User Name" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-4 col-form-label" for="remarks">User Name <span class="text-danger">*</span></label>
              <div class="col-lg-6">
                <input type="text" name="user_name" id="user_name" class="form-control" placeholder="Enter User Name" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-4 col-form-label" for="remarks">EmailId <span class="text-danger">*</span></label>
              <div class="col-lg-6">
                <input type="email" name="emailid" id="emailid" class="form-control" placeholder="Enter EmailId" required>
              </div>
    www        </div>
            <div class="form-group row">
              <label class="col-lg-4 col-form-label" for="remarks">Password <span class="text-danger">*</span></label>
              <div class="input-group col-lg-6">
                <input type="password" name="pwd" id="pwd" class="form-control" placeholder="Enter Password" aria-describedby="passworrd" required>
                <div class="input-group--append">
                  <button class="btn btn-outline-secondary" type="button" id="passwordToggle">Show</button>
                </div>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-lg-4 col-form-label" for="status">Role <span class="text-danger">*</span>
              </label>
              <div class="col-lg-6">
                <select class="form-control" id="role" name="role" required>
                  <option value="">Select Role</option>
                  <option value="1">Admin</option>
                  <option value="2">User</option>

                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-4 col-form-label" for="status">Status <span class="text-danger">*</span>
              </label>
              <div class="col-lg-6">
                <select class="form-control" id="status" name="status" required>
                  <option value="">Select Status</option>
                  <option value="1">Active</option>
                  <option value="0">Inactive</option>

                </select>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-lg-8 ml-auto">
                <button type="submit" name="sbt-usr" class="btn btn-primary">Submit</button>
              </div>
            </div>

          </div>
        </form>
      </div>

    </div>

  </div>

  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function () {
        $('#passwordToggle').on('click', function () {
            const passwordInput = $('#pwd');
            
            if (passwordInput.attr('type') === 'pwd') {
                passwordInput.attr('type', 'text');
            } else {
                passwordInput.attr('type', 'pwd');
            }
        });
    });
</script>

  <?php include('include/footer.php'); ?>