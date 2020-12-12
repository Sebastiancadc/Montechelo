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

$(function () {
    var $isotipoImage, $isotipoInput, $isotipoForm;
    var avatarUrl;
    $isotipoImage = $('#isotipoImage');
    $isotipoInput = $('#isotipoInput');
    $isotipoForm = $('#isotipoForm');

    $isotipoImage.on('click', function () {
        $isotipoInput.click();
    });

    avatarUrl =$isotipoForm.attr('action');  

    $isotipoInput.on('change', function () {
    
    var formData = new FormData();

    formData.append('logoisotipo', $isotipoInput[0].files[0]);

    $.ajax({
        url: avatarUrl+'?'+$isotipoForm.serialize(),
        method: 'POST',
        data: formData,
        processData: false,
        contentType: false
    })
    .done(function (data) {
        if (data.success)
            $isotipoImage.attr('src', 'http://localhost/Montechelo/public/images/isotipo/'+data.file_name+'?'+ new Date().getTime());
            location.reload();
            location.reload();
    })
    .fail(function () {
        location.reload();
    });
});
});


$(function () {
    var $loginImage, $loginInput, $loginForm;
    var avatarUrl;
    $loginImage = $('#loginImage');
    $loginInput = $('#loginInput');
    $loginForm = $('#loginForm');

    $loginImage.on('click', function () {
        $loginInput.click();
    });

    avatarUrl =$loginForm.attr('action');  

    $loginInput.on('change', function () {
    
    var formData = new FormData();

    formData.append('logologin', $loginInput[0].files[0]);

    $.ajax({
        url: avatarUrl+'?'+$loginForm.serialize(),
        method: 'POST',
        data: formData,
        processData: false,
        contentType: false
    })
    .done(function (data) {
        if (data.success)
            $loginImage.attr('src', 'http://localhost/Montechelo/public/images/login/'+data.file_name+'?'+ new Date().getTime());
            location.reload();
            location.reload();
    })
    .fail(function () {
        location.reload();
    });
});
});

$(function () {
    var $verticalImage, $verticalInput, $verticalForm;
    var avatarUrl;
    $verticalImage = $('#verticalImage');
    $verticalInput = $('#verticalInput');
    $verticalForm = $('#verticalForm');

    $verticalImage.on('click', function () {
        $verticalInput.click();
    });

    avatarUrl =$verticalForm.attr('action');  

    $verticalInput.on('change', function () {
    
    var formData = new FormData();

    formData.append('logonav', $verticalInput[0].files[0]);

    $.ajax({
        url: avatarUrl+'?'+$verticalForm.serialize(),
        method: 'POST',
        data: formData,
        processData: false,
        contentType: false
    })
    .done(function (data) {
        if (data.success)
            $verticalImage.attr('src', 'http://localhost/Montechelo/public/images/navvertical/'+data.file_name+'?'+ new Date().getTime());
            location.reload();
            location.reload();
    })
    .fail(function () {
        location.reload();
    });
});
});