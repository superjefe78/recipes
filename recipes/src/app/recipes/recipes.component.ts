import {
  Component, OnInit, Injectable } from '@angular/core';
import { Recipe } from '../recipe';
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

//     let stuff = this.http.get('http://localhost:8000/api/ingredients' )
//     // .subscribe((data: Recipe) => this.recipe = {
//     //     id: data['id'],
//     //     name:  data['name']
//     // });
//     .subscribe(data => {
// console.log(data);   });
// //}; 
    // debugger        

    this.dtOptions = {
      // ajax: 'data/data.json',
      ajax: 'http://localhost:8000/api/ingredients',
      columns: [
        {
        title: 'ID',
        data: 'id'
      }, {
        title: 'Ingredient Name',
        data: 'name'
      }, {
          title: 'Long Name',
        data: 'long_name'
      }]
    };
  }

}
