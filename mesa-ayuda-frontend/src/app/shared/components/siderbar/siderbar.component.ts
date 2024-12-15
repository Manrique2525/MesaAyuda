import { Component } from '@angular/core';

@Component({
  selector: 'app-siderbar',
  templateUrl: './siderbar.component.html',
  styleUrl: './siderbar.component.css'
})
export class SiderbarComponent {
  isCollapsed: boolean = true;  // Estado inicial: oculto

  toggleCollapse(): void {
    this.isCollapsed = !this.isCollapsed;  // Cambia el estado al hacer clic
  }

  onClick(event: Event): void {
    event.preventDefault();  // Evita la recarga de la página
    console.log('El enlace de Supervisor ha sido clickeado');
    // Aquí puedes agregar cualquier lógica adicional que necesites
  }
}
