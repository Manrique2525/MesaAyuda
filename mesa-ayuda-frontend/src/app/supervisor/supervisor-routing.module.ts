import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { SupervisorIndexComponent } from './supervisor-index/supervisor-index.component';
import { SupervisorTableComponent } from './components/supervisor-table/supervisor-table.component';
import { SupervisorCreateComponent } from './components/supervisor-create/supervisor-create.component';
import { SupervisorEditComponent } from './components/supervisor-edit/supervisor-edit.component';

const routes: Routes = [
  {
    path: '',  // Ruta principal de Supervisor
    component: SupervisorIndexComponent,
    children: [
      {
        path: '',  // Ruta predeterminada cuando acceden a "supervisor"
        redirectTo: 'tabla',  // Redirige automáticamente a la ruta 'tabla'
        pathMatch: 'full'
      },
      {
        path: 'tabla', // Ruta para cargar la tabla
        component: SupervisorTableComponent
      },
      {
        path: 'crear', // Ruta para crear un supervisor
        component: SupervisorCreateComponent
      },
      {
        path: 'editar', // Ruta para editar un supervisor
        component: SupervisorEditComponent
      },
      {
        path: '**', // Cualquier otra ruta no válida
        redirectTo: 'tabla' // Redirige a la ruta 'tabla'
      }
    ]
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class SupervisorRoutingModule { }
