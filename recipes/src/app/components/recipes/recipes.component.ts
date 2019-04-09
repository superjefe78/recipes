import { Component, OnInit, Injectable } from '@angular/core';
import { Recipe } from '../../recipe';
import { HttpClient } from '@angular/common/http';

@Component({
  selector: 'app-recipes',
  templateUrl: './recipes.component.html',
  styleUrls: ['./recipes.component.scss']
})
@Injectable()
export class RecipesComponent implements OnInit {
  recipe1 = "ChickenNugget";
  recipe: Recipe = {
    id: 1,
    name: 'Windstorm'
  };
  constructor(private http: HttpClient) {
    // debugger 
   }


  dtOptions: DataTables.Settings = {};

  ngOnInit(): void {
    this.http.get('http://localhost:8000/api/recipetypes').subscribe((res)=>
    {
      console.log(res);
      var myVar = res[0];
      let myVar2 = res[0].name;
      this.recipe.name = res[0].name;
      this.recipe1 = res[0].name;
      
    });



    this.dtOptions = {
      'ajax': {url:'http://localhost:8000/api/recipesfull',dataSrc: ""},
      columns: [
      {
      //   title: 'ID',
      //   data: 'id'
      // }, {
        title: 'Recipe Name',
        data: 'name'
      }, 
      {
        title: 'Recipe action',
        data: 'long_name',
        render: function (data, type, row, meta)
        { return '<button (click)="nnn()">' + row.name +'-'+ row.id +'</button>'}
      }, 
      { title: 'Recipe Type', data: 'recipe_type.name' },
      { title: 'Meal Type', data: 'meal_type.name' },
      { title: 'seasonal', data: 'seasonal' },
      { title: 'season_id', data: 'season_id' },
      { title: 'spicy_level_id', data: 'spicy_level_id' },
      { title: 'likeability_id', data: 'likeability_id' },
      { title: 'likes', data: 'likes' },
      { title: 'dislikes', data: 'dislikes' },
      { title: 'preparation_time_units', data: 'preparation_time_units' },
      { title: 'preparation_time_unit_type_id', data: 'preparation_time_unit_type_id' },
      { title: 'cooking_time_units', data: 'cooking_time_units' },
      { title: 'cooking_time_unit_type_id', data: 'cooking_time_unit_type_id' },
      { title: 'difficulty_level_id', data: 'difficulty_level_id' },
      { title: 'recipe_life_units', data: 'recipe_life_units' },
      { title: 'recipe_life_unit_type_id', data: 'recipe_life_unit_type_id' },
      { title: 'servings_per_recipe', data: 'servings_per_recipe' },
      { title: 'people_fed_per_serving', data: 'people_fed_per_serving' },
      { title: 'cals_per_serving', data: 'cals_per_serving' },
      { title: 'total_cals_per_recipe', data: 'total_cals_per_recipe' },
      { title: 'perishable', data: 'perishable' },
      { title: 'refrigerate', data: 'refrigerate' },
      { title: 'expiration_date', data: 'expiration_date' },
      { title: 'allergen', data: 'allergen' },
      { title: 'allergen_type_id', data: 'allergen_type_id' },
      { title: 'tags', data: 'tags' },
      { title: 'comments', data: 'comments' },
      { title: 'image_id', data: 'image_id' }     
    ]
      ,  dom: 'Bfrtip'
    };
  }
nnn()
{
  console.log('clicjed');
}

}
