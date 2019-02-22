import { BrowserModule } from '@angular/platform-browser';
import { HttpClientModule } from '@angular/common/http';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { DataTablesModule } from 'angular-datatables';
import { ShoppinglistComponent } from './components/shoppinglist/shoppinglist.component';
import { IngredientsComponent } from './components/ingredients/ingredients.component';
import { UtensilsComponent } from './components/utensils/utensils.component';
import { RecipesComponent } from './components/recipes/recipes.component';
import { HeaderComponent } from './components/header/header.component';
import { FooterComponent } from './components/footer/footer.component';
import { HomeComponent } from './components/home/home.component';

@NgModule({
  declarations: [
    AppComponent,
    RecipesComponent,
    IngredientsComponent,
    UtensilsComponent,
    HeaderComponent,
    FooterComponent,
    HomeComponent,
    ShoppinglistComponent
  ],
  imports: [
    BrowserModule,
    HttpClientModule,
    AppRoutingModule,
    DataTablesModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
