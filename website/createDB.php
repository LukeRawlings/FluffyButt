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

$query = "create table Category
(
	CategoryId		integer			AUTO_INCREMENT,
	CategoryName	varchar(1000)	not null,
	Description		varchar(1000)	not null,
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
	Description	varchar(1000)		not null,
	CategoryId		integer			not null,
	ImageId			integer			not null,
	primary key(SubcategoryId),
	foreign key (CategoryId) references Category(CategoryId),
	foreign key (ImageId) references Image(ImageId)
);";

if (mysqli_query($conn, $query))
	echo "<p>Category table created</p>";

$query = "create table Product
(
	ProductId		integer			AUTO_INCREMENT,
	ProductName		varchar(100)	not null,
	Description	varchar(1000)			not null,
	Price			decimal(13, 2)	not null,
	ImageId			integer			not null,
	SubcategoryId	integer			not null,
	primary key (ProductId),
	foreign key (ImageId) references Image(ImageId),
	foreign key (SubcategoryId) references Subcategory(SubcategoryId)
);";

if (mysqli_query($conn, $query))
	echo "<p>Product table created</p>";

$query = "Create table Attribute
(
	AttributeId integer	AUTO_INCREMENT,
	AttributeName  VARCHAR(100)	 not null,
	primary key (AttributeId)
);";

if (mysqli_query($conn, $query))
	echo "<p>Attribute table created</p>";

$query = "create table ProductAttribute
(
	AttributeId integer AUTO_INCREMENT,
	ProductId integer not null,
	foreign key (ProductId) references Product(ProductID),
	foreign key (AttributeId) references Attribute(AttributeId)
);";

if (mysqli_query($conn, $query))
	echo "<p>ProductAttribute	 table created</p>";

mysqli_close($conn);
?>

</body>