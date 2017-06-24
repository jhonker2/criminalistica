var stack_bar_bottom = {"dir1": "up", "dir2": "right", "spacing1": 0, "spacing2": 0};
var stack_bottomright = {"dir1": "up", "dir2": "left", "firstpos1": 25, "firstpos2": 25};
$("#btn_login").click(function(){
	var usuario = $("#usuario").val();
	var clave	= $("#clave").val();
	var token	= $("#token").val();
	debugger
	if(usuario=="" && clave==""){
    //alert("usuario y contraseña esta vacio");
        show_stack_bottomright('error');
        $("#usuario").focus();
  	}else{
      loader_login('on');
    $.ajax({
        url:'/logeo',
        type:'POST',
        dataType: 'json',
        headers :{'X-CSRF-TOKEN': token},
        data:{usuario:usuario,clave:clave},
        success:function(response){   
            //loader_login('off');
               if(response.sms=="login"){
              loader_login('off');
              alert("Bienvenido");
              redirect('/home');
              }else{
              loader_login('off');
              alert("Usuario Incorrectos");
             }
          }
      });
  }

});

function redirect(url){
   window.location=url;
}
  
function loader_login(v){
    if(v== 'on'){
      $('#login_from').css({
        opacity: 0.4
      });
        $('#lod').show();
    }else{
      $('#login_from').css({
        opacity: 1
      });
      $('#lod').hide();
    }
  }

  function show_stack_bottomright(type) {
    var opts = {
        title: "Over Here",
        text: "Check me out. I'm in a different stack.",
        addclass: "stack-bottomright",
        stack: stack_bottomright
    };
    switch (type) {
    case 'error':
        opts.title = "Oh No";
        opts.text = "Nombre de usuario y contraseña se encuentran vacios!";
        opts.type = "error";
        break;
    case 'info':
        opts.title = "Breaking News";
        opts.text = "Have you met Ted?";
        opts.type = "info";
        break;
    case 'success':
        opts.title = "Good News Everyone";
        opts.text = "I've invented a device that bites shiny metal asses.";
        opts.type = "success";
        break;
    }
    new PNotify(opts);
}