var app = angular.module('myApp', []);
app.controller('myController', function ($scope) {

    // JSON ARRAY TO POPULATE TABLE.
    $scope.tableArray =
        [

        ];

    // GET VALUES FROM INPUT BOXES AND ADD A NEW ROW TO THE TABLE.
    $scope.addRow = function () {
        if ($scope.name != undefined && $scope.attendenc != undefined) {
            var table = [];
            table.name = $scope.name;
            table.grade = $scope.attendenc;

            $scope.tableArray.push(table);

            // CLEAR TEXTBOX.
            $scope.name = null;
            $scope.attendenc = null;
        }
    };

    // REMOVE SELECTED ROW(s) FROM TABLE.
    $scope.removeRow = function () {
        var arrTable = [];
        angular.forEach($scope.tableArray, function (value) {
            if (!value.Remove) {
                arrTable.push(value);
            }
        });
        $scope.tableArray = arrTable;
    };

    // FINALLY SUBMIT THE DATA.
    $scope.submit = function () {
        var arrTable = [];
        angular.forEach($scope.tableArray, function (value) {
            arrTable.push('Name:' + value.name + ', Grade:' + value.attendenc);
        });
        $scope.display = arrTable;
    };
});