<?php
	if  ($_POST[url]<>""){
		$directorio = opendir($_POST[url]); //ruta actual
	}else{
		$directorio = opendir(".");
	}

//if($extension == "txt"){
while ($archivo = readdir($directorio)) //obtenemos un archivo y luego otro sucesivamente
{
    if (is_dir($archivo))//verificamos si es o no un directorio
    {
        echo $archivo . chr(10); //de ser un directorio lo envolvemos entre corchetes
    }
    else
    {
	$trozos = explode(".", $archivo);
	$extension = end($trozos);
	if(strlen($extension)<>3 and strlen($extension)<>2 and strlen($extension)<>4){
		echo  $archivo . chr(10);
	}else{
		if($extension=="mp3"){
		echo $archivo . chr(10);	
	}
	}
 }
}


?>
