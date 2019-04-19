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
      // { title: 'seasonal', data: 'seasonal' },
      { title: 'Season', data: 'season.name' },
      { title: 'Spicyness Level', data: 'spicy_level.name' },
      { title: 'Likeability', data: 'likeability.name' },
      { title: 'Likes', data: 'likes' },
      { title: 'Dislikes', data: 'dislikes' },
      { title: 'Preparation Time', render: function (data, type, row, meta) 
        {
            if (row.preparation_time_units == null || row.preparation_time_unit_type == undefined || row.preparation_time_unit_type == null
              || row.preparation_time_unit_type.time_unit_text == undefined || row.preparation_time_unit_type.time_unit_text == null) {
              return 'Invalid';
            }
            else {
              return row.preparation_time_units + ' ' + row.preparation_time_unit_type.time_unit_text
            }
          }
        },
      // { title: 'preparation_time_units', data: 'preparation_time_units' },
      // { title: 'preparation_time_unit_type_id', data: 'preparation_time_unit_type.time_unit_text' },
      {
        title: 'Cooking Time', render: function (data, type, row, meta) { 
          if (row.cooking_time_units == null || row.cooking_time_unit_type == undefined|| row.cooking_time_unit_type == null 
            || row.cooking_time_unit_type.time_unit_text == undefined|| row.cooking_time_unit_type.time_unit_text ==null){
            return 'Invalid';
          }
          else{
            return row.cooking_time_units + ' ' + row.cooking_time_unit_type.time_unit_text 
          }
        }
      },
      // { title: 'cooking_time_units', data: 'cooking_time_units' },
      // { title: 'cooking_time_unit_type_id', data: 'cooking_time_unit_type.time_unit_text' },
      { title: 'Difficulty Level', data: 'difficulty_level.name' },
      // { title: 'recipe_life_units', data: 'recipe_life_units' },
      // { title: 'recipe_life_unit_type_id', data: 'recipe_life_unit_type_id' },
        {
          title: 'Recipe Life', render: function (data, type, row, meta) {
            if (row.recipe_life_units == null || row.recipe_life_unit_type == undefined || row.recipe_life_unit_type == null
              || row.recipe_life_unit_type.time_unit_text == undefined || row.recipe_life_unit_type.time_unit_text == null) {
              return 'Invalid';
            }
            else {
              return row.recipe_life_units + ' ' + row.recipe_life_unit_type.time_unit_text
            }
          }
        },
      { title: 'Servings per Recipe', data: 'servings_per_recipe' },
      { title: 'People fed per serving', data: 'people_fed_per_serving' },
      { title: 'Cals per serving', data: 'cals_per_serving' },
      { title: 'Total cals per recipe', data: 'total_cals_per_recipe' },
      { title: 'Perishable', render: function (data, type, row, meta) {return row.perishable ===1?'Yes':'No'; }},
      { title: 'Refrigerate', render: function (data, type, row, meta) {return row.refrigerate ===1?'Yes':'No'; }},
      { title: 'Expiration Date', data: 'expiration_date' },
      { title: 'Contains Allergens', render: function (data, type, row, meta) {return row.allergen ===1?'Yes':'No'; }},
      { title: 'Tags', data: 'tags' },
      { title: 'Comments', data: 'comments' },
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
