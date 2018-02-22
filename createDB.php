<!DOCTYPE html>
</head>
<head>
<html>
<meta charset="utf-8">
<title>Create a Database</title>

<body> 
<?php
	$conn = mysqli_connect('localhost', 'root', '');
if($conn)
	echo "<p>Connection set up successfully.</p>";
$query = "Drop Database if Exists schooldb";
mysqli_query($conn, $query);

$query="create Database schooldb";
if(mysqli_query($conn, $query))
	echo "<p> Database created</p>";

mysqli_select_db($conn, "schooldb");

$query = "create table student
(
	studentId 	int not null, 
	studentName varchar(40) not null,
	studentGPA decimal(3,2),
	Primary key (StudentId)
)";

if (mysqli_query($conn, $query))
	echo "<p>Table is created</p>";
mysqli_close($conn);
?>

</body>