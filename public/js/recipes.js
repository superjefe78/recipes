var myApp = angular.module('the-app',[]);

myApp.controller('myctrl', function ($scope) {

    $scope.addVal = true;

    $scope.ingredientId = '0';
    $scope.doStuff = function() 
    {
        alert('Hello World!!! ' + $scope.ingredientId);
        $.get("addrecipeingredients/" + $scope.ingredientId, function (data) 
        {
            $(".result").html(data);
            alert("Load was performed.");
        });
    }
    $scope.doStuff2 = function() 
    {
        $scope.addVal = !$scope.addVal;
    }
});


