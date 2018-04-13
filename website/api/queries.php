<?php

    $queries = array();

    // Register queries below. If you need additional parameters, register them in queryParameters.php. 

    // Get queries

    $queries["categories"] = "SELECT * FROM Category"; 

    $queries["subcategories"] = "SELECT * FROM Subcategory";
   
    // Post queries
        
    $queries["addcategory"] = 
        "INSERT into Category () values ()";

    $queries["addSubcategory"] = 
        "INSERT into Subcategory () values ()";

?>