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
       $.ajax({url:'/test/example',
    method:'POST',
    data: params})


    })
    .fail(function(){ 

});
});