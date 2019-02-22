import { Component, OnInit, Injectable } from '@angular/core';
import { Recipe } from '../../recipe';
import { HttpClient } from '@angular/common/http';

@Component({
  selector: 'app-utensils',
  templateUrl: './utensils.component.html',
  styleUrls: ['./utensils.component.scss']
})

@Injectable()
export class UtensilsComponent implements OnInit {

  constructor(private http: HttpClient) { }
  dtOptions: DataTables.Settings = {};

  ngOnInit(): void {

    this.dtOptions = {
      'ajax': { url: 'http://localhost:8000/api/utensils', dataSrc: "" },
      columns: [
        {
          title: 'ID',
          data: 'id'
        }, {
          title: 'Utensil Name',
          data: 'name'
        }
      ]
    };

  }



}
