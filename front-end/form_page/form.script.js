let url = document.URL;

/* cadastrado com sucesso */
if(url.includes("?cad=true") === true){
    window.history.pushState({}, "", url.slice(0, -9));
    alert("Usuário cadastrado com sucesso!");
}

if(url.includes("?duplicate") === true){
    window.history.pushState({}, "", url.slice(0, -10));
    alert("Este E-mail já foi registrado anteriormente");
}
