spineApp.controller('homeController', function ($scope, productService) {
    alert('inside home contr');

    var callToAddToProductList = function(currObj){
        productService.addProduct(currObj);
    };

    callToAddToProductList('prod1');

});