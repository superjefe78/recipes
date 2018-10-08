<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script  type="text/javascript" src="js/recipes.js"></script>
    <title>Recipes</title>
</head>
<body ng-app='the-app'  ng-controller='myctrl' ng-init="[name1='Bob', cities=[{id:'1',cityname:'LA'},{id:'2',cityname:'Chi'},{id:'3',cityname:'OTown'},{id:'4',cityname:'BENTONVILLE'},{id:'5',cityname:'centerton'},{id:'6',cityname:'NYC'}]]">
    <div>
        <label>Name:</label>
        <input type="text" ng-model="name1">
        <span ng-bind="name1"></span> 
        <hr>
        <p>@{{name1}}</p>
        <p>{{$recipe1}}</p> 
    </div>
    <div>
    <input type="text" ng-model="cityname"></span> 
    <input type="button" ng-click="sortBy='cityname';reverse=!reverse" value="Sort me">
    <!--   limitTo:2 | -->
    <ul>
      <li ng-repeat="city in cities | filter: cityname | orderBy:sortBy:reverse">
            @{{city.id | currency}} - @{{city.cityname | uppercase}}

      </li>
    </ul>
    </div>
    
    <script>
//     var myApp = angular.module('the-app',[]);

// myApp.controller('myctrl', function ($scope) {

//     $scope.name1 ="";
    
// });
    </script>
</body>
</html>