<?php
session_start();
include '../connection.php';
$name = $_SESSION['name'];
$id = $_SESSION['id'];
if(empty($id))
{
    header("Location: index.php"); 
}

 $select_user = mysqli_query($conn,"select count(*) from tbl_users where role=2");
 $total_user = mysqli_fetch_row($select_user);

 $select_incomecategory = mysqli_query($conn,"select count(*) from tbl_incomecategory where status=1");
 $total_incomecategory = mysqli_fetch_row($select_incomecategory);

 $select_expensecategory = mysqli_query($conn, "SELECT COUNT(*) FROM tbl_expensecategory WHERE STATUS=1");
 $total_expensecategory = mysqli_fetch_row($select_expensecategory);

?>
<?php include('include/header.php'); ?>

  <div id="wrapper">

    <?php include('include/side-bar.php'); ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          
        </ol>
<div class="row">
  <div class="ms-4 col-sm">
    <section class="panel panel-featured-left panel-featured-primary">
      <div class="panel-body">
        <div class="widget-summary">
          <div class="widget-summary-col widget-summary-col-icon">
            <div class="summary-icon bg-secondary">
              <i class="fa fa-user"></i>
            </div>
          </div>
          <div class="widget-summary-col">
            <div class="summary">
              <h4 class="title">Total Users</h4>
              <div class="info">
                <strong class="amount"><?php echo $total_user[0]; ?></strong><br>
                 
              </div>
            </div>
            <div class="summary-footer">
              <a class="text-muted text-uppercase"></a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <div class="col-sm-auto">
    <section class="panel panel-featured-left panel-featured-primary">
      <div class="panel-body">
        <div class="widget-summary">
          <div class="widget-summary-col widget-summary-col-icon">
            <div class="summary-icon bg-secondary">
              <i class="fa fa-inbox"></i>
            </div>
          </div>
          <div class="widget-summary-col">
            <div class="summary">
              <h4 class="title">Total Income Category</h4>
              <div class="info">
                <strong class="amount"><?php echo $total_incomecategory[0]; ?></strong><br>
              </div>
            </div>
           
            <div class="summary-footer">
              <a class="text-muted text-uppercase"></a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <div class="col-sm-auto">
    <section class="panel panel-featured-left panel-featured-primary">
      <div class="panel-body">
        <div class="widget-summary">
          <div class="widget-summary-col widget-summary-col-icon">
            <div class="summary-icon bg-secondary">
              <i class="fa fa-inbox"></i>
            </div>
          </div>
          <div class="widget-summary-col">
            <div class="summary">
              <h4 class="title">Total Expense Category</h4>
              <div class="info">
                <strong class="amount"><?php echo $total_expensecategory[0]; ?></strong><br>
              </div>
            </div>
           
            <div class="summary-footer">
              <a class="text-muted text-uppercase"></a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
</div>
</div>
  </div>
  
  
  <?php include('include/footer.php'); ?>
