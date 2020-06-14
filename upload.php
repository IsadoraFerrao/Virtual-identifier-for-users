<?php

if(is_file($_FILES['arquivo']['tmp_name'])){
	$foto = $_FILES['arquivo']['name'];
	
	$foto = str_replace(" ", "__", $foto);
	$foto = str_replace("ã", "a", $foto);
	$foto = str_replace("á", "a", $foto);
	$foto = str_replace("à", "a", $foto);
	$foto = str_replace("é", "e", $foto);
	$foto = str_replace("ê", "e", $foto);
	$foto = str_replace("è", "e", $foto);
	$foto = str_replace("í", "i", $foto);
	$foto = str_replace("ì", "i", $foto);
	$foto = str_replace("ó", "o", $foto);
	$foto = str_replace("õ", "o", $foto);
	$foto = str_replace("ç", "c", $foto);
	
	$foto = strtolower($foto);
	
	$tipos = array('image/jpeg','image/pjpeg','image/jpeg','image/gif','image/png');
	$arqType = $_FILES['arquivo']['type'];
	
	if(in_array($arqType, $tipos) == false){
		echo "
		<meta http-equiv=refresh content='0; url=indeex.php'>
		<script type='text/javascript'>
		alert('Formato inválido');
		</script>
	";
	}else{
		if(file_exists("fotos/$foto")){
		$a = 1;
		while(file_exists("fotos/[$a]$foto")){
		$a++;
		}
		$foto = "[".$a."]".$foto;
		}
		
		if(!move_uploaded_file($_FILES['arquivo']['tmp_name'], "fotos/".$foto)){
		echo "
		<meta http-equiv=refresh content='0; url=indeex.php'>
		<script type='text/javascript'>
		alert('Erro no upload do arquivo');
		</script>
		";
		}
		//$sql = mysql_query("INSERT INTO perguntas (foto) value ('$foto')");
		
		
		}
		
}else{
"<h5> Você não inseriu nenhuma figura, aguarde voltar a página inicial </h5>";
}

?>
		
		
		
		