(function(){
    var app = angular.module('FluffyButtApp');
  
    app.factory('cartService', function() {

        var cartService = {
            productCategories : [
                { name: "Custom Cookies", products: [] },
                { name: "Pre-designed Cookies", products: [] },
                { name: "Bijou Jars", products: []}
            ],
            cartTotal : 0,
            sumFunc : function(total, product){
                return total + (product.price * product.quantity);
            },
            updateTotal : function() {
                this.cartTotal = 0;
                for (var category of this.productCategories)
                    this.cartTotal += category.products.reduce(this.sumFunc, 0);
            },
            findDuplicateProduct: function(product, categoryIndex){
                var products = this.productCategories[categoryIndex].products;
                for(p of products){
                    if(p.name == product.Name){
                        return p;
                    }
                }
            }
          };

        var persistedCartData = angular.fromJson(sessionStorage.cartService);

        if (persistedCartData){
            cartService.productCategories = persistedCartData.productCategories;
            cartService.cartTotal = persistedCartData.cartTotal;
        }
  
        return cartService;
    });
  }())
  