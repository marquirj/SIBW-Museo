function mostrar(){
  if(document.getElementById('abs_comentario').style.visibility=="visible"){
      document.getElementById('abs_comentario').style.visibility="hidden"
      document.getElementById('bt_comentario').value = "Ver Comentarios"
  }else{
    document.getElementById('abs_comentario').style.visibility="visible"
    document.getElementById('bt_comentario').value = "Ocultar Comentarios"
  }

}
function enviar(){
  var nombre = document.getElementById('usu').value
  var comentario = document.getElementById('com').value
  var correo = document.getElementById('cor').value

  if(nombre=="" || comentario=="" || correo==""){
    alert("Hay algún campo vacío")
  }else{
    document.getElementById('comentarios').innerHTML += "<p>"+ nombre +":</p> <p>"+ comentario +"</p>"
    document.getElementById('cor').value = ""
    document.getElementById('usu').value = ""
    document.getElementById('com').value = ""
  }


}
