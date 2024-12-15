import { ComponentFixture, TestBed } from '@angular/core/testing';

import { SupervisorIndexComponent } from './supervisor-index.component';

describe('SupervisorIndexComponent', () => {
  let component: SupervisorIndexComponent;
  let fixture: ComponentFixture<SupervisorIndexComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [SupervisorIndexComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(SupervisorIndexComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
