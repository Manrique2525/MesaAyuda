import { ComponentFixture, TestBed } from '@angular/core/testing';

import { SupervisorCreateComponent } from './supervisor-create.component';

describe('SupervisorCreateComponent', () => {
  let component: SupervisorCreateComponent;
  let fixture: ComponentFixture<SupervisorCreateComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [SupervisorCreateComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(SupervisorCreateComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
