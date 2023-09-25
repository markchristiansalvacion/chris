<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email']) && isset($_SESSION['firstname'])) {

 ?>
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>ArrowgoLogistics HRIS</title>
</head>

<body>

    <div class="container">
        <!-- Sidebar Section -->
        <aside>
            <div class="toggle">
                <div class="logo">
                    <img src="images/agli.png">
                    <h3>Arrowgo-Logistics.Inc</h3>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">
                        close
                    </span>
                </div>
            </div>

            <div class="sidebar">
                <a href="dashboard.php">
                    <span class="material-icons-sharp">
                        dashboard
                    </span>
                    <h3>Dashboard</h3>
                </a>
                <a href="employee.php">
                    <span class="material-icons-sharp">
                        person_outline
                    </span>
                    <h3>Employees</h3>
                </a>
                <a href="payroll.php"   class="active">
                    <span class="material-icons-sharp">
                        receipt_long
                    </span>
                    <h3>Payroll</h3>
                </a>
                <a href="timelogs.php">
                    <span class="material-icons-sharp">
                        access_time
                    </span>
                    <h3>Time Logs</h3>
                    <!-- <span class="message-count">27</span> -->
                </a>
                <a href="leaverecords.php">
                    <span class="material-icons-sharp">
                        inventory
                    </span>
                    <h3>Leave Records</h3>
                </a>
                <a href="nte.php">
                    <span class="material-icons-sharp">
                        report_gmailerrorred
                    </span>
                    <h3>NTE</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        settings
                    </span>
                    <h3>Settings</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        add
                    </span>
                    <h3>New Login</h3>
                </a>
                <a href="logout.php">
                    <span class="material-icons-sharp">
                        logout
                    </span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
        <!-- End of Sidebar Section -->

        <!-- Main Content -->
        <main>
            <h1>Employee Management</h1>
            <!-- Employee List Section -->
            <div class="new-users">
                <h2>Employee List</h2>
                <div class="user-list">
                    <table class="tblist">
                    <tr>
                        <th>Employee ID</th>
                        <th>Employee Name</th>
                        <th>Designation</th>
                        <th>Date Hired</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td>John News</td>
                        <td>AGLI-00018</td>
                        <td>IT Department</td>
                        <td>September 23, 2023</td>
                        <td>Probitionary</td>
                    </tr>
                    <tr>
                        <td>Metro Man</td>
                        <td>AGLI-00019</td>
                        <td>Accounting Department</td>
                        <td>September 23, 2022</td>
                        <td>Regular</td>
                    </tr>
                    </table>
                </div>
            </div>
            <!-- End of New Users Section -->

            <!-- Analyses -->
            <div class="analys">
                <div class="sales">
                    <div class="status">
                        <div class="info">
                            <h3>AGLI-00018 </h3>
                            <h1>Joseph Calipay Prantar</h1>
                              <h3 >Birthdate : </h3>
                              <h3>Address : </h3>
                        </div>
                        <div class="details">
                          
                            <h3>Date Hired  : </h3>
                            <h3>Designation : </h3>
                            <h3>Status      : </h3>
                            <h3>Designation : </h3>
                            <h3>Sss         : </h3>
                            <h3>PhilHealth  : </h3>
                            <h3>Pag-Ibig    : </h3>
                            <h3>Tin         : </h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Analyses -->

            


        </main>
        <!-- End of Main Content -->

        <!-- Right Section -->
        <div class="right-section">
            <div class="nav">
                <button id="menu-btn">
                    <span class="material-icons-sharp">
                        menu
                    </span>
                </button>
                <!-- <div class="dark-mode">
                    <span class="material-icons-sharp active">
                        light_mode
                    </span>
                    <span class="material-icons-sharp">
                        dark_mode   
                    </span>
                </div> -->

                <div class="profile">
                    <div class="info">
                    <p>Hey, <b><?php echo $_SESSION['firstname']; ?></b></p>
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="images/agli.png">
                    </div>
                </div>

            </div>
            <!-- End of Nav -->

            <!-- <div class="user-profile">
                <div class="logo">
                    <img src="images/profile-1.jpg">
                    <h2>Joseph Prantar</h2>
                    <p>Full Stack</p>
                </div>
            </div> -->

            <div class="reminders">
                <div class="header">
                    <h2>Reminders</h2>
                    <span class="material-icons-sharp">
                        notifications_none
                    </span>
                </div>

                <div class="notification">
                    <div class="icon">
                        <span class="material-icons-sharp">
                            volume_up
                        </span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h3>Workshop</h3>
                            <small class="text_muted">
                                08:00 AM - 12:00 PM
                            </small>
                        </div>
                        <span class="material-icons-sharp">
                            more_vert
                        </span>
                    </div>
                </div>

                <div class="notification deactive">
                    <div class="icon">
                        <span class="material-icons-sharp">
                            edit
                        </span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h3>Workshop</h3>
                            <small class="text_muted">
                                08:00 AM - 12:00 PM
                            </small>
                        </div>
                        <span class="material-icons-sharp">
                            more_vert
                        </span>
                    </div>
                </div>

                <div class="notification add-reminder">
                    <div>
                        <span class="material-icons-sharp">
                            add
                        </span>
                        <h3>Add Reminder</h3>
                    </div>
                </div>

            </div>

        </div>


    </div>

    <!-- <script src="includes/orders.js"></script> -->
    <script src="includes/index.js"></script>
</body>

</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>