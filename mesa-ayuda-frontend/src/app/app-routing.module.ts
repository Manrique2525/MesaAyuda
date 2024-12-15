import { NgModule } from '@angular/core';
import { Route, RouterModule, Routes } from '@angular/router';
import { LoginComponent } from './auth/components/login/login.component';
import { SiderbarComponent } from './shared/components/siderbar/siderbar.component';
import { SupervisorIndexComponent } from './supervisor/supervisor-index/supervisor-index.component';

const routes: Routes = [
  {
    path: 'login',
    component:   LoginComponent
  },
  {
    path: 'siderbar',
    component:   SiderbarComponent,
    children: [
      {
        path: 'supervisor', component: SupervisorIndexComponent
      },
      {
        path: 'profile', component: LoginComponent
      }
    ]
  },
  {
    path: '**',
    redirectTo:   'siderbar'
  }

]



@NgModule({
  imports: [
    RouterModule.forRoot(routes),
  ],
  exports: [
    RouterModule
  ],

})

export class AppRoutingModule {}


