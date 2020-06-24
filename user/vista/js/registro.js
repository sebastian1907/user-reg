$(window, document, undefined).ready(function() {

  $('input').blur(function() {
    var $this = $(this);
    if ($this.val())
      $this.addClass('used');
    else
      $this.removeClass('used');
  });
});

$("#formRegistro").submit(function(e){
  e.preventDefault();
  var formData = new FormData($("#formRegistro")[0]);
  $.ajax({
    url:"ajax/user.ajax.php",
    type: "POST",
    data: formData,
    dataType: 'json',
    cache:false,
    contentType: false,
    processData: false,
    success:function(respuesta){
    	console.log(respuesta)
      if(respuesta['cod'] == 1){
        swal({
          icon: "success",
          title: "Se registro el usuario con exito",
          showConfirmButton: !1,
          timer: 3000
        })
      }else{                
        swal({
          icon: "error",
          text: "el usuario "+respuesta['username']+" ya se encuentra registrado",
          confirmButtonText: "Aceptar",
          onBeforeOpen:document.getElementById("username").focus()
        })
        // return;
      }
    }
  });
});

