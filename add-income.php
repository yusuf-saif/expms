<?php
session_start();
include ('connection.php');
$name = $_SESSION['user_name'];
$id = $_SESSION['id'];
if(empty($id))
{
    header("Location: index.php"); 
}
if(isset($_REQUEST['sbt-exps-btn']))
{
   
	$category_name = $_POST['category_name'];
    $income_date = $_POST['income_date'];
    $item_name = $_POST['item_name'];
    $item_price = $_POST['item_price'];
    $remark = $_POST['remarks'];
    if(!empty($income_date))
    {
       $income_date = date('Y-m-d', strtotime($_POST['income_date']));
    }
    else 
    {
       $income_date = NULL;
    }    
    
    $insert_income = mysqli_query($conn,"INSERT INTO tbl_income SET user_id='$id', category='$category_name', income_date='$income_date', item_name='$item_name', item_price='$item_price', remark='$remark'");

    if($insert_income > 0)
    {
        ?>
<script type="text/javascript">
    alert("Income added successfully.")
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
            <a href="#">Add Income</a>
          </li>
          
        </ol>

  <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-info-circle"></i>
            Submit Your Details</div>
             
            <form method="post" class="form-valide">
          <div class="card-body">
                                       
                                      <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="leave-type">Category <span class="text-danger">*</span>
                                            </label>
                                <div class="col-lg-6">
                                    <select class="form-control" id="category_name" name="category_name" required>
                                        <option value="">Select Category</option>
                                        <?php 
                                         $fetch_category = mysqli_query($conn, "SELECT * FROM tbl_incomecategory WHERE STATUS=1");
                                         WHILE($row = mysqli_fetch_array($fetch_category)){
                                        ?>
                                        <option><?php echo $row['incomecategory_name']; ?></option>
                                    <?php } ?>
                                     </select>
                                </div>
                                  </div>    
                                      
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="leave-date">Date <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="date" class="form-control" id="income_date" name="income_date" placeholder="Select Income Date" required>
                                            </div>
                                        </div>
                                       <div class="form-group row">
                                      <label class="col-lg-4 col-form-label" for="item">Item <span class="text-danger">*</span></label>
                                       <div class="col-lg-6">
                                      <input type="text" name="item_name" id="item_name" class="form-control" placeholder="Enter Item Name" required>
                                       </div>
                                  </div>
                                   <div class="form-group row">
                                      <label class="col-lg-4 col-form-label" for="price">Price <span class="text-danger">*</span></label>
                                       <div class="col-lg-6">
                                      <input type="text" name="item_price" id="item_price" class="form-control" placeholder="Enter Price" required>
                                       </div>
                                  </div>                                         
                                  <div class="form-group row">
                                      <label class="col-lg-4 col-form-label" for="remarks">Remarks <span class="text-danger">*</span></label>
                                       <div class="col-lg-6">
                                      <textarea rows="3" name="remarks" id="remarks" class="form-control" placeholder="Enter a Remarks.." ></textarea>
                                       </div>
                                  </div>
                           
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" name="sbt-exps-btn" class="btn btn-primary">Submit</button>
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