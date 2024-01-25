<!-- <span style="color:info;">Hi, <?php //echo $name; ?></span> -->

<!-- Sidebar -->
    <ul class="sidebar navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="#">
    <span center style="color:info;">
    Welcome, <?php echo $name; ?></span>
</a>
    </li>
      <li class="nav-item active">
        <a class="nav-link" href="dashboard.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
          <i class="fa fa-money"></i>
          <span>Manage Income</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          
          <a class="dropdown-item" href="add-income.php">Add Income</a>
          <a class="dropdown-item" href="view-income.php">View Income</a>
          <a class="dropdown-item" href="view-incomecategory.php">View Income Category</a>
          <a href="view-income-reports.php" class="dropdown-item">View Income Reports</a>
          
        </div>
      </li>


      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
          <i class="fa fa-money"></i>
          <span>Manage Expense</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          
          <a class="dropdown-item" href="add-expense.php">Add Expense</a>
          <a class="dropdown-item" href="view-expense.php">View Expense</a>
          <a class="dropdown-item" href="view-expensecategory.php">View Expense Category</a>
          <a href="view-expense-reports.php" class="dropdown-item">View Expense Reports</a>
      
        </div>
      </li>

     <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
          <i class="fa fa-file"></i>
          <span>Manage Reports</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="view-reports.php">View Reports</a>
        </div>
      </li> -->
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="logout.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Logout</span>
        </a>
      </li>
      <div class="legal">
                <div class="copyright">
                    &copy; <?php $year = date("Y"); echo $year; ?> <a href="javascript:void(0);">S.E.M.S</a>
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>
    </ul>
    <!-- <li>
                        <a href="../logout.php">
                            <i class="material-icons">input</i>
                            <span>LOGOUT</span>
                        </a>
                    </li>
                </ul>
            </div> -->
            <!-- #Menu -->
            <!-- Footer -->
            