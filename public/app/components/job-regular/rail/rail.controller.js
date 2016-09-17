/**
 * Regular Job Controller -Rail
 *
 */
spineApp.controller('regularRailController', function ($scope,$rootScope, multiStepFormInstance) {

    /***************Required for all Steps******************/
    $rootScope.multiStepFormInstance = multiStepFormInstance;

    /***************Kendo UI Grid******************/
    $scope.mainGridOptions = {
        dataSource: {
            type: "odata",
            transport: {
                read: "//demos.telerik.com/kendo-ui/service/Northwind.svc/Employees"
            },
            pageSize: 5,
            serverPaging: true,
            serverSorting: true
        },
        sortable: true,
        pageable: true,
        dataBound: function() {
            this.expandRow(this.tbody.find("tr.k-master-row").first());
        },
        columns: [{
            field: "FirstName",
            title: "First Name",
            width: "120px"
        },{
            field: "LastName",
            title: "Last Name",
            width: "120px"
        },{
            field: "Country",
            width: "120px"
        },{
            field: "City",
            width: "120px"
        },{
            field: "Title"
        }]
    };

    $scope.detailGridOptions = function(dataItem) {
        return {
            dataSource: {
                type: "odata",
                transport: {
                    read: "//demos.telerik.com/kendo-ui/service/Northwind.svc/Orders"
                },
                serverPaging: true,
                serverSorting: true,
                serverFiltering: true,
                pageSize: 5,
                filter: { field: "EmployeeID", operator: "eq", value: dataItem.EmployeeID }
            },
            scrollable: false,
            sortable: true,
            pageable: true,
            columns: [
                { field: "OrderID", title:"ID", width: "56px" },
                { field: "ShipCountry", title:"Ship Country", width: "110px" },
                { field: "ShipAddress", title:"Ship Address" },
                { field: "ShipName", title: "Ship Name", width: "190px" }
            ]
        };
    };


/*
    $rootScope.multiStepFormInstance.setValidity(true,3);

    /!**
     * Watch Validity changes in multiStepFormInstance & update isValid in regularStepService
     * ******************************Required for all Steps**********************************
     *!/
    $scope.$watch(function ($scope) {
        return  multiStepFormInstance.steps.map(function (obj) {
            return {"controller": obj.controller, "isValid": obj.valid}
        });
    }, function (val) {
        angular.forEach(val, function(value, key) {
            regularStepService.setStepValidityByController(value.controller, value.isValid);
        });
    }, true);*/


});
