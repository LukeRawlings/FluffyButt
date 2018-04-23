<?php

    $queries = array();

    // Register queries below. If you need additional parameters, register them in queryParameters.php. 

    // Get queries

    $queries["categories"] = "SELECT * FROM Category"; 

    $queries["subcategories"] = "SELECT * FROM Subcategory";

    $queries["products"] = "SELECT p.ProductId, P.Price, p.Name, p.ImageUrl, PC.ProductCategoryName FROM Products as P join ProductCategory as PC
    on PC.ProductCategoryId = P.ProductCategoryId";
   
    // Post queries
        
    $queries["addcategory"] = 
        "INSERT into Category () values ()";

    $queries["addSubcategory"] = 
        "INSERT into Subcategory () values ()";

?>