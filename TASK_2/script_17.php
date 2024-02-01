<html>
<body>
<form action="Script_17.php" method="post">
<label>Enter Year:</label>
<input type="text" pattern="[0-9]{4}" name="year" id="year"><br><br>
<input type="submit" value="submit" name="submit"><br><br>
</form>
</body>
</html>

<?php

$year=$_REQUEST['year'];

if($year%4==0)
{
	echo "$year is a leap year";
}
else
{
	echo "$year is not a leap year";
}

?>
