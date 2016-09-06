/**
 * Home Controller - Wizard
 *
 * Routing for Steps
 */
spineApp.controller('homeController', function ($scope, $location) {
    $scope.model = {};
    $scope.steps = [
        {
            template: 'layouts/vlayout/modules/Project/wizardApp/html/step1.html',
            title: 'step1',
            hasForm: true,
        },
        {
            template: 'layouts/vlayout/modules/Project/wizardApp/html/step2.html',
            title: 'step2',
            hasForm: true,
        }
    ];

    $scope.cancel = function () {
        alert('Cancel has been called. You are going to be redirected home!');
    };

    $scope.finish = function () {
        alert('Finish has been called. You are going to be redirected home!');
    };
});

/**
 * Step Controller
 *
 * multiStepFormInstance.getActiveStep();
 * multiStepFormInstance.setValidity(true,2);
 */
spineApp.controller('IsolatedStepCtrl', [
    '$scope',
    'multiStepFormInstance',
    'multiStepFormScope',
    function ($scope, multiStepFormInstance, mmultiStepFormScope) {
        $scope.model = angular.copy(mmultiStepFormScope.model);

        $scope.$on('$destroy', function () {
            mmultiStepFormScope.model = angular.copy($scope.model);
        });
    }
])