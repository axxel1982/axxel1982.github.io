<!DOCTYPE html> 
<html lang="it"> 
<head> 
<meta charset="utf-8"> 
<title> Data e ora del server </title>
</head>
<body>
<h1> Data e ora </h1>
<?php
date_default_timezone_set('Europe/Rome');
echo "<p> Sono le ore ".date("H:i:s")." del giorno ".date("d/m/Y")." </p>";
?>
</body>
</html>
