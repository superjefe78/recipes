import { Component, OnInit, Injectable } from '@angular/core';
import { Recipe } from '../recipe';
import { HttpClient } from '@angular/common/http';

@Component({
  selector: 'app-ingredients',
  templateUrl: './ingredients.component.html',
  styleUrls: ['./ingredients.component.scss']
})

@Injectable()
export class IngredientsComponent implements OnInit {

  constructor(private http: HttpClient) { }

  dtOptions: DataTables.Settings = {};

  ngOnInit(): void {

       this.dtOptions = {
      'ajax': { url: 'http://localhost:8000/api/ingredients', dataSrc: "" },
      columns: [
        {
          title: 'ID',
          data: 'id'
        }, {
          title: 'Ingredient Name',
          data: 'name'
        }
      ]
    };

  }

}
