$(document).ready(function () {
    var specify;
    if (editing && typeof checkListObj != "undefined") {
        $('#supervisor_signature-image-form').val(checkListObj.supervisor_signature);
    }

    function setDefaultVisible() {
        if (specify === 'hirer_signature-image' || specify === 'tcl_signature-image' || specify === 'supervisor_signature-image') {
            $('navigation-bar .scroll-container').find('button').eq(0).css('display', 'block')
            $('navigation-bar .scroll-container').find('button').eq(1).css('display', 'none')
        } else {
            $('navigation-bar .scroll-container').find('button').eq(0).css('display', 'none')
            $('navigation-bar .scroll-container').find('button').eq(1).css('display', 'block')
        }
    }
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
                    { name: 'pen', icon: 'pencil-custom', action: 'draw' },
                    // { name: 'text', icon: 'text-box-custom', action: 'text' },
                    { name: 'Edit', icon: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQKwn1Hg1hFGtksc1m75qsibBho7ky87JqVPL58xADs8KktyQizLd0F5D0KEepCmQbYOLI&usqp=CAU', action: 'shapes' },
                    // { name: 'stickers', icon: 'sticker-custom', action: 'stickers' },
                ]
            },
            openImageDialog: null,
        },
        ToolbarItemAction: ['exportImage', 'toggleHistory', 'closeEditor'],
        tools: {
            shapes: {
                replaceDefault: true,
                items: [
                    {
                        name: 'Cross',
                        type: 'Path',

                        options: {
                            lockUniScaling: true,
                            path: "M40 548 c-10 -10 10 -35 95 -120 l108 -108 -108 -108 c-85 -85 -105 -110 -95 -120 10 -10 35 10 120 95 l108 108 108 -108 c85 -85 110 -105 120 -95 10 10 -10 35 -95 120 l-108 108 108 108 c85 85 105 110 95 120 -10 10 -35 -10 -120 -95 l-108 -108 -108 108 c-85 85 -110 105 -120 95z",
                        },
                    }
                ]
            }
        },

        onLoad: function () {
            pixie.getTool('shapes').addBasicShape('X-mark');
            $('.mat-focus-indicator.mat-menu-trigger.mat-button.mat-button-base.ng-star-inserted').css('display', 'none')
            // $('.mat-focus-indicator.mat-button.mat-button-base.mat-icon-button.ng-star-inserted').css('display','none')
            $('toolbar .right').find('toolbar-item').eq(2).css('display', 'none')
        },
        onOpen: function () {

            if ($(window).width() < 950) {
                var i = 0;
                $('.mat-focus-indicator.mat-button.mat-button-base.mat-icon-button.ng-star-inserted').css('margin', 'auto');
                setDefaultVisible();
                $('.no-style.control-button.ng-star-inserted').css('margin', 'auto');
                $('.no-style.control-button.ng-star-inserted').on('click', function () {
                    $('.mat-focus-indicator.mat-icon-button.mat-button-base').eq(0).css('display', 'none')
                    $('.mat-focus-indicator.mat-icon-button.mat-button-base').on('click', function () {
                        setDefaultVisible();
                        $('.no-style.control-button.ng-star-inserted').css('margin', 'auto');
                        i++;
                        if (specify == "tcl_signature-image" || specify == "hirer_signature-image" || specify == "supervisor_signature-image") {
                            if (i == 1) {
                                setTimeout(() => {
                                    $('.mat-focus-indicator.mat-button.mat-button-base.mat-icon-button.ng-star-inserted').eq(1).click();
                                    pixie.close();
                                    i = 0;
                                }, 20);

                            }
                        }
                        else {
                            if (i == 2) {
                                setTimeout(() => {
                                    $('.mat-focus-indicator.mat-button.mat-button-base.mat-icon-button.ng-star-inserted').eq(1).click();
                                    pixie.close();
                                    i = 0;
                                }, 20);

                            }
                        }
                    });
                    $('.mat-focus-indicator.mat-button.mat-button-base.mat-icon-button.ng-star-inserted').css('display', 'block');
                })
            }
            setDefaultVisible();
            $('.mat-focus-indicator.mat-menu-trigger.mat-button.mat-button-base.ng-star-inserted').eq(0).parent().css('display', 'none');
            $('.mat-focus-indicator.mat-button.mat-button-base.mat-icon-button.ng-star-inserted').eq(1).parent().css('display', 'none');
            $('.apply-button').css('display', 'none');
            $('.cancel-button').css('display', 'none');
            $('.parentForm').attr('onsubmit', "return false")
            $('.apply-button').on('click', function () {
                $('.button-with-image').css('display', 'none');
                setTimeout(() => {

                    $('.button-with-image').first().css('display', 'block');
                    $('.button-with-image').first().css('margin', 'auto');
                }, 10);

                // $('.button-with-image').slice(1).remove();
                setDefaultVisible();
            })
            $('.cancel-button').on('click', function () {
                setDefaultVisible();
            })
            $('.upper-canvas').on('click', function () {
                setDefaultVisible();
                $('.button-with-image').css('display', 'none');
                setTimeout(() => {

                    $('.button-with-image').first().css('display', 'block');
                    $('.button-with-image').first().css('margin', 'auto');
                }, 10);
            })
            $('.mat-focus-indicator').eq(1).on('click', function () {
                setDefaultVisible();
            })
            $('.apply-button').on('click', function () {
                setTimeout(() => {
                    $('.button-with-image').first().on('click', function () {
                        $('.cancel-button').on('click', function () {
                            setTimeout(() => {
                                setDefaultVisible();
                            }, 10);
                        })
                    })
                }, 100);
            })

        },
        onSave: function (data, name) {
            let current_Url;
            let imageId;
            let imageFormId;

            switch (specify) {
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
                case 'hirer_signature-image':
                    name = 'hirer_signature-image.' + name.split('.').pop()
                    current_Url = $('#hirer_signature-image').attr('src')
                    imageId = '#hirer_signature-image'
                    imageFormId = '#hirer_signature-image-form'
                    break;
                case 'tcl_signature-image':
                    name = 'tcl_signature.' + name.split('.').pop()
                    current_Url = $('#tcl_signature-image').attr('src')
                    imageId = '#tcl_signature-image'
                    imageFormId = '#tcl_signature-image-form'
                    break;
                case 'supervisor_signature-image':
                    name = 'supervisor_signature.' + name.split('.').pop()
                    current_Url = $('#supervisor_signature-image').attr('src')
                    imageId = '#supervisor_signature-image'
                    imageFormId = '#supervisor_signature-image-form'
                    break;
            }


            pixie.http()
                .post(image_saveUrl,
                    {
                        _token: csrf_token,
                        name: name,
                        data: data,
                        current_Url: current_Url
                    })
                .subscribe(function (response) {
                    $(imageId).attr('src', response.filePath)
                    $(imageFormId).attr('value', response.filePath)
                    // console.log(response);
                });
        },
        onClose: function () {
            $('.parentForm').attr('onsubmit', "")
            $('.cancel-button').click();
            $('.cancel-button').click();
            onPixieClose();
        }
    });


    $('#left-side').on('click', function () {
        specify = 'left-side-image'
        pixie.openEditorWithImage(document.querySelector('#left-side-image'));
    })
    $('#front-side').on('click', function () {
        specify = 'front-side-image'
        pixie.openEditorWithImage(document.querySelector('#front-side-image'));
    })
    $('#back-side').on('click', function () {
        specify = 'back-side-image'
        pixie.openEditorWithImage(document.querySelector('#back-side-image'));
    })
    $('#right-side').on('click', function () {
        specify = 'right-side-image'
        pixie.openEditorWithImage(document.querySelector('#right-side-image'));
    })
    $('#internal').on('click', function () {
        specify = 'internal-image'
        pixie.openEditorWithImage(document.querySelector('#internal-image'));
    })
    $('#tcl_signature').on('click', function () {
        specify = 'tcl_signature-image'
        pixie.openEditorWithImage(document.querySelector('#tcl_signature-image'));
    })
    $('#hirer_signature').on('click', function () {
        specify = 'hirer_signature-image'
        pixie.openEditorWithImage(document.querySelector('#hirer_signature-image'));
    })
    $('#supervisor_signature').on('click', function () {
        specify = 'supervisor_signature-image'
        pixie.openEditorWithImage(document.querySelector('#supervisor_signature-image'));
    })

    if (!editing) {
        var now = new Date();

        var day = ("0" + now.getDate()).slice(-2);
        var month = ("0" + (now.getMonth() + 1)).slice(-2);

        var today = now.getFullYear() + "-" + (month) + "-" + (day);

        $('#tcl_sign_date').val(today);
        $("#hirer_sign_date").val(today);
    }
    $(".down").click(function () {
        $('html, body').animate({
            scrollTop: $(".up").offset().top
        }, 1500);
    });
    $(".up").click(function () {
        $('html, body').animate({
            scrollTop: $(".down").offset().top - 250
        }, 1000);
    });
    $("#check-list-wastes-form").submit(function (event) {
        event.preventDefault();
        if (!isSuperAdmin) {
            if (hire.tanker.ext_splat_left != $('#left-side-image-form').val() ||
                hire.tanker.ext_splat_front != $('#front-side-image-form').val() ||
                hire.tanker.ext_splat_rear != $('#back-side-image-form').val() ||
                hire.tanker.ext_splat_right != $('#right-side-image-form').val() ||
                hire.tanker.int_splat != $('#internal-image-form').val()
            ) {
                specify = 'supervisor_signature-image'
                pixie.openEditorWithImage(document.querySelector('#supervisor_signature-image'));
            }

            else {
                $("#check-list-wastes-form").unbind('submit').submit();
            }
        }
        else {
            $("#check-list-wastes-form").unbind('submit').submit();
        }
    })

    $("#check-list-wastes-edit-form").submit(function (event) {
        event.preventDefault();
        if (!isSuperAdmin) {
            if (checkListObj.ext_splat_left != $('#left-side-image-form').val() ||
                checkListObj.ext_splat_front != $('#front-side-image-form').val() ||
                checkListObj.ext_splat_rear != $('#back-side-image-form').val() ||
                checkListObj.ext_splat_right != $('#right-side-image-form').val() ||
                checkListObj.int_splat != $('#internal-image-form').val()
            ) {
                specify = 'supervisor_signature-image'
                pixie.openEditorWithImage(document.querySelector('#supervisor_signature-image'));
            }
            else
                $("#check-list-wastes-edit-form").unbind('submit').submit();
        }
        else {
            $("#check-list-wastes-edit-form").unbind('submit').submit();
        }
    })

    $("#check-list-rigids-form").submit(function (event) {
        event.preventDefault();
        if (!isSuperAdmin) {
            if (hire.tanker.ext_splat_left != $('#left-side-image-form').val() ||
                hire.tanker.ext_splat_front != $('#front-side-image-form').val() ||
                hire.tanker.ext_splat_rear != $('#back-side-image-form').val() ||
                hire.tanker.ext_splat_right != $('#right-side-image-form').val() ||
                hire.tanker.int_splat != $('#internal-image-form').val()
            ) {
                specify = 'supervisor_signature-image'
                pixie.openEditorWithImage(document.querySelector('#supervisor_signature-image'));
            }

            else {
                $("#check-list-rigids-form").unbind('submit').submit();
            }
        }
        else {
            $("#check-list-rigids-form").unbind('submit').submit();
        }
    })

    $("#check-list-rigids-edit-form").submit(function (event) {
        event.preventDefault();
        if (!isSuperAdmin) {
            if (checkListObj.ext_splat_left != $('#left-side-image-form').val() ||
                checkListObj.ext_splat_front != $('#front-side-image-form').val() ||
                checkListObj.ext_splat_rear != $('#back-side-image-form').val() ||
                checkListObj.ext_splat_right != $('#right-side-image-form').val() ||
                checkListObj.int_splat != $('#internal-image-form').val()
            ) {
                specify = 'supervisor_signature-image'
                pixie.openEditorWithImage(document.querySelector('#supervisor_signature-image'));
            }
            else
                $("#check-list-rigids-edit-form").unbind('submit').submit();
        }
        else {
            $("#check-list-rigids-edit-form").unbind('submit').submit();
        }
    })

    $("#check-list-vacuums-form").submit(function (event) {
        event.preventDefault();
        if (!isSuperAdmin) {
            if (hire.tanker.ext_splat_left != $('#left-side-image-form').val() ||
                hire.tanker.ext_splat_front != $('#front-side-image-form').val() ||
                hire.tanker.ext_splat_rear != $('#back-side-image-form').val() ||
                hire.tanker.ext_splat_right != $('#right-side-image-form').val() ||
                hire.tanker.int_splat != $('#internal-image-form').val()
            ) {
                specify = 'supervisor_signature-image'
                pixie.openEditorWithImage(document.querySelector('#supervisor_signature-image'));
            }

            else {
                $("#check-list-vacuums-form").unbind('submit').submit();
            }
        }
        else {
            $("#check-list-vacuums-form").unbind('submit').submit();
        }
    })

    $("#check-list-vacuums-edit-form").submit(function (event) {
        event.preventDefault();
        if (!isSuperAdmin) {
            if (checkListObj.ext_splat_left != $('#left-side-image-form').val() ||
                checkListObj.ext_splat_front != $('#front-side-image-form').val() ||
                checkListObj.ext_splat_rear != $('#back-side-image-form').val() ||
                checkListObj.ext_splat_right != $('#right-side-image-form').val() ||
                checkListObj.int_splat != $('#internal-image-form').val()
            ) {
                specify = 'supervisor_signature-image'
                pixie.openEditorWithImage(document.querySelector('#supervisor_signature-image'));
            }
            else
                $("#check-list-vacuums-edit-form").unbind('submit').submit();
        }
        else {
            $("#check-list-vacuums-edit-form").unbind('submit').submit();
        }
    })

    $("#check-list-petrols-form").submit(function (event) {
        event.preventDefault();

        if (!isSuperAdmin) {
            if (hire.tanker.ext_splat_left != $('#left-side-image-form').val() ||
                hire.tanker.ext_splat_front != $('#front-side-image-form').val() ||
                hire.tanker.ext_splat_rear != $('#back-side-image-form').val() ||
                hire.tanker.ext_splat_right != $('#right-side-image-form').val() ||
                hire.tanker.int_splat != $('#internal-image-form').val()
            ) {
                specify = 'supervisor_signature-image'
                pixie.openEditorWithImage(document.querySelector('#supervisor_signature-image'));
            }

            else {
                $("#check-list-petrols-form").unbind('submit').submit();
            }
        }
        else {
            $("#check-list-petrols-form").unbind('submit').submit();
        }
    })

    $("#check-list-petrols-edit-form").submit(function (event) {
        event.preventDefault();
        if (!isSuperAdmin) {
            if (checkListObj.ext_splat_left != $('#left-side-image-form').val() ||
                checkListObj.ext_splat_front != $('#front-side-image-form').val() ||
                checkListObj.ext_splat_rear != $('#back-side-image-form').val() ||
                checkListObj.ext_splat_right != $('#right-side-image-form').val() ||
                checkListObj.int_splat != $('#internal-image-form').val()
            ) {
                specify = 'supervisor_signature-image'
                pixie.openEditorWithImage(document.querySelector('#supervisor_signature-image'));
            }
            else
                $("#check-list-petrols-edit-form").unbind('submit').submit();
        }
        else {
            $("#check-list-petrols-edit-form").unbind('submit').submit();
        }

    })

    $("#check-list-nrs-form").submit(function (event) {
        event.preventDefault();
        if (!isSuperAdmin) {
            if (hire.tanker.ext_splat_left != $('#left-side-image-form').val() ||
                hire.tanker.ext_splat_front != $('#front-side-image-form').val() ||
                hire.tanker.ext_splat_rear != $('#back-side-image-form').val() ||
                hire.tanker.ext_splat_right != $('#right-side-image-form').val() ||
                hire.tanker.int_splat != $('#internal-image-form').val()
            ) {
                specify = 'supervisor_signature-image'
                pixie.openEditorWithImage(document.querySelector('#supervisor_signature-image'));
            }

            else {
                $("#check-list-nrs-form").unbind('submit').submit();
            }
        }
        else {
            $("#check-list-nrs-form").unbind('submit').submit();
        }
    })

    $("#check-list-nrs-edit-form").submit(function (event) {
        event.preventDefault();
        if (!isSuperAdmin) {
            if (checkListObj.ext_splat_left != $('#left-side-image-form').val() ||
                checkListObj.ext_splat_front != $('#front-side-image-form').val() ||
                checkListObj.ext_splat_rear != $('#back-side-image-form').val() ||
                checkListObj.ext_splat_right != $('#right-side-image-form').val() ||
                checkListObj.int_splat != $('#internal-image-form').val()
            ) {
                specify = 'supervisor_signature-image'
                pixie.openEditorWithImage(document.querySelector('#supervisor_signature-image'));
            }
            else
                $("#check-list-nrs-edit-form").unbind('submit').submit();
        }
        else {
            $("#check-list-nrs-edit-form").unbind('submit').submit();
        }

    })

    $("#check-list-milks-form").submit(function (event) {
        event.preventDefault();

        if (!isSuperAdmin) {
            if (hire.tanker.ext_splat_left != $('#left-side-image-form').val() ||
                hire.tanker.ext_splat_front != $('#front-side-image-form').val() ||
                hire.tanker.ext_splat_rear != $('#back-side-image-form').val() ||
                hire.tanker.ext_splat_right != $('#right-side-image-form').val() ||
                hire.tanker.int_splat != $('#internal-image-form').val()
            ) {
                specify = 'supervisor_signature-image'
                pixie.openEditorWithImage(document.querySelector('#supervisor_signature-image'));
            }

            else {
                $("#check-list-milks-form").unbind('submit').submit();
            }
        }

        else {
            $("#check-list-milks-form").unbind('submit').submit();
        }

    })

    $("#check-list-milks-edit-form").submit(function (event) {
        event.preventDefault();

        if (!isSuperAdmin) {
            if (checkListObj.ext_splat_left != $('#left-side-image-form').val() ||
                checkListObj.ext_splat_front != $('#front-side-image-form').val() ||
                checkListObj.ext_splat_rear != $('#back-side-image-form').val() ||
                checkListObj.ext_splat_right != $('#right-side-image-form').val() ||
                checkListObj.int_splat != $('#internal-image-form').val()
            ) {
                specify = 'supervisor_signature-image'
                pixie.openEditorWithImage(document.querySelector('#supervisor_signature-image'));
            }
            else
                $("#check-list-milks-edit-form").unbind('submit').submit();
        }
        else {
            $("#check-list-milks-edit-form").unbind('submit').submit();
        }
    })

    $("#check-list-foods-form").submit(function (event) {
        event.preventDefault();

        if (!isSuperAdmin) {
            if (hire.tanker.ext_splat_left != $('#left-side-image-form').val() ||
                hire.tanker.ext_splat_front != $('#front-side-image-form').val() ||
                hire.tanker.ext_splat_rear != $('#back-side-image-form').val() ||
                hire.tanker.ext_splat_right != $('#right-side-image-form').val() ||
                hire.tanker.int_splat != $('#internal-image-form').val()
            ) {
                specify = 'supervisor_signature-image'
                pixie.openEditorWithImage(document.querySelector('#supervisor_signature-image'));
            }

            else {
                $("#check-list-foods-form").unbind('submit').submit();
            }
        }
        else {
            $("#check-list-foods-form").unbind('submit').submit();
        }
    })

    $("#check-list-foods-edit-form").submit(function (event) {
        event.preventDefault();
        if (!isSuperAdmin) {
            if (checkListObj.ext_splat_left != $('#left-side-image-form').val() ||
                checkListObj.ext_splat_front != $('#front-side-image-form').val() ||
                checkListObj.ext_splat_rear != $('#back-side-image-form').val() ||
                checkListObj.ext_splat_right != $('#right-side-image-form').val() ||
                checkListObj.int_splat != $('#internal-image-form').val()
            ) {
                specify = 'supervisor_signature-image'
                pixie.openEditorWithImage(document.querySelector('#supervisor_signature-image'));
            }
            else
                $("#check-list-foods-edit-form").unbind('submit').submit();
        }
        else {
            $("#check-list-foods-edit-form").unbind('submit').submit();
        }
    })
});

