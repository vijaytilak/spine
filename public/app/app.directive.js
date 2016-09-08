spineApp.directive('historyBack', function () {
    return {
        restrict: 'E',
        template: '<button class="btn btn-lg btn-success">Return to previous page</button>',
        link: function(scope, element, attrs) {
            $(element[0]).on('click', function() {
                history.back();
            });
        }
    };
});