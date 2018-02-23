<?php
	// Set up the connection
	$conn = mysqli_connect('localhost', 'root', '');

	mysqli_select_db($conn, "FluffyButtCookiesDB");

	if($conn)
	{
		$categories = array();

		// Get categories from database
		$query = "SELECT * FROM Category";
		$result = mysqli_query($conn, $query);
		while($row = mysqli_fetch_assoc($result))
		{
			$categoryId = $row['CategoryId'];
			$categoryName = $row['CategoryName'];
			$categoryDescription = $row['Description'];
			$categoryImage = $row['ImageId'];

			$imageQuery = "SELECT FileName FROM Image WHERE ImageId = '$categoryImage'";
			$imageResult = mysqli_query($conn, $imageQuery);	

			$category = array();
			$category['name'] = $categoryName;
			$category['description'] = $categoryDescription;
			if ($imageRow = mysqli_fetch_assoc($imageResult))
				$category['image'] = $imageRow['FileName'];

			$categories[$categoryId] = $category;
		}

		// Output json to api consumer.
		echo json_encode($categories);
	}
	
?>
