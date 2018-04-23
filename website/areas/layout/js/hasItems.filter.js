var app = angular.module('FluffyButtApp');
app.filter('hasItems', function () {
    return function (products) {
        var haveItems = [];
        for (var product of products){
            if (product.items.length > 0)
                haveItems.push(product);
        }
        return haveItems;
    };
});