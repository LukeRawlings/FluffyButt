<?php

    $queries = array();

    // Register queries below. If you need additional parameters, register them in queryParameters.php. 

    // Get queries

    $queries["categories"] = 
        "SELECT CategoryId, CategoryName, c.Description, Filename as 'Image', i.Description as 'AltText' 
        FROM Category as c inner join Image as i
        on c.ImageId = i.ImageId"; 

    $queries["category"] = 
        "SELECT CategoryId, CategoryName, c.Description, Filename as 'Image', i.Description as 'AltText' 
        FROM Category as c inner join Image as i
        on c.ImageId = i.ImageId 
        WHERE c.categoryId = '$categoryId'"; 

    $queries["subcategories"] = 
        "SELECT SubcategoryId, SubcategoryName, s.Description, Filename as 'Image', i.Description as 'AltText' 
        FROM Subcategory as s inner join Image as i
        on s.ImageId = i.ImageId";

    $queries["subcategory"] = 
        "SELECT SubcategoryId, SubcategoryName, s.Description, Filename as 'Image', i.Description as 'AltText' 
        FROM Subcategory as s inner join Image as i
        on s.ImageId = i.ImageId 
        WHERE s.subcategoryId = '$subcategoryId'";

    $queries["users"] = 
        "SELECT userName, userPassword from User";

    $queries["admins"] = 
        "SELECT userName, userPassword from User where IsAdmin = 1";

    $queries["carousel"] = 
        "SELECT c.ImageId, Filename as 'Image', i.Description as 'AltText' 
        FROM CarouselImage AS c JOIN Image as i
        on c.ImageId = i.ImageId";
    // Post queries
        
    $queries["addAdmin"] = 
        "INSERT into User (userName, userPassword, isAdmin) values ('$username', '$password', 1)";

    $queries["addimage"] = 
        "INSERT into Image () values ()";

    $queries["addcategory"] = 
        "INSERT into Category () values ()";

    $queries["addSubcategory"] = 
        "INSERT into Subcategory () values ()";

    $queries["removeuser"] =  
        "DELETE from User where userName = $userName'";
?>