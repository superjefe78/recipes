import { Component, OnInit, Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Component({
  selector: 'app-shoppinglist',
  templateUrl: './shoppinglist.component.html',
  styleUrls: ['./shoppinglist.component.scss']
})
  @Injectable()
export class ShoppinglistComponent implements OnInit {

  constructor(private http: HttpClient) {
    // debugger 
  }


  dtOptions: DataTables.Settings = {};

  ngOnInit(): void {

    this.dtOptions = {
      'ajax': { url: 'http://localhost:8000/api/shoplist', dataSrc: "" },
      columns: [
        { title: 'id', data: 'id' },
        { title: 'user_id', data: 'user_id' },
        { title: 'status_id', data: 'status_id' },
        { title: 'name', data: 'name' },
        { title: 'long_name', data: 'long_name' },
        { title: 'percent_completed', data: 'percent_completed' },
        { title: 'planned_shopping_date', data: 'planned_shopping_date' },
        { title: 'actual_shopping_date', data: 'actual_shopping_date' },
        { title: 'max_budget_amt', data: 'max_budget_amt' },
        { title: 'planned_spend_amt', data: 'planned_spend_amt' },
        { title: 'actual_spent_amt', data: 'actual_spent_amt' },
        { title: 'likeability_id', data: 'likeability_id' },
        { title: 'likes', data: 'likes' },
        { title: 'dislikes', data: 'dislikes' },
        { title: 'tags', data: 'tags' },
        { title: 'comments', data: 'comments' },
        { title: 'image_id', data: 'image_id' }
      ]
      , dom: 'Bfrtip'
    };
  }

}
