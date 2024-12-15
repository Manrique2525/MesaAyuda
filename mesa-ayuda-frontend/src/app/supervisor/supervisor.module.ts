import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { SupervisorTableComponent } from './components/supervisor-table/supervisor-table.component';
import { SupervisorEditComponent } from './components/supervisor-edit/supervisor-edit.component';
import { SupervisorCreateComponent } from './components/supervisor-create/supervisor-create.component';
import { SupervisorIndexComponent } from './supervisor-index/supervisor-index.component';



@NgModule({
  declarations: [
    SupervisorTableComponent,
    SupervisorEditComponent,
    SupervisorCreateComponent,
    SupervisorIndexComponent
  ],
  imports: [
    CommonModule
  ],
  exports: [
    SupervisorIndexComponent
  ]
})
export class SupervisorModule { }
