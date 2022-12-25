var emri = document.querySelector('#emri');
emri.addEventListener('keyup', function () {
    if (emri.value.length < 3) {
        emri.style.border = '1px solid red';
        return false;
    } else {
        emri.style.border = '1px solid green';
    }
});
var mbiemri = document.querySelector('#mbiemri');
mbiemri.addEventListener('keyup', function () {
    if (mbiemri.value.length < 3) {
        mbiemri.style.border = '1px solid red';
        return false;
    } else {
        mbiemri.style.border = '1px solid green';
    }
});
var emaili = document.querySelector('#email');
emaili.addEventListener('keyup', function () {
    if (emaili.value.length < 6) {
        emaili.style.border = '1px solid red';
        return false;
    } else {
        emaili.style.border = '1px solid green';
    }
});

var password = document.querySelector('#pass');
password.addEventListener('keyup', function () {
    if (password.value.length < 3) {
        password.style.border = '1px solid red';

        return false;
    } else {
        password.style.border = '1px solid green';


    }
})
var mosha = document.querySelector('#DOB');
mosha.addEventListener('keyup', function () {
    if (mosha.value.length < 18) {
        password.style.border = '1px solid red';

        return false;
    } else {
        password.style.border = '1px solid green';


    }
})

function validate() {
    if (emri.value.length < 3) {
        alert('Please fill the required fields!');
        return false;
    } 
    else if (emaili.value.length < 6) {
        alert('Please fill the required fields!');
        return false;
    }else if (mbiemri.value.length < 3) {
        alert('Please fill the required fields!');
        return false;
    }  else if (password.value.length < 3) {
        alert('Please fill the required fields!');
        return false;
    } else if (mosha.value.length < 18) {
        alert('You should be at least 18 years old to enter');
        return false;

    }
}
