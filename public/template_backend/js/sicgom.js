

$("#home").click(function(){
	cargarContenido("/app/usuarios");
});



function cargarContenido(pagina) {
	$("#content-sicgom").load(pagina);
}

function solo_monedas(e){
      tecla = (document.all) ? e.keyCode : e.which;
      if (tecla==8)
      return true;
      patron =/[0123456789.]/;
      tecla_final = String.fromCharCode(tecla);
      return patron.test(tecla_final);
    }