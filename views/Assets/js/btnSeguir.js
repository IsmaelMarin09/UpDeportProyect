
  let p = document.getElementById("btnSeguir"); // Encuentra el elemento "p" en el sitio
  let a = document.getElementById("aSeguidores");
 
  p.onclick = muestraAlerta; // Agrega función onclick al elemento  
  function muestraAlerta(evento) {  
    if ((p.innerHTML) ==("Seguir") ) {
        $("#btnSeguir").text("siguiendo");
        $("#aSeguidores").text(parseInt(a.innerHTML)+1);
       
        

    }else{$("#btnSeguir").text("Seguir");
    $("#aSeguidores").text(parseInt(a.innerHTML)-1);
        
    }

   
    
  }
