(function(){
    var app = angular.module('FluffyButtApp');
  
    app.factory('cartService', function() {
      var cartService = {
        products : [
            { name: "Custom Cookies", items: [{ name: 'Mario Cookies', price: 3.5, quantity: 12 }] },
            { name: "Pre-designed Cookies", items: [{ name: 'Harry Potter Cookies', price: 2.5, quantity: 4 }, { name: "Unicorn Cookies", price: 1.4, quantity: 6 }] },
            { name: "Bijou Jars", items: []}
        ],
        cartTotal : 0,
        sumFunc : function(total, item){
            return total + (item.price * item.quantity);
        },
        updateTotal : function() {
            this.cartTotal = 0;
            for (var product of this.products)
                this.cartTotal += product.items.reduce(this.sumFunc, 0);
        }
      };
  
      return cartService;
    });
  }())
  