<?php
	if(isset($_GET['enable']))
	{
		shell_exec("/usr/bin/sudo /usr/local/bin/pport -t 9");
		header("Location: /pport.php");
	}
	if(isset($_GET['disable']))
	{
		shell_exec("/usr/bin/sudo /usr/local/bin/pport -s 9");
		header("Location: /pport.php");
	}
	//echo shell_exec("/usr/bin/sudo /usr/local/bin/pport --status");
	
	
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Параллельный порт</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<style>
</style>
<script src=""></script>
<body>


<div class="">
 <img src="https://cdn.pixabay.com/photo/2013/07/13/13/19/parallel-port-160831_640.png" style="width:20%">
 <p><a href="?enable">Включить бойлер</a></p>
 <p><a href="?disable">Выключить</a></p>
</div>
<div>
	<textarea style="width:100%; height:100px">
		<? echo shell_exec("/usr/bin/sudo /usr/local/bin/pport --status"); ?>
	</textarea>
</div>

</body>
</html>

