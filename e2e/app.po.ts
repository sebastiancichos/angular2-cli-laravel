export class MainPage {
  navigateTo() {
    return browser.get('/');
  }

  getParagraphText() {
    return element(by.css('main-app h1')).getText();
  }
}
