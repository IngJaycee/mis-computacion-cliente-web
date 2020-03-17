// Se ejecutacuando se carga la pagina
$(document).ready(function(){
    // Se cambian los estilos mediante jquery poniendo un borde.
    $("#content").css("border", "1px solid black");

    // Metodo llamado al dar clic en el menu Acerca de nosotros
    $("#btnAbout").click(function(e) {
        e.preventDefault();
        console.log("ABOUT");
        changePage("about");
    });
    
    // Metodo llamado al dar clic en el menu Dirección
    $("#btnAddress").click(function(e) {
        e.preventDefault();
        console.log("ADDRESS");
        changePage("locate");
    });
    
    // Metodo llamado al dar clic en el menu Dirección
    $("#btnLocate").click(function(e) {
        e.preventDefault();
        console.log("LOCATE");
        changePage("contact");
    });

    // Metodo encargado de llamar al controlador para la interaccion de la navegacion.
    function changePage(aRuta) {
        $.ajax({
            url: "index.php/inicio/getContent",
            data: {"ruta":aRuta},
            method: 'POST',
            dataType: 'json'
          })
        // Cuando la respuesta es satisfactoria se recibe el codigo HTML para injectarlo en el contenedor principal.
        .done(function(response=""){
          if (response.code==200) {
              var html = $.parseHTML(response['html']);
            $("#content").html(response['html']);
          }
        })
        .fail(function( ){
        console.log("fallo la respuesta");
        });
    }
});