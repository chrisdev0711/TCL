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
                            path: "M127.490823,4.77502296 C125.674364,3.58126722 124.08881,2.78543006 122.734162,2.78543006 C120.686797,2.78543006 115.252812,6.36669728 106.401421,13.345577 C91.4233274,25.0994796 75.3060983,39.6388124 58.080521,56.7646159 C44.9188869,33.0578512 34.9437537,15.1362106 28.5861456,3.18334864 C27.2314979,1.19375574 25.1841326,0 22.2285376,0 C20.642984,0 19.0574304,0.59687787 17.687389,1.79063361 C16.3327413,2.98438935 15.8709295,4.37710438 15.8709295,5.57086012 C15.8709295,6.96357515 16.1018354,8.35629017 17.0100651,9.94796449 C21.3203079,18.3195592 24.7223209,24.4872972 27.2161042,28.466483 L48.3055062,66.9115396 C30.1716992,87.6339149 15.4245115,108.953168 4.54114861,131.267218 C1.37004144,137.235996 0,141.031527 0,143.02112 C0,147.597184 2.26287744,150 7.03493191,150 C9.75962108,150 11.7915927,148.209366 13.6080521,144.827058 C17.9182948,135.858586 21.3203079,129.292929 24.044997,124.915825 C26.0923623,121.732476 28.3552398,117.737986 30.6181172,112.962963 C32.6654825,108.983777 36.2830077,103.397612 41.285968,96.6329966 C47.1817644,88.8582798 51.9538188,83.0884604 55.124926,79.3082339 C68.5020722,103.412917 80.5245708,124.716866 91.1924216,143.051729 C93.008881,146.235078 95.2717584,148.025712 97.9964476,148.025712 C100.043813,148.025712 101.844879,147.229875 103.21492,146.036119 C104.569568,144.643404 105.262285,143.250689 105.262285,141.659014 C102.537596,132.889501 100.505625,127.318641 99.5973949,125.329048 C98.6891652,123.339455 96.6417999,121.548822 93.7015986,120.355066 C84.6346951,105.019896 75.1059799,87.8940924 64.6690349,69.1613101 C87.3593843,46.0514233 108.21788,27.9308234 127.275311,14.5852464 C129.09177,13.3914907 130,11.6008571 130,9.21334558 C129.984606,7.77471687 129.076377,6.36669728 127.490823,4.77502296 Z",
                        },
                    }
                ]
            }
        },

        onLoad: function () {
            pixie.getTool('shapes').addBasicShape('Cross');
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

        $("#tcl_sign_date").val(today);
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
