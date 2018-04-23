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

$query = "create table ProductCategory
(
	ProductCategoryId	integer 	AUTO_INCREMENT,
	ProductCategoryName 		nvarchar(100)	not null,
	Primary key (ProductCategoryId)
);";

if (mysqli_query($conn, $query))
	echo "<p>ProductCategory table created</p>";

$query = "create table Products
(
	ProductId	integer 	AUTO_INCREMENT,
	Price 		decimal(6,2)	not null,
	Name 		nvarchar(100)	not null,
	ImageUrl 	nvarchar(100)	not null,
	ProductCategoryId integer  not null,
	Primary key (ProductId),
	Foreign key (ProductCategoryId) references ProductCategory (ProductCategoryId)
);";

if (mysqli_query($conn, $query))
	echo "<p>Products table created</p>";
else 
	echo"<p>Products table failed</p>";

mysqli_close($conn);
?>