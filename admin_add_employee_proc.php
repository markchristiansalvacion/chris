<?php
require_once 'includes/load.php';
require_once 'vendor2/autoload.php';


if (isset($_POST)) {
  //print_r_html($_POST);

  $firstname = $db->escape_string($_POST['firstname']);
  $middlename = $db->escape_string($_POST['middlename']);
  $lastname = $db->escape_string($_POST['lastname']);
  $email = $db->escape_string($_POST['email']);
  $designation = $db->escape_string($_POST['designation']);
  $password = $db->escape_string($_POST['password']);

  $password = password_hash($user_pass, PASSWORD_BCRYPT);


  $sql = "INSERT INTO emp_info (`firstname`, `middlename`, `lastname`, `email`, `designation`, `password`)
          VALUES('" . $firstname . "','" . $middlename . "','" . $lastname . "','" . $email . "','" . $designation . "','" . $password . "')";


  if ($db->query($sql)) {
    $_SESSION['msg_heading'] = "Success!";
    $_SESSION['msg'] = "You have successfully added new user(s) to our system!";
    $_SESSION['msg_type'] = "success";
    redirect("admin_add_employee.php");
  } else {
    $_SESSION['msg_heading'] = "Error!";
    $_SESSION['msg'] = "Failed. Please try again.</b>";
    $_SESSION['msg_type'] = "error";
    redirect("admin_add_employee.php");
  }
}
