<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script  type="text/javascript" src="../../js/recipes.js"></script>
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
        The Ingredient List for {{$var1->name}}:
        <ul class="list-group">
            @foreach ($var2 as $item)
            <li class="list-group-item">
                {{$item->name }}
            </li>
            @endforeach
        </ul>
    </div>
    <form action="addrecipeingredient/">
        <div>
            <h2>Add a missing ingredient below</h2>
        </div>
        <div ng-show="addVal==true">
            <!-- <select ng-options="size as size.name for size in sizes" ng-model="item" ng-change="update()"></select> -->
            <select ng-model="ingredientId" >
                <option value="0">Select Ingredient</option>
                @foreach ($var3 as $item3) 
                <option value="{{$item3->id}}">{{$item3->name }}</option>
                @endforeach
            <select>
        </div>
        <div>
            <input type="submit" ng-click="doStuff();doStuff2();" value="Add Ingredient">
        </div>
    </form>
    <script>
//     var myApp = angular.module('the-app',[]);

// myApp.controller('myctrl', function ($scope) {

//     $scope.name1 ="";
    
// });
    </script>
</body>
</html>