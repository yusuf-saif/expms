<?php
session_start();
include ('../connection.php');
$name = $_SESSION['name'];
$id = $_SESSION['id'];
if(empty($id))
{
    header("Location: index.php"); 
}
$id = $_GET['id'];
$fetch_query = mysqli_query($conn, "select * from tbl_expensecategory where id='$id'");
$row = mysqli_fetch_array($fetch_query);
if(isset($_REQUEST['sv-expcat']))
{
   
	$expensecategory_name = $_POST['expensecategory_name'];
  $status = $_POST['status'];

  $update_expensecategory = 
  mysqli_query($conn,"update tbl_expensecategory 
  SET expensecategory_name='$expensecategory_name', 
  status='$status' where id='$id'");

    if($update_expensecategory > 0)
    {
        ?>
<script type="text/javascript">
    alert("Expense Category Updated successfully.")
    window.location.href='view-expensecategory.php';
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
            <a href="#">Edit Expense Category</a>
          </li>
          <li class="breadcrumb-item">
            <a href="#">View Expense Category</a>
          </li>

        </ol>

  <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-info-circle"></i>
            Edit Expense Category Details</div>
             
            <form method="post" class="form-validate">
          <div class="card-body">
                                      
                                  <div class="form-group row">
                                      <label class="col-lg-4 col-form-label" for="remarks">Expense Category Name <span class="text-danger">*</span></label>
                                       <div class="col-lg-6">
                                      <input type="text" name="expensecategory_name" id="expensecategory_name" class="form-control" placeholder="Enter Category Name" value="<?php echo $row['category_name']; ?>" required>
                                       </div>
                                  </div>
                                  
                                  
                                      <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="status">Status <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="status" name="status" required>
                                                    <option value="">Select Status</option>
                                                   <option value="1" <?php if($row['status'] == 1) { ?> selected="selected"; <?php } ?>>Active</option>
                                                   <option value="0" <?php if($row['status'] == 0) { ?> selected="selected"; <?php } ?>>Inactive</option>
                                                          
                                                </select>
                                            </div>
                                        </div>
                                      
                           
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" name="sv-expcat" class="btn btn-primary">Update Expense Category</button>
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
 
 <?php include('include/footer.php'); ?>