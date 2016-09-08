
spineApp.service('menuService', function(regularStepService) {

    var menuItems = regularStepService.getAllSteps();

    var getMenuItems = function(){
        return menuItems;
    };

    return {
        getMenuItems: getMenuItems
    };


});