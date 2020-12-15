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



$(function () {
    var $misionImage, $misionInput, $misionForm;
    var avatarUrl;
    $misionImage = $('#misionImage');
    $misionInput = $('#misionInput');
    $misionForm = $('#misionForm');

    $misionImage.on('click', function () {
        $misionInput.click();
    });

    avatarUrl =$misionForm.attr('action');  

    $misionInput.on('change', function () {
    
    var formData = new FormData();

    formData.append('imagenmision', $misionInput[0].files[0]);

    $.ajax({
        url: avatarUrl+'?'+$misionForm.serialize(),
        method: 'POST',
        data: formData,
        processData: false,
        contentType: false
    })
    .done(function (data) {
        if (data.success)
            $misionImage.attr('src', 'http://localhost/Montechelo/public/images/plan/mision/'+data.file_name+'?'+ new Date().getTime());
            location.reload();
            location.reload();
    })
    .fail(function () {
        location.reload();
    });
});
});



$(function () {
    var $visionImage, $visionInput, $visionForm;
    var avatarUrl;
    $visionImage = $('#visionImage');
    $visionInput = $('#visionInput');
    $visionForm = $('#visionForm');

    $visionImage.on('click', function () {
        $visionInput.click();
    });

    avatarUrl =$visionForm.attr('action');  

    $visionInput.on('change', function () {
    
    var formData = new FormData();

    formData.append('imagenvision', $visionInput[0].files[0]);

    $.ajax({
        url: avatarUrl+'?'+$visionForm.serialize(),
        method: 'POST',
        data: formData,
        processData: false,
        contentType: false
    })
    .done(function (data) {
        if (data.success)
            $visionImage.attr('src', 'http://localhost/Montechelo/public/images/plan/vision/'+data.file_name+'?'+ new Date().getTime());
            location.reload();
            location.reload();
    })
    .fail(function () {
        location.reload();
    });
});
})

$(function () {
    var $valoresImage, $valoresInput, $valoresForm;
    var avatarUrl;
    $valoresImage = $('#valoresImage');
    $valoresInput = $('#valoresInput');
    $valoresForm = $('#valoresForm');

    $valoresImage.on('click', function () {
        $valoresInput.click();
    });

    avatarUrl =$valoresForm.attr('action');  

    $valoresInput.on('change', function () {
    
    var formData = new FormData();

    formData.append('imagenvalores', $valoresInput[0].files[0]);

    $.ajax({
        url: avatarUrl+'?'+$valoresForm.serialize(),
        method: 'POST',
        data: formData,
        processData: false,
        contentType: false
    })
    .done(function (data) {
        if (data.success)
            $valoresImage.attr('src', 'http://localhost/Montechelo/public/images/plan/valores/'+data.file_name+'?'+ new Date().getTime());
            location.reload();
            location.reload();
    })
    .fail(function () {
        location.reload();
    });
});
})

$(function () {
    var $politicaImage, $politicaInput, $politicaForm;
    var avatarUrl;
    $politicaImage = $('#politicaImage');
    $politicaInput = $('#politicaInput');
    $politicaForm = $('#politicaForm');

    $politicaImage.on('click', function () {
        $politicaInput.click();
    });

    avatarUrl =$politicaForm.attr('action');  

    $politicaInput.on('change', function () {
    
    var formData = new FormData();

    formData.append('imagenpolitica', $politicaInput[0].files[0]);

    $.ajax({
        url: avatarUrl+'?'+$politicaForm.serialize(),
        method: 'POST',
        data: formData,
        processData: false,
        contentType: false
    })
    .done(function (data) {
        if (data.success)
            $politicaImage.attr('src', 'http://localhost/Montechelo/public/images/plan/politica/'+data.file_name+'?'+ new Date().getTime());
            location.reload();
            location.reload();
    })
    .fail(function () {
        location.reload();
    });
});
})

$(function () {
    var $planestraImage, $planestraInput, $planestraForm;
    var avatarUrl;
    $planestraImage = $('#planestraImage');
    $planestraInput = $('#planestraInput');
    $planestraForm = $('#planestraForm');

    $planestraImage.on('click', function () {
        $planestraInput.click();
    });

    avatarUrl =$planestraForm.attr('action');  

    $planestraInput.on('change', function () {
    
    var formData = new FormData();

    formData.append('imagenplanestra', $planestraInput[0].files[0]);

    $.ajax({
        url: avatarUrl+'?'+$planestraForm.serialize(),
        method: 'POST',
        data: formData,
        processData: false,
        contentType: false
    })
    .done(function (data) {
        if (data.success)
            $planestraImage.attr('src', 'http://localhost/Montechelo/public/images/plan/planestra/'+data.file_name+'?'+ new Date().getTime());
            location.reload();
            location.reload();
    })
    .fail(function () {
        location.reload();
    });
});
})




$(function () {
    var $orgaImage, $orgaInput, $orgaForm;
    var avatarUrl;
    $orgaImage = $('#orgaImage');
    $orgaInput = $('#orgaInput');
    $orgaForm = $('#orgaForm');

    $orgaImage.on('click', function () {
        $orgaInput.click();
    });

    avatarUrl =$orgaForm.attr('action');  

    $orgaInput.on('change', function () {
    
    var formData = new FormData();

    formData.append('imagenorganigrama', $orgaInput[0].files[0]);

    $.ajax({
        url: avatarUrl+'?'+$orgaForm.serialize(),
        method: 'POST',
        data: formData,
        processData: false,
        contentType: false
    })
    .done(function (data) {
        if (data.success)
            $orgaImage.attr('src', 'http://localhost/Montechelo/public/images/plan/organigrama/'+data.file_name+'?'+ new Date().getTime());
            location.reload();
            location.reload();
    })
    .fail(function () {
        location.reload();
    });
});
})



$(function () {
    var $uniestraImage, $uniestraInput, $uniestraForm;
    var avatarUrl;
    $uniestraImage = $('#uniestraImage');
    $uniestraInput = $('#uniestraInput');
    $uniestraForm = $('#uniestraForm');

    $uniestraImage.on('click', function () {
        $uniestraInput.click();
    });

    avatarUrl =$uniestraForm.attr('action');  

    $uniestraInput.on('change', function () {
    
    var formData = new FormData();

    formData.append('imagenuniestra', $uniestraInput[0].files[0]);

    $.ajax({
        url: avatarUrl+'?'+$uniestraForm.serialize(),
        method: 'POST',
        data: formData,
        processData: false,
        contentType: false
    })
    .done(function (data) {
        if (data.success)
            $uniestraImage.attr('src', 'http://localhost/Montechelo/public/images/plan/unidades/'+data.file_name+'?'+ new Date().getTime());
            location.reload();
            location.reload();
    })
    .fail(function () {
        location.reload();
    });
});
})

