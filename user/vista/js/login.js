$(window, document, undefined).ready(function() {

  $('input').blur(function() {
    var $this = $(this);
    if ($this.val())
      $this.addClass('used');
    else
      $this.removeClass('used');
  });
});

$("#form_login").submit(function(e){
  e.preventDefault();
  var accionContacto  = $("#accion").val();
  var formData = new FormData($("#form_login")[0]);
  $.ajax({
    url:"ajax/user.ajax.php",
    type: "POST",
    data: formData,
    cache:false,
    contentType: false,
    processData: false,
    success:function(respuesta){
      if(respuesta == 1){
        swal({
          icon: "success",
          title: "Bienvenido",
          showConfirmButton: !1,
          timer: 3000
        })
        window.setTimeout(4000);
        window.location = "registro";
      }else{                
        swal({
          title: "Error",
          text: "Usuario o contraseña invalidos.",
          type: "error",
          confirmButtonText: "Aceptar",
          onBeforeOpen:document.getElementById("password").focus()
        })
        return;
      }
    }
  });
});