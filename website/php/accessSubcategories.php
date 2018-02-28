<?php
	function buildSubcategories($connection){
		$emptySubcategories = array();
		$data = getSubcategoriesFromDatabase($connection);
		$filledSubcategories = fillEmptySubcategoriesWithData($connection, $emptySubcategories, $data);
		return $filledSubcategories;
	}

	function getSubcategoriesFromDatabase($connection) {
		$query = "SELECT * FROM Category";
		return mysqli_query($connection, $query);
	}

	function fillEmptySubcategoriesWithData($connection, $subcategories, $data){
		while($row = mysqli_fetch_assoc($data))
		{
			$id = $row['SubcategoryId'];
			$subcategory = createSubcategoryFromRow($connection, $row);
			$subcategories[$id] = $subcategory;
		}
		return $subcategories;
	}

	function createSubcategoryFromRow($connection, $row) {
		$subcategoryName = $row['SubcategoryName'];
		$subcategoryDescription = $row['Description'];
		$image = getImage($connection, $row);
		return fillSubcategoryWithParts($subcategoryName, $subcategoryDescription, $image;
	}

	function getImage($connection, $row){
		$subcategoryImage = $row['ImageId'];
		$imageQuery = "SELECT FileName FROM Image WHERE ImageId = '$subcategoryImage'";
		return mysqli_query($connection, $imageQuery);
	}

	function fillSubcategoryWithParts($subcategoryName, $subcategoryDescription, $image){
		$subcategory = array();
		$subcategory['name'] = $subcategoryName;
		$subcategory['description'] = $subcategoryDescription;
		$subcategory['image'] = getImageFileName($image);
		return $subcategory;
	}

	function getImageFileName($allImages){
		if ($imageRow = mysqli_fetch_assoc($allImages))
			return $imageRow['FileName'];
	}
?>