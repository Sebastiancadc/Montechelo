setTimeout(function(){
    $.colorbox({
    html:"<video width='750' height='540' autoplay controls> <source src="+ videoaleatoire()+" type='video/mp4'> </video>",
    clasName: 'cboxWrapper',
    width: 750,
    height: 550
    });
    }, 10800000);

  function makeArray(n) {
  this.length = n;
  for (var i=1; i<=n; i++) {
  this[i] = "";
  }
  return this;
  }
  var i; 
  function videoaleatoire() {
  i = Math.floor(6 * Math.random() + 1);
  return video[i];
  }
  video = new makeArray(6);
  video[1]="pausasacitvas/PausaA.mp4";
  video[2]="pausasacitvas/PausaA2.mp4";
  video[3]="pausasacitvas/PausaA3.mp4";
  video[4]="pausasacitvas/PausaA4.mp4";
  video[5]="pausasacitvas/PausaA5.mp4";
  video[6]="pausasacitvas/PausaA6.mp4";

$(document).ready(function()
{
   $("#modaLlenarcampos").modal("show");
});
 
$(document).ready(function()
{
   $("#modal-notification").modal("show");
});