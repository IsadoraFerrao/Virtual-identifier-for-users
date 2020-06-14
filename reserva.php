<?php

include "conexao.php" ;
			include("upload.php");			 
	
?>
<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
?>
	<!-- Alert para informar o usuario que os dados do  foram cadastrados -->

	<!-- faz Voltar à página anterior -->
	<SCRIPT language="JavaScript">window.history.go(-1);</SCRIPT>

