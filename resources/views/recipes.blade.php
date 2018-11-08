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
    <a href="/ingredientlist" >Ingredients</a>
    </div>
    <div>
    <a href="/recipelist"> Recipes</a>
    </div>
    <div>
    <a href="/shoppinglist">Shopping List</a>
    </div>
           <div>
        The recipes are:
            <ul>
            @foreach ($var1 as $item)
            <li>
                <a href="recipeIngredients/{{$item->id}}">{{ $item->name }}</a>
            </li>
            @endforeach

               

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