<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

include "conexao.php";
$id = $_POST['id'];
$name = $_POST['name'];
$date = $_POST['date'];
$nationality = $_POST['nationality'];
$profession = $_POST['profession'];
$number = $_POST['number'];
$email = $_POST['email'];
$password = $_POST['password'];
$strx = $password;
$senhaencriptada = base64_encode($strx);

if(isset($name) && isset($password)) {

	$passwordencriptada = base64_encode($password);

	$sql = mysqli_query($con, "INSERT INTO usuarios (id, name, date, nationality, profession, number, email, password)VALUES ('$id','$name','$date','$nationality','$profession','$number','$email','$senhaencriptada')");

    
	if($sql) {
                $_SESSION['name'] = $name;
                $number = "03626566006";
		header("Location:logado.php?name=$name&number=$number");
				
		}
		else{
			echo ' <SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript"> alert ("\n\n Username or password is invalid! \n\n  ")</SCRIPT>
	
				<SCRIPT language="JavaScript">window.history.go(-1);</SCRIPT>';
		}
	}
 else {
	echo '<center>Por favor, todos os campos devem ser preenchidos!</center>';
	//include 'cadastrese.php';	
}
?>

	