spineApp.controller('mainController', function ($scope) {

});

spineApp.controller('indexController', function ($scope, productService) {
    alert('inside');

    var callToAddToProductList = function(currObj){
        productService.addProduct(currObj);
    };

    callToAddToProductList('prod1');

});

spineApp.controller('advanced-datatablesController', function ($scope, $rootScope, productService) {
    alert('inside dt');

    this.model = productService.getProducts();


    //On load - Set page specific transition
    $rootScope.pageTransition = 'pt-page-moveFromLeftFade-init';

    //On Unload
    $scope.$on('$locationChangeStart', function (event) {
        var answer = confirm("Are you sure you want to leave advanced dt page?")
        if (!answer) {
            event.preventDefault();
        } else {
            $rootScope.pageTransition = 'pt-page-moveFromBottomFade-init';
        }
    });


});