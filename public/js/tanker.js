function archive(tanker) {
    $.ajax({
        type: 'POST',
        url: base_url + '/tankers/archive',
        data: {
            _token: $("[name='_token']").val(),
            tanker_id: tanker
        },
        success: function(response) {
            if(response == 'success') {    
                document.getElementById("row" + tanker).innerHTML = null;
            }
        }
    })
}

$(document).ready(function() {
    $('.refurbishment').on('click', function() {
        var refurbishment_id = $(this).attr('id');
        var tanker_id = refurbishment_id.split('_')[1];
        if(tanker_obj.usage == 1)
            toastr.error('We are using this tank for contract!')
        else
            $.ajax({
                type: 'POST',
                url: base_url + '/tankers/archive',
                data: {
                    _token: $("[name='_token']").val(),
                    tanker_id: tanker_id
                },
                success: function(response) {
                    if(response == 'success') {
                        if(tanker_obj.archive == 0)
                        {
                            console.log(tanker_obj.archive);
                            tanker_obj.archive = 1;
                            $(`#${refurbishment_id}`).removeClass("bg-red-500 hover:bg-red-700").addClass("bg-green-500 hover:bg-green-700");
                            $('.refurbishment_title').text('Restore');
                            toastr.success("Sent for refurbishemnt!", 'Success!', {timeOut: 5000});
                        }
                        else    
                        {
                            tanker_obj.archive = 0;
                            $(`#${refurbishment_id}`).removeClass("bg-green-500 hover:bg-green-700").addClass("bg-red-500 hover:bg-red-700");
                            $('.refurbishment_title').text('Refurbishment');
                            toastr.success("Repaired successfully!", 'Success!', {timeOut: 5000});
                        }

                    }
                }
            })
    })
    $('.refresh').on('click', function() {
        $.ajax({
            type: 'POST',
            url: base_url + '/tankers/refresh',
            data: {
                _token: $("[name='_token']").val(),
                tanker_id: tanker_obj.id
            },
            success: function(response) {
                console.log(response);
                if(response.success == 'success') {
                    tanker_obj = response.tanker_obj;
                    console.log(tanker_obj);
                    $('#left-side-image').attr('src', tanker_obj.ext_splat_left);
                    $('#front-side-image').attr('src', tanker_obj.ext_splat_front);
                    $('#back-side-image').attr('src', tanker_obj.ext_splat_rear);
                    $('#right-side-image').attr('src', tanker_obj.ext_splat_right);
                    $('#internal-image').attr('src', tanker_obj.int_splat);
                    
                    $('#left-side-image-form').attr('value', tanker_obj.ext_splat_left);
                    $('#front-side-image-form').attr('value', tanker_obj.ext_splat_front);
                    $('#back-side-image-form').attr('value', tanker_obj.ext_splat_rear);
                    $('#right-side-image-form').attr('value', tanker_obj.ext_splat_right);
                    $('#internal-image-form').attr('value', tanker_obj.int_splat);

                    toastr.success("Refreshed successfully!", 'Success!', {timeOut: 5000});
                }
            }
        })
    })

    //Pixie

    var specify;

    var pixie = new Pixie({
        baseUrl: asset_url,
        ui: {
            visible: false, // whether pixie is visible initially
            mode: 'overlay',
            toolbar: {
                hideOpenButton: true,
                hideCloseButton: true,
            },
            nav: {
                position: 'top',
                replaceDefault: true,
                items: [
                    {name: 'draw', icon: 'pencil-custom', action: 'draw'},
                    {name: 'text', icon: 'text-box-custom', action: 'text'},
                    {name: 'shapes', icon: 'polygon-custom', action: 'shapes'},
                    {name: 'stickers', icon: 'sticker-custom', action: 'stickers'},
                ]
            },
            openImageDialog: null,
        },
        ToolbarItemAction : ['exportImage', 'toggleHistory', 'closeEditor'],
        onLoad : function () {
            $('.mat-focus-indicator.mat-menu-trigger.mat-button.mat-button-base.ng-star-inserted').css('display','none')
            // $('.mat-focus-indicator.mat-button.mat-button-base.mat-icon-button.ng-star-inserted').css('display','none')
            $('toolbar .right').find('toolbar-item').eq(2).css('display', 'none')
        },
        onOpen : function() {
            // if (specify === 'hirer_signature-image' || specify === 'tcl_signature-image') {
                $('navigation-bar .scroll-container').find('button').eq(1).css('display', 'none')
                $('navigation-bar .scroll-container').find('button').eq(2).css('display', 'none')
                $('navigation-bar .scroll-container').find('button').eq(3).css('display', 'none')
            // } else {
            //     $('navigation-bar .scroll-container').find('button').eq(1).css('display', 'block')
            //     $('navigation-bar .scroll-container').find('button').eq(2).css('display', 'block')
            //     $('navigation-bar .scroll-container').find('button').eq(3).css('display', 'block')
            // }
            $('.parentForm').attr('onsubmit', "return false")
        },
        onSave: function(data, name) {
            let current_Url;
            let imageId;
            let imageFormId;
            switch(specify) {
                case 'left-side-image':
                    name = 'left-side.' + name.split('.').pop()
                    current_Url = $('#left-side-image').attr('src')
                    imageId = '#left-side-image'
                    imageFormId = '#left-side-image-form'
                    break;
                case 'front-side-image':
                    name = 'front-side.' + name.split('.').pop()
                    current_Url = $('#front-side-image').attr('src')
                    imageId = '#front-side-image'
                    imageFormId = '#front-side-image-form'
                    break;
                case 'back-side-image':
                    name = 'back-side.' + name.split('.').pop()
                    current_Url = $('#back-side-image').attr('src')
                    imageId = '#back-side-image'
                    imageFormId = '#back-side-image-form'
                    break;
                case 'right-side-image':
                    name = 'right-side.' + name.split('.').pop()
                    current_Url = $('#right-side-image').attr('src')
                    imageId = '#right-side-image'
                    imageFormId = '#right-side-image-form'
                    break;
                case 'internal-image':
                    name = 'internal-image.' + name.split('.').pop()
                    current_Url = $('#internal-image').attr('src')
                    imageId = '#internal-image'
                    imageFormId = '#internal-image-form'
                    break;
            }

            console.log(current_Url);

            pixie.http()
                .post(image_saveUrl, 
                    {
                        _token : csrf_token ,
                        name: name,
                        data: data,
                        current_Url : current_Url
                    })
                .subscribe(function(response) {
                    $(imageId).attr('src', response.filePath)
                    $(imageFormId).attr('value', response.filePath)
                    // console.log(response);
                });
        },
        onClose : function () {
            $('.parentForm').attr('onsubmit', "")
        }
    });


    $('#left-side').on('click', function() {
        specify = 'left-side-image'
        pixie.openEditorWithImage(document.querySelector('#left-side-image'));
    })
    $('#front-side').on('click', function() {
        specify = 'front-side-image'
        pixie.openEditorWithImage(document.querySelector('#front-side-image'));
    })
    $('#back-side').on('click', function() {
        specify = 'back-side-image'
        pixie.openEditorWithImage(document.querySelector('#back-side-image'));
    })
    $('#right-side').on('click', function() {
        specify = 'right-side-image'
        pixie.openEditorWithImage(document.querySelector('#right-side-image'));
    })
    $('#internal').on('click', function() {
        specify = 'internal-image'
        pixie.openEditorWithImage(document.querySelector('#internal-image'));
    })
   
})
