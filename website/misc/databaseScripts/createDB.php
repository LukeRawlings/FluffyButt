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
$query = "Drop Database if Exists FluffyButtCookiesDB";
mysqli_query($conn, $query);

$query="create Database FluffyButtCookiesDB";

if(mysqli_query($conn, $query))
	echo "<p> Database created</p>";

mysqli_select_db($conn, "FluffyButtCookiesDB");

$query = "create table Image
(
	ImageId 	integer 		AUTO_INCREMENT,
	Description	varchar(1000)	not null,
	FileName 	varchar(1000) 	not null,
	primary key	(ImageId)
)";

if (mysqli_query($conn, $query))
	echo "<p>Image table created</p>";


$query = "create table CarouselImage
(
	CarouselImageId integer AUTO_INCREMENT,
	ImageId 	integer   not null,
	primary key (CarouselImageId),
	foreign key (ImageId) references Image(ImageId)
)";

if (mysqli_query($conn, $query))
	echo "<p>CarouselImage table created</p>";

$query = "create table Category
(
	CategoryId		integer			AUTO_INCREMENT,
	CategoryName	varchar(1000)	not null,
	ImageId			integer			not null,
	primary key	(CategoryId),
	foreign key (ImageId) references Image(ImageId)
)";

if (mysqli_query($conn, $query))
	echo "<p>Category table created</p>";

$query = "create table Subcategory
(
	SubcategoryId	integer			AUTO_INCREMENT,
	SubcategoryName	varchar(100)	not null,
	CategoryId		integer			not null,
	ImageId			integer			not null,
	Color 			nvarchar(100) 	not null,
	primary key(SubcategoryId),
	foreign key (CategoryId) references Category(CategoryId),
	foreign key (ImageId) references Image(ImageId)
);";

if (mysqli_query($conn, $query))
	echo "<p>SubCategory table created</p>";

$query = "create table User
(
	UserId			integer			AUTO_INCREMENT,
	UserName		varchar(100)	not null,
	UserPassword	varchar(10)		not null,
	IsAdmin			tinyint(1)		not null,
	primary key(UserId)
);";

if (mysqli_query($conn, $query))
	echo "<p>User table created</p>";


mysqli_close($conn);
?>

</body>