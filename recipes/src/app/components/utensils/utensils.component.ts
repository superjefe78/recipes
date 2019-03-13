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
        },
        { title: 'long_name', data: 'long_name' },
        { title: 'utensil_type_id', data:'utensil_type_id'},
        { title: 'presentation_type_id', data:'presentation_type_id'},
        { title: 'purchasing_unit_type_id', data:'purchasing_unit_type_id'},
        { title: 'likeability_id', data:'likeability_id'},
        { title: 'likes', data:'likes'},
        { title: 'dislikes', data:'dislikes'},
        { title: 'tags', data:'tags'},
        { title: 'tags', data: 'tags' },
        { title: 'comments', data: 'comments' },
        { title: 'image_id', data: 'image_id' },
      ]
    };

  }



}
