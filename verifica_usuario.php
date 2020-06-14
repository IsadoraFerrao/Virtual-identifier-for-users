<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

include "conexao.php";
$name	= $_GET['name'];
$password = $_GET['password'];


if(isset($name) && isset($password)) {

	$passwordencriptada = base64_encode($password);

	$sql = mysqli_query($con, "SELECT * FROM usuarios WHERE name = '$name' AND password = '$passwordencriptada' ");

    
	if($sql) {
		//pega o unico resultado
		$row = mysqli_fetch_array($sql);
		if(($row['name'] == $name) and ($row['password'] == $passwordencriptada)){
				session_start();
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
}
