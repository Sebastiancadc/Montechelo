var $avatarImage, $avatarInput,$avatarForm;
var avatarUrl;
$(function(){ 
    $avatarInput = $('#avatarInput');
    $avatarImage = $('#avatarImage');
   

    $avatarImage.on('click', function () {
        $avatarInput.click();
    });  
    avatarUrl=$avatarForm.attr('ation');

    $avatarImage.on('change', function () {
      
    
    $.ajax({
    url: avatarUrl+'?'+savatarForm.serialize(),
    method:'POST',
    data: $avatarForm.serialize(),
    data:formData: false,
    contentType:false


})
.done(function(data){ if (data.success)
    console. log(data.path);

})
.fail(function(){ 

    alert('la imagen tiene formato incorrecto')
});
});
});