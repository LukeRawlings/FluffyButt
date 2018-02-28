<?php

	function buildCategories($connection){
		$emptyCategories = array();
		$data = getCategoriesFromDatabase($connection);
		$filledCategories = fillEmptyCategoriesWithData($connection, $emptyCategories, $data);
		return $filledCategories;
	}


	function getCategoriesFromDatabase($connection) {
		$query = "SELECT * FROM Category";
		return mysqli_query($connection, $query);
	}


	function fillEmptyCategoriesWithData($connection, $categories, $data){
		while($row = mysqli_fetch_assoc($data))
		{
			$id = $row['CategoryId'];
			$category = createCategoryFromRow($connection, $row);
			$categories[$id] = $category;
		}
		return $categories;
	}


	function createCategoryFromRow($connection, $row) {
		$categoryName = $row['CategoryName'];
		$categoryDescription = $row['Description'];
		$image = getImage($connection, $row);
		return fillCategoryWithParts($categoryName, $categoryDescription, $image);
	}


	function getImage($connection, $row){
		$categoryImage = $row['ImageId'];
		$imageQuery = "SELECT FileName FROM Image WHERE ImageId = '$categoryImage'";
		return mysqli_query($connection, $imageQuery);
	}


	function fillCategoryWithParts($categoryName, $categoryDescription, $image){
		$category = array();
		$category['name'] = $categoryName;
		$category['description'] = $categoryDescription;
		$category['image'] = getImageFileName($image);
		return $category;
	}


	function getImageFileName($allImages){
		if ($imageRow = mysqli_fetch_assoc($allImages))
			return $imageRow['FileName'];
	}

?>