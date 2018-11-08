<!DOCTYPE html>
<html lang="en" >
    <head>
        <title>Ingredients</title>
    </head>
    <body>
            <!-- <p>{{-- $var1 --}}</p> -->
        <div>
        The ingredients are:
            <ul>
            @foreach ($var1 as $ingredient)
            <li>
                {{ $ingredient->name }}
            </li>
            @endforeach

               

            </ul>
        </div>
            <div>
    <a href="/ingredientlist" >Ingredients</a>
    </div>
    <div>
    <a href="/recipelist"> Recipes</a>
    </div>
    <div>
    <a href="/shoppinglist">Shopping List</a>
    </div>

    </body>
</html>