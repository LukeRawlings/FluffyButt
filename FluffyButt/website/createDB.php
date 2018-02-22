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

$query = "USE master;
IF DB_ID(N'FluffyButtCookiesDB') IS NOT NULL DROP DATABASE FluffyButtCookiesDB; 
CREATE DATABASE FluffyButtCookiesDB;
GO 
USE FluffyButtCookiesDB;
GO
CREATE SCHEMA Products AUTHORIZATION dbo;
GO
create schema Media AUTHORIZATION dbo;
go

create table Media.Image
(
	ImageId			int				not null identity,
	[Description]	nvarchar(1000)	not null,
	FileName NVARCHar(100) not null,
	constraint PK_Image primary key	(ImageId)
	
);

create table Products.Category
(
	CategoryId	int				not null identity,
	CategoryName	nvarchar(100)	not null,
	[Description]	nvarchar(1000)	not null,
	ImageId			int				not null,
	constraint PK_Category primary key	(CategoryId),
	constraint FK_Category_Image foreign key (ImageId) references Media.Image(ImageId)
);

create table Products.Subcategory
(
	SubcategoryId	int				not null identity,
	SubcategoryName	nvarchar(100)	not null,
	[Description]	nvarchar(1000)	not null,
	CategoryId		int				not null,
	ImageId			int				not null,
	constraint PK_Subcategory primary key	(SubcategoryId),
	constraint FK_Subcategory_Category foreign key (CategoryId) references Products.Category(CategoryId),
	constraint FK_Subcategory_Image foreign key (ImageId) references Media.Image(ImageId)
);

create table Products.Product
(
	ProductId		int				not null identity,
	ProductName		nvarchar(100)	not null,
	[Description]	nvarchar(1000)	not null,
	Price			money			not null,
	ImageId			int				not null,
	SubcategoryId	int				not null,
	constraint PK_Product primary key (ProductId),
	constraint FK_Product_Image foreign key (ImageId) references Media.Image(ImageId),
	constraint FK_Product_Subcategory foreign key (SubcategoryId) references Products.Subcategory(SubcategoryId)
);

Create table Products.Attribute
(
	AttributeId int		not null identity,
	AttributeName  NVARCHAR(100)	 not null,
	constraint PK_Product_Attributes primary key (AttributeId)
);

create table Products.ProductsAttributes
(
	AttributeId int	not null identity,
	ProductId int not null,
	constraint FK_Product_Product foreign key (ProductId) references Products.Product(ProductID),
	constraint FK_Product_Attribute foreign key (AttributeId) references Products.Attribute(AttributeId)
);";

if (mysqli_query($conn, $query))
	echo "<p>Table is created</p>";
mysqli_close($conn);
?>

</body>