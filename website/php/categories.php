<?php
	// Set up the connection
	$conn = mysqli_connect('localhost', 'root', '', 'FluffyButtCookiesDB');
	if($conn)
	{
		$categories = array();

		//todo: get categories from database
		$query = "SELECT * FROM Products.Categories";
		$result = mysqli_query($conn, $query);
		while($row = mysqli_fetch_assoc($result))
		{
			$categoryId = $row['CategoryId'];
			$categoryName = $row['CategoryName'];
			$categoryDescription = $row['Description'];
			$categoryImage = $row['ImageId'];

			$queryImage = "SELECT FileName FROM Media.Image WHERE ImageId = '$categoryImage'";
			$resultImage = mysqli_query($conn, $queryImage);	

			$category = array();
			$category['name'] = $categoryName;
			$category['description'] = $categoryDescription;
			$category['image'] = $categoryImage;

			$categories[$categoryId] = $category;
		}

		// assign to categories object
		echo json_encode($categories);
	}
	
?>
