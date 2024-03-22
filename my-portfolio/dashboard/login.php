<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		echo "<script>window.location = 'index.php?error=Username is required'</script>";
	    exit();
	}else if(empty($pass)){
        echo "<script>window.location = 'index.php?error=Password is required'</script>";
	    exit();
	}else{
		$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass) {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['id'] = $row['id'];
            	echo "<script>window.location = 'dashboard.php'</script>";
		        exit();
            }else{
                echo "<script>window.location = 'index.php?error=Incorect Username or Password'</script>";
		        exit();
			}
		}else{
			echo "<script>window.location = 'index.php?error=Incorect Username or Password'</script>";
	        exit();
		}
	}
	
}else{
	echo "<script>window.location = 'index.php'</script>";
	exit();
}

