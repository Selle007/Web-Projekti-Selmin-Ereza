var emailRegex = /^\w+([._-]?\w+)*@[a-z]+[-]?[a-z]*\.[a-z]{2,3}/;
var passwordRegex = /^[A-Z][a-z]+\d{3}$/;

var email = document.getElementById("email").value;
var password = document.getElementById("password").value;

var email_error = document.getElementById('email_error');
var pass_error = document.getElementById('pass_error');

email.addEventListener('textInput',email_ver );
pass.addEventListener('textInput',pas_ver );

    registerButton.addEventListener("click",function(event){
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

if(email == ""){
    emailMsg.innerText = "Enter an email"
    event.preventDefault();
    }
    else{
        if(emailRegex.test(email)){
        }else{
            emailMsg.innerText = "Enter a valid email"
            event.preventDefault();
        }
    }
    if(password == ""){
        passwordMsg.innerText = "Enter password"
        event.preventDefault();
        }
        else{
            if(passwordRegex.test(password)){
            }else{
                passwordMsg.innerText = "Enter a valid password"
                event.preventDefault();
            }
        }
})