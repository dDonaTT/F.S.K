var user = document.querySelector('#user');
user.addEventListener('keyup', function(){   
    if ( user.value.length < 6){
        user.style.border ='1px solid red';
        return false;
    } else{
        user.style.border = '1px solid green';
    }
})
var pass = document.querySelector('#pass');
pass.addEventListener('keyup', function(){
    if ( pass.value.length < 3){
        pass.style.border = '1px solid red';
        return false;
    } else {
        pass.style.border = '1px solid green';
        

    }
})
function validate(){
    if(user.value == 0 || user.value.length <3 ){
        alert('Please fill the required fields!');
        return false;
    }else if(pass.value == 0 || pass.value.length < 3){
        alert('Please fill the required fields!');
        return false;
}
}