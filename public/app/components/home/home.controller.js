/**
 * Home Controller - Wizard
 *
 * Routing for Steps
 */

spineApp.controller('homeController', function($scope, $rootScope, stepService, ngToast, SweetAlert) {

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

        if(jobType != $rootScope.record.jobType) {

            SweetAlert.swal({
                    title: "Change Job Type?",
                    text: "All user inputs will be Cleared & Reset!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#60c0ce", confirmButtonText: "Yes, Change it!",
                    cancelButtonText: "No, cancel pls!",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function (isConfirm) {
                    if (isConfirm) {
                        $rootScope.record.jobType = jobType;
                        SweetAlert.swal("Updated!", "Job Type changed to " + jobType, "success");
                        // create a simple toast:
                        ngToast.create("Job Type changed to " + jobType);
                    } else {
                        SweetAlert.swal("Cancelled", "Job Type remains Unchanged.", "error");
                    }
                });
        } else {
            SweetAlert.swal("Your Job Type is already "+$rootScope.record.jobType);
        }
    };
});
