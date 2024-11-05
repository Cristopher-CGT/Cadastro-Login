const eye = document.getElementById("eye");
const password = document.getElementById("pass");
let blind = true;    

/* Icone de visualizar a senha do login */
eye.addEventListener("click", () => {
    if(blind == true){
        eye.src = "../assets/svgs/eye-show-svgrepo-com.svg";
        password.type = "text";
        blind = false;
    }
    else {
        eye.src = "../assets/svgs/eye-off-svgrepo-com.svg";
        password.type = "password";
        blind = true;
    }
});

/* Validação de login */
const login = document.getElementById("login_form");
login.addEventListener("submit", (e) => {
    e.preventDefault();
    
    let email = document.getElementById("email");
    let pass = document.getElementById("pass");

    if(email.value == "" || pass.value == ""){
        alert("Preencha corretamente todos os campos");
        email.value = "";
        pass.value = "";
    }
    else {
        login.submit();
    }
})  

/* Login errado */
let url = document.URL;
if(url.includes("?f") === true){
    window.history.pushState({}, "", url.slice(0, -2));
    alert("Usuário não encontrado, tente novamente");
}

/* Tentativa de acessar pagina privada sem login */
if(url.includes("?dst") === true){
    window.history.pushState({}, "", url.slice(0, -4));
    alert("Acesso negado, realize o login.");
}
