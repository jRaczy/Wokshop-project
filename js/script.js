function showImage(sender){
    var x = document.getElementById("my-modal-image");
    x.src = sender.src;
    document.getElementById("my-modal").style.display = "flex";
     document.getElementById("my-modal").addEventListener("click", function(){
     this.style.display = "none";
   });
 
}

$(function() {
   
     $(".form-control").on('focus', function(){
 
         $(this).parents(".form-group").addClass('focused');
 
     });
 
     $(".form-control").on('blur', function(){
 
         $(this).parents(".form-group").removeClass('focused');
 
     });
 
 });