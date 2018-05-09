var badwords = ['mierda','polla','subnormal','gilipollas','coño','caca','puta','capullo','cojones','zorra']

function mostrar(){
  if(document.getElementById('abs_comentario').style.visibility=="visible"){
      document.getElementById('abs_comentario').style.visibility="hidden"
      document.getElementById('bt_comentario').value = "Ver Comentarios"
  }else{
    document.getElementById('abs_comentario').style.visibility="visible"
    document.getElementById('bt_comentario').value = "Ocultar Comentarios"
  }

}

function muestraedicion(id, array){
  if(document.getElementById('abs_comentario').style.visibility=="visible"){
      document.getElementById('abs_comentario').style.visibility="hidden"
      document.getElementById('abs_comentario_edicion').style.visibility="visible"
      //alert(id)
      //var na = document.getElementById(txt).name;
      //alert(na)
      /*alert(txt1)
      var x = txt1*/
      //alert(id)
      //alert(array)
      document.getElementById('editacom').value= array[id-1]
      //document.getElementById('bt_comentario').value = "Ver Comentarios"
  }else{
    document.getElementById('abs_comentario').style.visibility="visible"
    document.getElementById('abs_comentario_edicion').style.visibility="hidden"
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



function reemplaza(badword){
    // document.write(datos(0))
    console.log(badword(0).value)
    var texto = document.getElementById('com').value
  var palabras = texto.split(" ")
  for(var k = 0; k < palabras.length; k++)
  //console.log(2)
    for (var i = 0; i < badwords.length; i++) {
    //    console.log(3)
      if(palabras[k] == badwords[i]){
          console.log(888888888)
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
