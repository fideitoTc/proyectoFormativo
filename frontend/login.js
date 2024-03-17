
function loguear() {
    
    let user=document.getElementById("usuario").value;
    let pass=document.getElementById("clave").value;


    if(user=="juan01" && pass=="1234")
    {
        window.location="/frontend/bienvenido.html";
    }

    else
    {
        alert("Usuario o contraseña incorrectos");
    }


}