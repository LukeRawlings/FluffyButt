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


$query = "Insert into Category(CategoryName, ImageId)
values
	('Birthday', 1),
	('Rememberance', 2),
	('Shower', 1),
	('Thank You', 2),
	('Thinking of You', 1),
	('Wedding', 2),
	('Bacherlorette', 1),
	('Get Well', 2),
	('Holiday', 1),
	('Special Days', 2);";

if (mysqli_query($conn, $query))
	echo "<p>Database is seeded with fake Category data.</p>";
	

$query = "Insert into Subcategory(SubcategoryName, CategoryId, ImageId)
Values
	('Girl Birthday', 1, 5),
	('Boy Birthday', 1, 6),
	('Adult Female Birthday', 1, 7),
	('Adult Male Birthday', 1, 8),
	('MileStone Birthday', 1, 5),
	('Baby Shower', 3, 6),
	('Bridal Shower', 3, 7),
	('Gender Reveal', 3, 8),
	('Wedding', 6, 5),
	('Will you be my...', 6, 6),
	('Fun', 7, 7),
	('Adult Themed', 7, 8),
	('Rememberance', 2, 7),
	('General', 4, 7),
	('Thinking of You', 5, 7),
	('New Years Eve', 9, 7),
	('Valentine's Day, 9, 7),
	('Mardi Gras Day', 9, 7),
	('St. Patrick's Day', 9, 7),
	('Easter', 9, 7),
	('July 4th', 9, 7),
	('Memorial Day', 9, 7),
	('Mother's Day, 9, 7),
	('Father's Day, 9, 7),
	('Teachers Appreciation', 10, 7),
	('Boss's Day, 10, 7),
	('Administration Appreciation', 10, 7),
	('Nurse Appreciation', 10, 7),
	('Graduation', 10, 7);";

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