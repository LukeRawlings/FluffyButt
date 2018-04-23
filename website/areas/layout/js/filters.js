var app = angular.module('FluffyButtApp');

app.filter('hasProducts', function () {
    return function (productCategories) {
        var haveProducts = [];
        for (var category of productCategories){
            if (category.products.length > 0)
                haveProducts.push(category);
        }
        return haveProducts;
    };
});

app.filter('favoritesFilter', function () {
    return function (products) {
        console.log(products);
        var arefavorites = [];
        for (var product of products){
            if(product.ProductCategoryName == "Pre-designed Cookies")
                arefavorites.push(product);
        }
        return arefavorites;
    };
});