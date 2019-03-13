import { Component, OnInit, Injectable } from '@angular/core';
import { Recipe } from '../../recipe';
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
        },
        { title: 'long_name', data: 'long_name' },
        { title: 'ingredient_type_id', data: 'ingredient_type_id' },
        { title: 'presentation_type_id', data: 'presentation_type_id' },
        { title: 'purchasing_unit_type_id', data: 'purchasing_unit_type_id' },
        { title: 'spicy_level_id', data: 'spicy_level_id' },
        { title: 'likeability_id', data: 'likeability_id' },
        { title: 'likes', data: 'likes' },
        { title: 'dislikes', data: 'dislikes' },
        { title: 'last_purchase_store_id', data: 'last_purchase_store_id' },
        { title: 'last_purchase_paid_price', data: 'last_purchase_paid_price' },
        { title: 'last_purchase_brand_id', data: 'last_purchase_brand_id' },
        { title: 'last_purchase_ts', data: 'last_purchase_ts' },
        { title: 'prefered_purchase_store_id', data: 'prefered_purchase_store_id' },
        { title: 'prefered_purchase_paid_price', data: 'prefered_purchase_paid_price' },
        { title: 'prefered_purchase_brand_id', data: 'prefered_purchase_brand_id' },
        { title: 'prefered_purchase_ts', data: 'prefered_purchase_ts' },
        { title: 'perishable', data: 'perishable' },
        { title: 'refrigerate', data: 'refrigerate' },
        { title: 'shelf_life_units', data: 'shelf_life_units' },
        { title: 'shelf_life_unit_type_id', data: 'shelf_life_unit_type_id' },
        { title: 'allergen', data: 'allergen' },
        { title: 'allergen_type_id', data: 'allergen_type_id' },
        { title: 'tags', data: 'tags' },
        { title: 'comments', data: 'comments' },
        { title: 'image_id', data: 'image_id' }        
      ]
    };

  }

}
