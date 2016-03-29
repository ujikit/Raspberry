<html>
<head>
<meta charset="UTF-8"/>
</head>

<?php
if (isset($_POST['ON']))
{
exec("sudo python /home/pi/Desktop/on.py");
}
if (isset($_POST['OFF']))
{
exec("sudo python /home/pi/Desktop/off.py");
}
?>

<form method="post">
<button name="ON">turn on</button>&nbsp;
<button name="OFF">turn off</button><br>
</form>

</html>
