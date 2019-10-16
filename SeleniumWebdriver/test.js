var webdriver = require('selenium-webdriver');
    By = webdriver.By;
    until = webdriver.until;

    var chrome = require('selenium-webdriver/chrome');
    var driver = new webdriver.Builder().forBrowser('chrome').build();

    driver.get('https://www.facebook.com/');
    driver.findElement(By.id('email')).sendKeys('dinhanhtuan293@gmail.com');
    driver.findElement(By.id('pass')).sendKeys('dinhtuan293');
    driver.findElement(By.id('loginbutton')).click();


//     driver.wait(until.elementLocated(By.name('q')), 1000000).then(function() {
// 	driver.findElement(By.name('q')).sendKeys('Đinh Tuấn', Key.RETURN);
// });












 