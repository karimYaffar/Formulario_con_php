var form = document.getElementById("loginn");
var uss = "admin"
var pss ="1111"
form.addEventListener("submit", function(evento){
    evento.preventDefault()
    
    var usuario = document.getElementById("user").value
    var password = document.getElementById("pass").value

    if(uss === usuario && pss === password){
        window.location.href="./R.jpeg"
    }
        else{
            alert ("No son los datos correctos")

            
    }
    

});