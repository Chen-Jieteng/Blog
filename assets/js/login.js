var login = document.getElementById('password');
var login = document.getElementById('eye');

var flag = 0;
eye.mouseon = function(){
    if(flag == 0){
        password.type = 'text';
        eye.src = './assets/open.png';
        flag = 1;
    }
    else{
        password.type = 'password';
        eye.src = './assets/close.png';
        flag = 0; 
    }
}