<?php
	$conn = mysqli_connect('localhost', 'root', '');
if($conn)
	echo "<p>Connection set up successfully.</p>";
$query = "Drop Database if Exists FluffyButtCookiesDB";
mysqli_query($conn, $query);

$query="create Database FluffyButtCookiesDB";

if(mysqli_query($conn, $query))
	echo "<p> Database created</p>";

mysqli_select_db($conn, "FluffyButtCookiesDB");

$query = "create table Category
(
	CategoryId		integer			AUTO_INCREMENT,
	CategoryName	varchar(100)	not null,
	primary key	(CategoryId)
)";

if (mysqli_query($conn, $query))
	echo "<p>Category table created</p>";

$query = "create table Subcategory
(
	SubcategoryId	integer			AUTO_INCREMENT,
	SubcategoryName	varchar(100)	not null,
	CategoryId		integer			not null,
	primary key(SubcategoryId),
	foreign key (CategoryId) references Category(CategoryId)
);";

if (mysqli_query($conn, $query))
	echo "<p>SubCategory table created</p>";

mysqli_close($conn);
?>