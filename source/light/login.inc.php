<?php
include_once "Include/Database.php";

$con = new Database();

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
		header("Location: ../index.php?Login=Errorpass");
	    exit();
	}else{
		// Check if Username Exit
		$sql="SELECT * FROM users WHERE Username='$Username'";
        $result = $con->_connection->query($sql);
        $resultcheck= $result->num_rows;

        if ($resultcheck < 1) {
	        header("Location: ../index.php?Login=Error");
	        exit();
    	}else{
    		if ($row = $result->fetch_assoc()) {
    			//De-hashing The Password
    			$Check = password_verify($_POST["Password"],$row['Password']);

    			$result->free();
    			if ($Check ==false) {
    				header("Location: ../index.php?Login=Error");
	        		exit();
    			}elseif ($Check ==True) {
    				// Log User Into The Website

                    $_SESSION['id'] = $row['id'];
    				$_SESSION['Username'] = $row['Username'];
    				
    				

    				header("Location: index.php?Login=Success");

    				

    			}
    		}

    	}
	}
}else{
	header("Location: index.php?Login=Erroriii");
	exit();
}