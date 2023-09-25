<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Login</title>
    
</head>
<body>
    <div class="container">
        <form action="login.php" method="post">
            <h2>Welcome to CHRIS</h2>
            <h4>This system is intended for the generation,monitoring and recoding data of Arrowgo Logistics Employees</h4>
            <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	    <?php } ?>
            <label for="username">Username:</label>
            <input type="text" name="uname" placeholder="Email"><br>
            <br>
            <label for="password">Password:</label>
            <input type="password" name="password" placeholder="Password">
            <br>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>
=======
<?php 

<<<<<<< HEAD
echo 'Hello World24';
=======
echo 'Hello Joseph
';
>>>>>>> 908f1c656a2aa1e4843639717d18bf1adf6ea26e

?>
>>>>>>> 0a0f78c05e9445fcb81d6b0d963b0b3843396d47
