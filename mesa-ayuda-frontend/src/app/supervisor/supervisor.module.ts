import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterModule } from '@angular/router'; // Asegúrate de tener RouterModule aquí también
import { SupervisorTableComponent } from './components/supervisor-table/supervisor-table.component';
import { SupervisorEditComponent } from './components/supervisor-edit/supervisor-edit.component';
import { SupervisorCreateComponent } from './components/supervisor-create/supervisor-create.component';
import { SupervisorIndexComponent } from './supervisor-index/supervisor-index.component';
import { SupervisorRoutingModule } from './supervisor-routing.module'; // Importa el módulo de rutas hijo

@NgModule({
  declarations: [
    SupervisorTableComponent,
    SupervisorEditComponent,
    SupervisorCreateComponent,
    SupervisorIndexComponent
  ],
  imports: [
    CommonModule,
    SupervisorRoutingModule  // Aquí se manejan las rutas específicas de supervisor
  ],
  exports: [
    SupervisorIndexComponent
  ]
})
export class SupervisorModule { }