function onPixieClose() {
    var supervisor_sign = $('#supervisor_signature-image').attr("src");
    console.log(supervisor_sign);
    if (supervisor_sign != "/img/supervisor_sign.png") {
        if (typeof flg != "undefined") {
            if (flg == "foods") {
                if (editing)
                    $("#check-list-foods-edit-form").unbind('submit').submit();
                else
                    $("#check-list-foods-form").unbind('submit').submit();
            }
            if (flg == "milks") {
                if (editing)
                    $("#check-list-milks-edit-form").unbind('submit').submit();
                else
                    $("#check-list-milks-form").unbind('submit').submit();
            }
            if (flg == "n_rs") {
                if (editing)
                    $("#check-list-nrs-edit-form").unbind('submit').submit();
                else
                    $("#check-list-nrs-form").unbind('submit').submit();
            }
            if (flg == "petrols") {
                if (editing)
                    $("#check-list-petrols-edit-form").unbind('submit').submit();
                else
                    $("#check-list-petrols-form").unbind('submit').submit();
            }
            if (flg == "rigids") {
                if (editing)
                    $("#check-list-rigids-edit-form").unbind('submit').submit();
                else
                    $("#check-list-rigids-form").unbind('submit').submit();
            }
            if (flg == "vacuums") {
                if (editing)
                    $("#check-list-vacuums-edit-form").unbind('submit').submit();
                else
                    $("#check-list-vacuums-form").unbind('submit').submit();
            }
            if (flg == "wastes") {
                console.log('aeee');
                if (editing)
                    $("#check-list-wastes-edit-form").unbind('submit').submit();
                else
                    $("#check-list-wastes-form").unbind('submit').submit();
            }
        }
    }
}

$(window).resize(function () {
    setDefaultVisible();
    $('.no-style.control-button.ng-star-inserted').css('margin', 'auto');
    $('.no-style.control-button.ng-star-inserted').on('click', function () {
        $('.mat-focus-indicator.mat-icon-button.mat-button-base').on('click', function () {
            setDefaultVisible();
            $('.no-style.control-button.ng-star-inserted').css('margin', 'auto');
        });
        // $('.mat-focus-indicator.mat-button.mat-button-base.mat-icon-button.ng-star-inserted').css('display', 'block');
    })
});
