/**
 * Home Controller - Wizard
 *
 * Routing for Steps
 */

spineApp.controller('homeController', ['$scope','$rootScope','regularStepService','orderByFilter', function($scope, $rootScope, regularStepService, orderBy) {

    var regularJobSteps = regularStepService.getAllSteps();

    $scope.select = function(stepObj) {
        $scope.regularJobSteps.push(stepObj);
        $scope.regularJobSteps = orderBy($scope.regularJobSteps, $scope.propertyName, $scope.reverse);
    };

    $scope.deselect=function(stepObj){
        var index=$scope.regularJobSteps.indexOf(stepObj);
        $scope.regularJobSteps.splice(index,1);
    }

}]);
