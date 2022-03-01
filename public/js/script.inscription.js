const form = document.getElementById('form');
const nom = document.getElementById('nom');
const prenom = document.getElementById('prenom');
const login = document.getElementById('login');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');

//

function showError(input,message){
    const formControl = input.parentElement;
    formControl.className = "form-control error";
    const small = formControl.querySelector('small');
    small.innerText = message;
    
}
function showSuccess(input){
    const formControl = input.parentElement;
    formControl.className = "form-control success";
}
function checkEmail(input){
    const email = input.value.trim().toLowerCase();
    const re =  /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(re.test(email)){
        showSuccess(input);
    }
    else{
        showError(input,"veuillez respecter les normes de l email");
    }
}
function checkRequired(tabInput){
    tabInput.forEach(function(input){
        if (input.value.trim() === '' ){
            showError(input,"veuillez renseigner le "+camelCase(input));
        }
        else{
            showSuccess(input);
        }
    })
}
function camelCase(input){
    return input.id.charAt(0).toUpperCase()+ input.id.slice(1);
}
function lengthCarac(input,min){
    const champ = input.value;
    const number = /[0-9]/;
    const letter = /[a-zA-Z]/;
    if(champ<min || (!number.test(champ)) || (!letter.test(champ))){
        showError(input,`veuillez renseigner au moins ${min} caractere `);
    }
    else{
        showSuccess(input);
    }
}
function comparePassword(input1, input2){
    if(input1.value != input2.value){
        showError(input2,"les deux mots de passe ne se ressemblent pas");
    }
}

//
form.addEventListener('submit',function(e){
    e.preventDefault();
    checkRequired([nom,prenom,login,password,password2]);
    checkEmail(login);
    lengthCarac(password,6);
    comparePassword(password,password2);
    
});