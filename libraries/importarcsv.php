<?php

// conexión
$mysqli = @new mysqli('localhost', 'alumne', '', 'mec_im');
$mysqli->query("SET NAMES 'utf-8'");

//var_dump($_POST['enviar']);die();

if (isset($_POST['enviar']))
{

  $filename=$_FILES["file"]["name"];
  $info = new SplFileInfo($filename);
  $extension = pathinfo($info->getFilename(), PATHINFO_EXTENSION);

   if($extension == 'csv')
   {
	$filename = $_FILES['file']['tmp_name'];
	$handle = fopen($filename, "r");

	while( ($data = fgetcsv($handle) ) !== FALSE )

	{
    
    
	   $q = "INSERT INTO diagnosticos (id, especialidad, diagnostico, quirurgico, IDC_9) VALUES (
		'$data[0]',
		'$data[1]',
		'$data[2]',
      '$data[3]',
      '$data[4]'
	);";

	$mysqli->query($q);
  
   }

      fclose($handle);
   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Importación</title>
</head>
<body>

<form enctype="multipart/form-data" method="post" action="">
   CSV File:<input type="file" name="file" id="file">
   <input type="submit" value="Enviar" name="enviar">
</form>

</body>
</html>
