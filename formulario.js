document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("submit").addEventListener("click",function(){
    
    let caja1 = document.getElementById('caja1').value;
    let caja2 = document.getElementById('caja2').value;
    let caracteres=['$','#'];
    let c=0;
    for (let i=0;i<caja1.length;i++){
        if (caracteres.includes(caja1[i])){  
            c++;
        }
        
    }
    for (let i=0;i<caja2.length;i++){
        if (caracteres.includes(caja2[i])){  
            c++;
        }
    }
    
    
    if (caja1 =="" || caja2==""){
        window.alert("Completa todos los campos");
    }
    else if (c!==0)
    {
        window.alert("Caracter inválido encontrado ('$' o '#')"); 
    }
    else if (!isNaN(caja1.charAt(0)) )
    { 
        window.alert("Email no puede comenzar con un número");

    }
    else if (!isNaN(caja2.charAt(0))) 
    { 
        window.alert("Nombre no puede comenzar con un número");
    }
    });

 });