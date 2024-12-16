import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { LoginComponent } from './auth/components/login/login.component';
import { SiderbarComponent } from './shared/components/siderbar/siderbar.component';

const routes: Routes = [
  {
    path: 'login',
    component: LoginComponent
  },
  {
    path: 'siderbar',
    component: SiderbarComponent,
    children: [
      {
        path: 'supervisor',
        loadChildren: () => import('./supervisor/supervisor.module').then(m => m.SupervisorModule)
      }
    ]
  },
  {
    path: '**',
    redirectTo: 'siderbar'
  }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
