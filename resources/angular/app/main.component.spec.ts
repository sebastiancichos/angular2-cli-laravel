import {
  beforeEachProviders,
  describe,
  expect,
  it,
  inject
} from '@angular/core/testing';
import { MainAppComponent } from '../app/main.component';

beforeEachProviders(() => [MainAppComponent]);

describe('App: Main', () => {
  it('should create the app',
      inject([MainAppComponent], (app: MainAppComponent) => {
    expect(app).toBeTruthy();
  }));

  it('should have as title \'main works!\'',
      inject([MainAppComponent], (app: MainAppComponent) => {
    expect(app.title).toEqual('już wkrótce... wiedz, że coś się dzieje!');
  }));
});
