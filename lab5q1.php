<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.button {
    	border-radius: 20px;
     	font-size: 20px;
     	text-align: center;
		background-color: red;
	color: white;
}
div{
	height: auto;
     	width: 500px;
     	margin: 10px auto;
     	background: pink;
     	padding: 20px;
}


html, body {
	font-size: 25px;
	text-align: center;
}
</style>
</head>
<body>
<div>
<?php
session_start();
if (isset($_SESSION['views']))
	$_SESSION['views'] = $_SESSION['views'] + 1;
else
	$_SESSION['views'] = 1;





$row = $_POST['row'];
$column = $_POST['column'];
$rowCheck = ($row >= "3" and $row <= "12");
$colCheck = ($column >= "3" and $column <= "12");

if ($rowCheck and $colCheck) {
	echo "<h2>Multiplication Table Generator</h2>";
	echo "Views: " . $_SESSION['views'] . "<br><br>";
	echo "<br><br>";
	echo "<table align='center'>";
	for ($i = 1; $i <= $row; $i++) {
		echo "<tr>";
		for ($j = 1; $j <= $column; $j++) {
			echo "<td>" . $i*$j . "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
	echo "<br>";
	echo"<p>Here is your table. $5 please.</p>";
}
else {
	echo "<h2>Multiplication Table Generator</h2>";
	echo "Views: " . $_SESSION['views'] . "<br><br>";
	echo "<br>";
	echo "<h4>Rows and column does not meet the requirement.</h4>";
	echo "<p>Rows and columns must be between 3-12.</p>";
}
echo "<button onclick=\"window.location.href = 'lab5Q1.html'\">Create more Tables </button>";
echo "<br><br>";
?>
</div>
</body>
</html>