var webdriver = require('selenium-webdriver');
var Capabilities = webdriver.Capabilities;
var By = webdriver.By;
var until = webdriver.until;
var Key = webdriver.Key;
var chrome = require('selenium-webdriver/chrome');

var options = new chrome.Options();
//turn off notification
options.setUserPreferences({'profile.default_content_setting_values.notifications': 2});

var driver = new webdriver.Builder().withCapabilities(webdriver.Capabilities.chrome()).setChromeOptions(options).build();

// driver.get('https://www.facebook.com');
// driver.manage().window().maximize(); // setSize max
// driver.findElement(By.id('email')).sendKeys('dinhanhtuan293@gmail.com');
// driver.findElement(By.id('pass')).sendKeys('dinhtuan293');
// driver.findElement(By.id('loginbutton')).click();


  driver.get('http://www.google.com');
  driver.findElement(By.name('q')).sendKeys('facebook');
  driver.findElement(By.name('q')).sendKeys(Key.ENTER);
  driver.findElement(By.linkText("Đăng nhập")).click();
 
 

 // var searchForm = driver.findElement(By.tagName('form'));
 // var searchBox = searchForm.findElement(By.name('q'));
 // searchBox.sendKeys('webdriver');
 // driver.findElement(By.name('btnG')).click();





 