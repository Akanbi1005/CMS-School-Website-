<?php
include_once "light/Include/Database.php";


$con = new Database;

session_start();


?>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['Submit'])){

	$Username = $_POST['username'];
	$Password = $_POST['pass'];

	// echo "$Username";
	// echo "<br>";
	// echo "$Password";
	// die();


	//Error Checking
	//Check if Input are not Empty 
	if (empty("$Username")||empty("$Password")) {
		header("Location: index.php?Login=Errorpass");
	    exit();
	}else{
		// Check if Username Exit
		$sql="SELECT * FROM users WHERE Username='$Username'";
        $result = $con->_connection->query($sql);
        $resultcheck= $result->num_rows;

        if ($resultcheck < 1) {
	        header("Location: index.php?Login=Username_Error");
	        exit();
    	}else{
    		if ($row = $result->fetch_assoc()) {

                // print_r($row);
                // die();


    			//De-hashing The Password
    			$Check = password_verify($Password, $row['password']);

    			$result->free();

    			if ($Check == false) {
    				header("Location: index.php?Login=Wrong_Password");
	        		exit();
    			}elseif($Check ==True) {
    				// Log User Into The Website

                    $_SESSION['id'] = $row['id'];
                    $_SESSION['image'] = $row['Image'];
    				$_SESSION['Username'] = $row['Username'];
                    $_SESSION['Fullname'] = $row['Fullname'];


    				header("Location: light/index.php");

    				

    			}
    		}

    	}
	}
}else{
	header("Location: index.php?Login=Erroriii");
	exit();
}