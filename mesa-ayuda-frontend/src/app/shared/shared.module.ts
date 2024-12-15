import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { SiderbarComponent } from './components/siderbar/siderbar.component';
import { HeaderComponent } from './components/header/header.component';
import { AppRoutingModule } from '../app-routing.module';



@NgModule({
  declarations: [
    SiderbarComponent,
    HeaderComponent
  ],
  imports: [
    CommonModule,
    AppRoutingModule
  ]
})
export class SharedModule { }
