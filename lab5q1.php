<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.button {
    	border-radius: 15px;
     	font-size: 30px;
     	text-align: left;
     	padding: 15px 20px;
     	cursor: pointer;
		background-color: red;
	color: white;
}

div{
	height: auto;
     	width: 500px;
     	margin: 30px auto;
     	background-color: black;
     	padding: 20px;
}


html, body {
	background-color: rgb(28, 231, 221);
    transition: 0.8s;
    -webkit-transition: 0.8s;
    -moz-transition: 0.8s;
    -ms-transition: 0.8s;
    -o-transition: 0.8s;
}
</style>
</head>
<body>
<div>
<?php
session_start();
if (isset($_SESSION['view']))
	$_SESSION['view'] = $_SESSION['view'] + 1;
else
	$_SESSION['view'] = 1;





$rows = $_POST['row'];
$columns = $_POST['column'];
$rowNumber = ($rows >= "3" and $rows <= "12");
$columnNumber = ($columns >= "3" and $columns <= "12");

if ($rowNumber and $columnNumber) {
	echo "<h2>Multiplication Table </h2>";
	echo "Views: " . $_SESSION['view'] . "<br><br>";
	echo "<br><br>";
	echo "<table align='center'>";
	for ($i = 1; $i <= $rows; $i++) {
		echo "<tr>";
		for ($j = 1; $j <= $columns; $j++) {
			echo "<td>" . $i*$j . "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
	echo "<br>";
	
}
else {
	echo "<h2>Multiplication Table</h2>";
	echo "Views: " . $_SESSION['view'] . "<br><br>";
	echo "<br>";
	echo "<h4>Please enter the required number of row and columns</h4>";
	echo "<p>They must be between 3 and 12 </p>";
}
echo "<button onclick=\"window.location.href = 'lab5q1.html'\">Another Table </button>";
echo "<br><br>";
?>
</div>
</body>
</html>