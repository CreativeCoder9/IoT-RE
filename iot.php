<?php 
$file=fopen("data","w");
$button=$_GET['onlight'];

if(!empty($_GET))
{
	if ($button=="red"||$button=="yellow"||$button== "green"||$button=="reset") 
	{
		fwrite($file, $button);
		fclose($file);
		// echo "SUCCESS";
		header("Location:https://iotcontroller9.000webhostapp.com/");
	}else{
		 echo "ERROR.......NO_MATCH_FOUND";
	} 
}else{
	echo "ERROR...ANOMALY_DETECTED";
}

?>