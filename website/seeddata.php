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

$query = "Insert into Media.Image([Description], FileName)
Values
	('Red nose reigndeer', 'Rednose.jpg'),
	('Santa Hat', 'RedHat.jpg'), 
	('A teddybear', 'Teddy.jpg'), 
	('Red ribbons', 'Ribbon.jpg'),
	('Deer', 'Rudolph.jpg'),
	('Santa', 'Santa.jpg'),
	('toys', 'Toys.jpg'),
	('Confetti', 'Confetti.jpg');

Insert into Products.Category(CategoryName, [Description], ImageId)
values
	('Christmas', 'Christmas style', 1),
	('Birthday', 'Birthday Style', 2);
	

Insert into Products.Subcategory(SubcategoryName, [Description], CategoryId, ImageId)
Values
	('Rudoplh', 'The Reindeer', 1, 5),
	('Santa', 'Fat Man', 1, 6),
	('Toys', 'Childs Toys', 2, 7),
	('Confetti', 'Confetti', 2, 8);

Insert into Products.Attribute(AttributeName)
Values 
	('Color'),
	('Text');

Insert into Products.Product (ProductName, [Description], Price, ImageId, SubcategoryId)
Values 
	('RedNose', 'Rudoplh', 12.00, 5, 1),
	('Santa', 'Santa', 45.00, 6, 2),
	('Toys', 'Toys', 25.00, 7, 3),
	('Confetti', 'Confetti', 30.00, 8, 4);";

if (mysqli_query($conn, $query))
	echo "<p>Table is created</p>";
mysqli_close($conn);
?>

</body>