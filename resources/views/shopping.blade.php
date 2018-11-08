<!DOCTYPE html>
<html lang="en" >
    <head>
        <title>Shopping Lists</title>
    </head>
    <body>
            <!-- <p>{{-- $var1 --}}</p> -->
        <div class="container">
            <div>
            The shopping lists are:
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
        </div>
    </body>
</html>