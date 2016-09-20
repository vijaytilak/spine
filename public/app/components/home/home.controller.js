/**
 * Home Controller - Wizard
 *
 * Routing for Steps
 */

spineApp.controller('homeController', function($scope, $rootScope, stepService, dialogs) {

    /**
     * Select Components
     * @type {Array}
     */
    $scope.allSteps = stepService.getAllSteps();
    $scope.isSelected = stepService.getSelectedAttr();

    $scope.toggleSelection = function(index) {
        $scope.isSelected[index] = stepService.toggleSelection(index);
    };

    $scope.setRecordJobType = function (jobType) {
        var header = 'Change : Job Type';
        var msg = '<div class="alert alert-warning"><div class="bg-orange alert-icon"><i class="glyph-icon icon-warning"></i></div>' +
            '<div class="alert-content"><h4 class="alert-title">All user inputs will be Cleared & Reset.</h4><p>Are you sure you want to proceed with changing the Job Type?</p></div>' +
            '</div>';

        var dlg = dialogs.confirm(header, msg);
        dlg.result.then(function(btn){
            $rootScope.record.jobType = jobType;
            $scope.confirmed = 'Job Type Changed to '+jobType;
        },function(btn){
            $scope.confirmed = 'Operation cancelled!';
        });
    };



});
