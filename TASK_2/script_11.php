<html>
<form>
Enter one Number: <input type="text" name="val_1" />

<input type="submit" name ="submit"/>

</form>
</html>
<?php
$val= $_REQUEST ['val_1'];

if ($val % 2 == 0)
{
	echo "number is even";
}
else
{
	echo "number is odd";
}
?>