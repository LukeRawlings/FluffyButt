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


mysqli_select_db($conn, "FluffyButtCookiesDB");

$query = "Insert into Image(Description, FileName)
Values
	('Red nose reigndeer', 'Rednose.jpg'),
	('Santa Hat', 'RedHat.jpg'), 
	('A teddybear', 'Teddy.jpg'), 
	('Red ribbons', 'Ribbon.jpg'),
	('Deer', 'Rudolph.jpg'),
	('Santa', 'Santa.jpg'),
	('toys', 'Toys.jpg'),
	('Confetti', 'Confetti.jpg');";

if (mysqli_query($conn, $query))
	echo "<p>Database is seeded with fake Image data.</p>";


$query = "Insert into Category(CategoryName, Description, ImageId)
values
	('Christmas', 'Christmas style', 1),
	('Birthday', 'Birthday Style', 2);";

if (mysqli_query($conn, $query))
	echo "<p>Database is seeded with fake Category data.</p>";
	

$query = "Insert into Subcategory(SubcategoryName, Description, CategoryId, ImageId)
Values
	('Rudolph', 'The Reindeer', 1, 5),
	('Santa', 'Fat Man', 1, 6),
	('Toys', 'Childs Toys', 2, 7),
	('Confetti', 'Confetti', 2, 8);";

if (mysqli_query($conn, $query))
	echo "<p>Database is seeded with fake Subcategory data.</p>";

$query = "Insert into Attribute(AttributeName)
Values 
	('Color'),
	('Text');";

if (mysqli_query($conn, $query))
	echo "<p>Database is seeded with fake Attribute data.</p>";

$query = "Insert into Product (ProductName, Description, Price, ImageId, SubcategoryId)
Values 
	('RedNose', 'Rudolph', 12.00, 5, 1),
	('Santa', 'Santa', 45.00, 6, 2),
	('Toys', 'Toys', 25.00, 7, 3),
	('Confetti', 'Confetti', 30.00, 8, 4);";

if (mysqli_query($conn, $query))
	echo "<p>Database is seeded with fake Product data.</p>";

$query = "insert into ProductAttribute(ProductId, AttributeId)
values (1, 1), 
	   (1, 2),
	   (2, 1),
	   (2, 2),
	   (3, 1), 
	   (3, 2),
	   (4, 1),
	   (4, 2);";
	  
if (mysqli_query($conn, $query))
	echo "<p>Database is seeded with fake ProductAttribute data.</p>";

mysqli_close($conn);
?>

</body>