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

$query = "Insert into CarouselImage(ImageId)
Values
	(1),
	(2),
	(3);";

if (mysqli_query($conn, $query))
	echo "<p>Database is seeded with fake CarouselImage data.</p>";

$query = "Insert into Category(CategoryName, ImageId)
values
	('Birthday'),
	('Rememberance'),
	('Shower'),
	('Thank You'),
	('Thinking of You'),
	('Wedding'),
	('Bacherlorette'),
	('Get Well'),
	('Holiday'),
	('Special Days');";

if (mysqli_query($conn, $query))
	echo "<p>Database is seeded with fake Category data.</p>";
	

$query = "Insert into Subcategory(SubcategoryName, CategoryId, ImageId)
Values
	('Girl Birthday', 1),
	('Boy Birthday', 1),
	('Adult Female Birthday', 1),
	('Adult Male Birthday', 1),
	('MileStone Birthday', 1),
	('Baby Shower', 3),
	('Bridal Shower', 3),
	('Gender Reveal', 3),
	('Wedding', 6),
	('Will you be my...', 6),
	('Fun', 7),
	('Adult Themed', 7),
	('Rememberance', 2),
	('General', 4),
	('Thinking of You', 5),
	('New Year''s Eve', 9),
	('Valentine''s Day', 9),
	('Mardi Gras Day', 9),
	('St. Patrick''s Day', 9),
	('Easter', 9),
	('July 4th', 9),
	('Memorial Day', 9),
	('Mother''s Day', 9),
	('Father''s Day', 9),
	('Teacher Appreciation', 10),
	('Bosses Day', 10),
	('Administration Appreciation', 10),
	('Nurse Appreciation', 10),
	('Graduation', 10);";

if (mysqli_query($conn, $query))
	echo "<p>Database is seeded with fake Subcategory data.</p>";

mysqli_close($conn);
?>

</body>