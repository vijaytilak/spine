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

spineApp.controller('animationsController', function ($scope) {

});

spineApp.controller('bs-carouselController', function ($scope) {

});

spineApp.controller('buttonsController', function ($scope) {

});

spineApp.controller('calendarController', function ($scope) {

});

spineApp.controller('chart-boxesController', function ($scope) {

});

spineApp.controller('chart-jsController', function ($scope) {

});

spineApp.controller('chatController', function ($scope) {

});

spineApp.controller('checklistController', function ($scope) {

});

spineApp.controller('ckeditorController', function ($scope) {

});

spineApp.controller('collapsableController', function ($scope) {

});

spineApp.controller('content-boxesController', function ($scope) {

});

spineApp.controller('data-tablesController', function ($scope) {

});

spineApp.controller('dropzone-uploaderController', function ($scope) {

});

spineApp.controller('fixed-datatablesController', function ($scope) {

});

spineApp.controller('flot-chartsController', function ($scope) {

});

spineApp.controller('forms-elementsController', function ($scope) {

});

spineApp.controller('forms-masksController', function ($scope) {

});

spineApp.controller('forms-validationController', function ($scope) {

});

spineApp.controller('forms-wizardController', function ($scope) {

});

spineApp.controller('gmapsController', function ($scope) {

});

spineApp.controller('helper-classesController', function ($scope) {

});

spineApp.controller('iconsController', function ($scope) {

});

spineApp.controller('image-cropController', function ($scope) {

});

spineApp.controller('imagesController', function ($scope) {

});

spineApp.controller('index-altController', function ($scope) {

});

spineApp.controller('inline-editorController', function ($scope) {

});

spineApp.controller('input-knobsController', function ($scope) {

});

spineApp.controller('just-gageController', function ($scope) {

});

spineApp.controller('labels-badgesController', function ($scope) {

});

spineApp.controller('lazyloadController', function ($scope) {

});

spineApp.controller('loading-feedbackController', function ($scope) {

});

spineApp.controller('mailbox-composeController', function ($scope) {

});

spineApp.controller('mailbox-inboxController', function ($scope) {

});

spineApp.controller('mailbox-singleController', function ($scope) {

});

spineApp.controller('mapaelController', function ($scope) {

});

spineApp.controller('markdownController', function ($scope) {

});

spineApp.controller('modalsController', function ($scope) {

});

spineApp.controller('morris-chartsController', function ($scope) {

});

spineApp.controller('multi-uploaderController', function ($scope) {

});

spineApp.controller('nav-menusController', function ($scope) {

});

spineApp.controller('notificationsController', function ($scope) {

});

spineApp.controller('page-transitionsController', function ($scope) {

});

spineApp.controller('panel-boxesController', function ($scope) {

});

spineApp.controller('pickersController', function ($scope) {

});

spineApp.controller('pie-gagesController', function ($scope) {

});

spineApp.controller('popovers-tooltipsController', function ($scope) {

});

spineApp.controller('progress-barsController', function ($scope) {

});

spineApp.controller('response-messagesController', function ($scope) {

});

spineApp.controller('responsive-datatablesController', function ($scope) {

});

spineApp.controller('responsive-tablesController', function ($scope) {

});

spineApp.controller('scrollbarsController', function ($scope) {

});

spineApp.controller('slidersController', function ($scope) {

});

spineApp.controller('social-boxesController', function ($scope) {

});

spineApp.controller('sortable-elementsController', function ($scope) {

});

spineApp.controller('sparklinesController', function ($scope) {

});

spineApp.controller('summernoteController', function ($scope) {

});

spineApp.controller('tablesController', function ($scope) {

});

spineApp.controller('tabsController', function ($scope) {

});

spineApp.controller('tile-boxesController', function ($scope) {

});

spineApp.controller('timelineController', function ($scope) {

});

spineApp.controller('vector-mapsController', function ($scope) {

});

spineApp.controller('xchartsController', function ($scope) {

});

spineApp.controller('admin-blogController', function ($scope) {

});

spineApp.controller('admin-pricingController', function ($scope) {

});

spineApp.controller('auto-menuController', function ($scope) {

});

spineApp.controller('faq-sectionController', function ($scope) {

});

spineApp.controller('invoiceController', function ($scope) {

});

spineApp.controller('portfolio-galleryController', function ($scope) {

});

spineApp.controller('portfolio-masonryController', function ($scope) {

});

spineApp.controller('slidebarsController', function ($scope) {

});

spineApp.controller('view-profileController', function ($scope) {

});


