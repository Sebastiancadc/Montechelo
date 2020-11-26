$(function () {
    var $avatarImage, $avatarInput, $avatarForm;
    var avatarUrl;
    
    $avatarImage = $('#avatarImage');
    $avatarInput = $('#avatarInput');
    $avatarForm = $('#avatarForm');

    $avatarImage.on('click', function () {
        $avatarInput.click();
    });

    avatarUrl =$avatarForm.attr('action');  

    $avatarInput.on('change', function () {
    
    var formData = new FormData();
    

    formData.append('photo', $avatarInput[0].files[0]);

    $.ajax({
        url: avatarUrl+'?'+$avatarForm.serialize(),
        method: 'POST',
        data: formData,
        processData: false,
        contentType: false
    })
    .done(function (data) {
        if (data.success)
            $avatarImage.attr('src', 'http://localhost/Montechelo/public/images/users/'+data.file_name+'?'+ new Date().getTime());
            location.reload();
            location.reload();

    })
    .fail(function () {
        alert('La imagen subida no tiene un formato correcto');
    });
});
});

$(function () {
    var $portadata, $portadaInput, $portadaForm;
    var portadaUrl;
    
    $portadata = $('#portadata');
    $portadaInput = $('#portadaInput');
    $portadaForm = $('#portadaForm');

    $portadata.on('click', function () {
        $portadaInput.click();
    });

    portadaUrl =$portadaForm.attr('action');  

    $portadaInput.on('change', function () {
    
    var formData = new FormData();
    

    formData.append('photo_portada', $portadaInput[0].files[0]);

    $.ajax({
        url: portadaUrl+'?'+$portadaForm.serialize(),
        method: 'POST',
        data: formData,
        processData: false,
        contentType: false
    })
    .done(function (data) {
        if (data.success)
            $portadata.attr('src', 'http://localhost/Montechelo/public/images/portada/'+data.file_name+'?'+ new Date().getTime());

    })
    .fail(function () {
        alert('La imagen subida no tiene un formato correcto');
    });
});
});