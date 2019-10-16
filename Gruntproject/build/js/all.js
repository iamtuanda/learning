function abc()
{
    var a = 5; //Đây là biến a
    var b = 6;
    console.log(a+b);
}
class User {
    constructor(name) {
        this.name = name;
    }

    showinfo() {
        console.log(this.name);
    }
}

var user = new User('xuanthulab');
user.showinfo();