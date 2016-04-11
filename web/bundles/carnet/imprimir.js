$(document).ready(function(){
   $('#print').click(function(){
      html2canvas($('#carnet'), {
         onrendered: function(canvas){
            var myImage = canvas.toDataURL("image/png");
            window.open(myImage);
         }
      })
   });
});