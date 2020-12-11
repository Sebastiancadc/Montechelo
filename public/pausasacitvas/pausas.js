var tiempo = 10800000;   
var interval = setInterval(function() {
  $(document).ready(function()
  {
    // id de nuestro modal
    $("#modalPausaActiva").modal("show");
  });

}, tiempo);

$(document).ready(function()
{ 
   $("#modaLlenarcampos").modal("show");
});
 
$(document).ready(function()
{
   $("#modal-notification").modal("show");
});