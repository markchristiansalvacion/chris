<?php require_once 'includes/load.php'; ?>
<?php

if (isset($_POST)) {
  if (are_fields_filled($_POST)) {

    $email = $db->escape_string($_POST['uname']);
    $password = $db->escape_string($_POST['password']);
	print_r($password);

    $db_num_row = $db->query('SELECT * FROM emp_info where email = ?', $email)->num_rows();
    print_r_html($db_num_row);

    if ($db_num_row) {


      $db_row = $db->query('SELECT * FROM emp_info where email = ?', $email)->fetch_array();
	  print_r($db_row);
      /** Verify Password */
      if (password_verify($password, $db_row['password'])) {


        if ($db_row['role'] == 'Admin') {

          $_SESSION['id'] = $db_row['id'];
          $_SESSION['firstname'] = $db_row['firstname'];
          $_SESSION['role'] = $db_row['role'];
          $_SESSION['status'] = $db_row['status'];
          $_SESSION['password'] = $db_row['password'];
          

          $_SESSION['login_time'] = time();


			echo ("SUCESS_index");
          redirect("index.php", false);
        }
        if ($db_row['role'] == 'Employee') {
			$_SESSION['id'] = $db_row['id'];
			$_SESSION['firstname'] = $db_row['firstname'];
			$_SESSION['role'] = $db_row['role'];
			$_SESSION['status'] = $db_row['status'];
			$_SESSION['password'] = $db_row['password'];
			
          $_SESSION['login_time'] = time();

		  echo ("SUCESS_user");

           redirect("users_profile.php", false);
        }
        if ($db_row['role'] == 'main guard') {
        	$_SESSION['id'] = $db_row['id'];
			$_SESSION['firstname'] = $db_row['firstname'];
			$_SESSION['role'] = $db_row['role'];
			$_SESSION['status'] = $db_row['status'];
			$_SESSION['password'] = $db_row['password'];

          $_SESSION['login_time'] = time();
		  echo ("SUCESS");

           redirect("index_main_guard", false);
        }
      } else {
        $_SESSION['msg_heading'] = "Transaction Error!";
        $_SESSION['msg'] = "Wrong Password!";
        $_SESSION['msg_type'] = "error";
		echo ("wrong pass");
        redirect("login.php", false);
      }
    } else {
      $_SESSION['msg_heading'] = "Transaction Error!";
      $_SESSION['msg'] = "User doesn't exist!";
      $_SESSION['msg_type'] = "error";
      redirect("login.php", false);
	echo ("does not exist");
    }
  } else {
    $_SESSION['msg_heading'] = "Transaction Error!";
    $_SESSION['msg'] = "Please fill up all fields";
    $_SESSION['msg_type'] = "error";

     redirect("login.php", false);
  }
}
?>