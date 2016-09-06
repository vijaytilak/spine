/**
 * Regular Job Controller - Wizard
 *
 */
spineApp.controller('regularJobController', function ($scope, $location) {
    $scope.model = {};
    $scope.regularJobSteps = [
        {
            template: 'regular 1',
            title: 'step1',
            hasForm: true,
        },
        {
            template: 'regular 2',
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