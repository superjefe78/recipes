import { Component } from '@angular/core';

@Component({
    selector: 'recipes',
    templateUrl: 'recipes.component.html'
})

export class Recipe {

    id: number;
    name: string;
}