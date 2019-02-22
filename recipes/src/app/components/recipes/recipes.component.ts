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

    this.dtOptions = {
      'ajax': {url:'http://localhost:8000/api/recipes',dataSrc: ""},
      columns: [
        {
        title: 'ID',
        data: 'id'
      }, {
        title: 'Recipe Name',
        data: 'name'
      }
    ]
    };
  }

}
