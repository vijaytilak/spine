// configure our routes
spineApp.config(function ($routeProvider, $locationProvider) {
    $routeProvider

        .when('/', {
            templateUrl: 'app/components/home/homeView.hbs',
            controller: 'homeController'
        })
        .when('/index', {
            templateUrl: 'app/components/home/homeView.hbs',
            controller: 'homeController'
        })
        .when('/advanced-datatables', {
            templateUrl: 'pages/advanced-datatables.hbs',
            controller: 'advanced-datatablesController',
            controllerAs: 'adt'
        })

        .when('/animations', {
            templateUrl: 'pages/animations.hbs',
            controller: 'animationsController'
        })

        .when('/bs-carousel', {
            templateUrl: 'pages/bs-carousel.hbs',
            controller: 'bs-carouselController'
        })

        .when('/buttons', {
            templateUrl: 'pages/buttons.hbs',
            controller: 'buttonsController'
        })

        .when('/calendar', {
            templateUrl: 'pages/calendar.hbs',
            controller: 'calendarController'
        })

        .when('/chart-boxes', {
            templateUrl: 'pages/chart-boxes.hbs',
            controller: 'chart-boxesController'
        })

        .when('/chart-js', {
            templateUrl: 'pages/chart-js.hbs',
            controller: 'chart-jsController'
        })

        .when('/chat', {
            templateUrl: 'pages/chat.hbs',
            controller: 'chatController'
        })

        .when('/checklist', {
            templateUrl: 'pages/checklist.hbs',
            controller: 'checklistController'
        })

        .when('/ckeditor', {
            templateUrl: 'pages/ckeditor.hbs',
            controller: 'ckeditorController'
        })

        .when('/collapsable', {
            templateUrl: 'pages/collapsable.hbs',
            controller: 'collapsableController'
        })

        .when('/content-boxes', {
            templateUrl: 'pages/content-boxes.hbs',
            controller: 'content-boxesController'
        })

        .when('/data-tables', {
            templateUrl: 'pages/data-tables.hbs',
            controller: 'data-tablesController'
        })

        .when('/dropzone-uploader', {
            templateUrl: 'pages/dropzone-uploader.hbs',
            controller: 'dropzone-uploaderController'
        })

        .when('/fixed-datatables', {
            templateUrl: 'pages/fixed-datatables.hbs',
            controller: 'fixed-datatablesController'
        })

        .when('/flot-charts', {
            templateUrl: 'pages/flot-charts.hbs',
            controller: 'flot-chartsController'
        })

        .when('/forms-elements', {
            templateUrl: 'pages/forms-elements.hbs',
            controller: 'forms-elementsController'
        })

        .when('/forms-masks', {
            templateUrl: 'pages/forms-masks.hbs',
            controller: 'forms-masksController'
        })

        .when('/forms-validation', {
            templateUrl: 'pages/forms-validation.hbs',
            controller: 'forms-validationController'
        })

        .when('/forms-wizard', {
            templateUrl: 'pages/forms-wizard.hbs',
            controller: 'forms-wizardController'
        })

        .when('/gmaps', {
            templateUrl: 'pages/gmaps.hbs',
            controller: 'gmapsController'
        })

        .when('/helper-classes', {
            templateUrl: 'pages/helper-classes.hbs',
            controller: 'helper-classesController'
        })

        .when('/icons', {
            templateUrl: 'pages/icons.hbs',
            controller: 'iconsController'
        })

        .when('/image-crop', {
            templateUrl: 'pages/image-crop.hbs',
            controller: 'image-cropController'
        })

        .when('/images', {
            templateUrl: 'pages/images.hbs',
            controller: 'imagesController'
        })

        .when('/index-alt', {
            templateUrl: 'pages/index-alt.hbs',
            controller: 'index-altController'
        })

        .when('/inline-editor', {
            templateUrl: 'pages/inline-editor.hbs',
            controller: 'inline-editorController'
        })

        .when('/input-knobs', {
            templateUrl: 'pages/input-knobs.hbs',
            controller: 'input-knobsController'
        })

        .when('/just-gage', {
            templateUrl: 'pages/just-gage.hbs',
            controller: 'just-gageController'
        })

        .when('/labels-badges', {
            templateUrl: 'pages/labels-badges.hbs',
            controller: 'labels-badgesController'
        })

        .when('/lazyload', {
            templateUrl: 'pages/lazyload.hbs',
            controller: 'lazyloadController'
        })

        .when('/loading-feedback', {
            templateUrl: 'pages/loading-feedback.hbs',
            controller: 'loading-feedbackController'
        })

        .when('/mailbox-compose', {
            templateUrl: 'pages/mailbox-compose.hbs',
            controller: 'mailbox-composeController'
        })

        .when('/mailbox-inbox', {
            templateUrl: 'pages/mailbox-inbox.hbs',
            controller: 'mailbox-inboxController'
        })

        .when('/mailbox-single', {
            templateUrl: 'pages/mailbox-single.hbs',
            controller: 'mailbox-singleController'
        })

        .when('/mapael', {
            templateUrl: 'pages/mapael.hbs',
            controller: 'mapaelController'
        })

        .when('/markdown', {
            templateUrl: 'pages/markdown.hbs',
            controller: 'markdownController'
        })

        .when('/modals', {
            templateUrl: 'pages/modals.hbs',
            controller: 'modalsController'
        })

        .when('/morris-charts', {
            templateUrl: 'pages/morris-charts.hbs',
            controller: 'morris-chartsController'
        })

        .when('/multi-uploader', {
            templateUrl: 'pages/multi-uploader.hbs',
            controller: 'multi-uploaderController'
        })

        .when('/nav-menus', {
            templateUrl: 'pages/nav-menus.hbs',
            controller: 'nav-menusController'
        })

        .when('/notifications', {
            templateUrl: 'pages/notifications.hbs',
            controller: 'notificationsController'
        })

        .when('/page-transitions', {
            templateUrl: 'pages/page-transitions.hbs',
            controller: 'page-transitionsController'
        })

        .when('/panel-boxes', {
            templateUrl: 'pages/panel-boxes.hbs',
            controller: 'panel-boxesController'
        })

        .when('/pickers', {
            templateUrl: 'pages/pickers.hbs',
            controller: 'pickersController'
        })

        .when('/pie-gages', {
            templateUrl: 'pages/pie-gages.hbs',
            controller: 'pie-gagesController'
        })

        .when('/popovers-tooltips', {
            templateUrl: 'pages/popovers-tooltips.hbs',
            controller: 'popovers-tooltipsController'
        })

        .when('/progress-bars', {
            templateUrl: 'pages/progress-bars.hbs',
            controller: 'progress-barsController'
        })

        .when('/response-messages', {
            templateUrl: 'pages/response-messages.hbs',
            controller: 'response-messagesController'
        })

        .when('/responsive-datatables', {
            templateUrl: 'pages/responsive-datatables.hbs',
            controller: 'responsive-datatablesController'
        })

        .when('/responsive-tables', {
            templateUrl: 'pages/responsive-tables.hbs',
            controller: 'responsive-tablesController'
        })

        .when('/scrollbars', {
            templateUrl: 'pages/scrollbars.hbs',
            controller: 'scrollbarsController'
        })

        .when('/sliders', {
            templateUrl: 'pages/sliders.hbs',
            controller: 'slidersController'
        })

        .when('/social-boxes', {
            templateUrl: 'pages/social-boxes.hbs',
            controller: 'social-boxesController'
        })

        .when('/sortable-elements', {
            templateUrl: 'pages/sortable-elements.hbs',
            controller: 'sortable-elementsController'
        })

        .when('/sparklines', {
            templateUrl: 'pages/sparklines.hbs',
            controller: 'sparklinesController'
        })

        .when('/summernote', {
            templateUrl: 'pages/summernote.hbs',
            controller: 'summernoteController'
        })

        .when('/tables', {
            templateUrl: 'pages/tables.hbs',
            controller: 'tablesController'
        })

        .when('/tabs', {
            templateUrl: 'pages/tabs.hbs',
            controller: 'tabsController'
        })

        .when('/tile-boxes', {
            templateUrl: 'pages/tile-boxes.hbs',
            controller: 'tile-boxesController'
        })

        .when('/timeline', {
            templateUrl: 'pages/timeline.hbs',
            controller: 'timelineController'
        })

        .when('/vector-maps', {
            templateUrl: 'pages/vector-maps.hbs',
            controller: 'vector-mapsController'
        })

        .when('/xcharts', {
            templateUrl: 'pages/xcharts.hbs',
            controller: 'xchartsController'
        })

        .when('/admin-blog', {
            templateUrl: 'pages/admin-blog.hbs',
            controller: 'admin-blogController'
        })

        .when('/admin-pricing', {
            templateUrl: 'pages/admin-pricing.hbs',
            controller: 'admin-pricingController'
        })

        .when('/auto-menu', {
            templateUrl: 'pages/auto-menu.hbs',
            controller: 'auto-menuController'
        })

        .when('/faq-section', {
            templateUrl: 'pages/faq-section.hbs',
            controller: 'faq-sectionController'
        })

        .when('/invoice', {
            templateUrl: 'pages/invoice.hbs',
            controller: 'invoiceController'
        })

        .when('/portfolio-gallery', {
            templateUrl: 'pages/portfolio-gallery.hbs',
            controller: 'portfolio-galleryController'
        })

        .when('/portfolio-masonry', {
            templateUrl: 'pages/portfolio-masonry.hbs',
            controller: 'portfolio-masonryController'
        })

        .when('/slidebars', {
            templateUrl: 'pages/slidebars.hbs',
            controller: 'slidebarsController'
        })

        .when('/view-profile', {
            templateUrl: 'pages/view-profile.hbs',
            controller: 'view-profileController'
        })

        .otherwise({
            templateUrl: 'app/shared/errors/404.hbs',
            controller: 'errorController',
            animation: 'slide'
        });

    /* Redirect outside the views
     .otherwise({
     controller: function () {
     window.location.replace('/spine/public/app/shared/errors/error.html');
     },
     template: "<div></div>"
     });*/

    // use the HTML5 History API - to remove #
    $locationProvider.html5Mode(true);

});