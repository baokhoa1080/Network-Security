<html>
<title>test</title>
<head>
</head>
<body>
	<h3>Trang hang hoa</h3>
	<form method="get" action="abc.php"><input type="text" name="name"/></form>
	<p id="hello"></p>
</body>

<?php
if (isset($_GET['name']))
{
	echo $_GET['name'];
}
?>

	
</html>
