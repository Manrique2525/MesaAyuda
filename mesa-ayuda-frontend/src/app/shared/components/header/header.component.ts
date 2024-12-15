import { Component } from '@angular/core';

@Component({
  selector: 'app-header',
  templateUrl: './header.component.html',
  styleUrls: ['./header.component.css']
})
export class HeaderComponent {
  isCollapsed: boolean = true;  // Estado inicial: oculto

  toggleCollapse(event: Event): void {
    event.preventDefault();
    this.isCollapsed = !this.isCollapsed;  // Cambia el estado al hacer clic
  }
}
