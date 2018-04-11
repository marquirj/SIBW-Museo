

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

var badwords = ['mierda','polla','subnormal','gilipollas','coño','caca','puta','capullo','cojones','zorra']

function reemplaza(){
  var texto = document.getElementById('com').value
  var palabras = texto.split(" ")
  for(var k = 0; k < palabras.length; k++)
    for (var i = 0; i < badwords.length; i++) {
      if(palabras[k] == badwords[i]){
          palabras[k] = palabras[k].replace(badwords[i], function(x){
          var censurado = ""
          for (var j = 0; j < x.length; j++) {
            censurado += "*"
          }
          return censurado
        });
        document.getElementById("com").value = palabras.join(" ");
      }
  }
}
