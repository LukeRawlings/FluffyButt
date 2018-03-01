<?php

    include("queryParameters.php");

    $queries = array();

    $queries["categories"] = 
        "SELECT CategoryId, CategoryName, c.Description, Filename as 'Image', i.Description as 'AltText' 
        FROM Category as c inner join Image as i
        on c.ImageId = i.ImageId"; 

    $queries["subcategories"] = 
        "SELECT SubcategoryId, SubcategoryName, s.Description, Filename as 'Image', i.Description as 'AltText' 
        FROM Subcategory as s inner join Image as i
        on s.ImageId = i.ImageId";

    $queries["products"] = 
        "SELECT ProductId, ProductName, p.Description, Filename as 'Image', i.Description as 'AltText' 
        FROM Product as p inner join Image as i
        on p.ImageId = i.ImageId";

    $queries["attributes"] = 
        "SELECT attributeName 
        FROM Attribute as a inner join ProductAttribute as pa on a.AttributeId = pa.attributeId
        inner join Product as p on pa.ProductId = p.ProductId
        where p.ProductId = '$productId'"; 

?>
