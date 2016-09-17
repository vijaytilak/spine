spineApp.controller('indexController', function ($scope,$rootScope,$location,regularStepService) {

    $scope.steps = regularStepService.getAllSteps();

    /**
     * Get Class to show Form Validity
     *
     * @param hasForm
     * @param isValid
     * @returns {*}
     */
    $scope.getIsValidClass = function (isValid) {
        var isValidClass;

        if(isValid==true)
            isValidClass = 'glyph-icon icon-check font-green';
        else if(isValid==false)
            isValidClass = 'glyph-icon icon-close font-red';
        else if(isValid==null)
            isValidClass = 'glyph-icon icon-circle-o';

        return (isValidClass);
    };

    /**
     * Get Class for Active Menu Item
     * @param path
     * @returns {string}
     */
    $scope.getMenuItemClass = function (path) {
        return ($location.path().substr(1, path.length)+'?step='+$rootScope.multiStepFormInstance.getActiveIndex() === path) ? 'menu-active' : 'menu-normal';
    }


});