<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "appoint";
$conn = mysqli_connect($servername, $username, $password, $dbname);




 ?>

<?php 
	if(isset($_POST['send'])){
		
		$yourname = $_POST['yourname'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		$inserted = mysqli_query($conn, "INSERT INTO feedback (`yourname`, `email`, `subject`, `message`) values ('".$yourname."', '".$email."', '".$subject."', '".$message."')");
		if($inserted){
			
		}
		else{

			
		}
	}
 ?>