if (window.history && history.pushState) {
    addEventListener('load', function() {
       history.pushState(null, null, null); // creates new history entry with same URL
       addEventListener('popstate', function() {
          var stayOnPage = confirm("Warning Changes Not Saved! Press cancel to complete this hire contract otherwise your changes will be lost.");
          if (stayOnPage) {
             history.back()
          } else {
             history.pushState(null, null, null);
          }
       });
    });
 }
var scrolled = 0;
$(document).ready(function () {
    $(document).on('change', 'input', function () {
        if ($(this).attr('id') == 'contact') {
            var selected_val = $(this).val();
            var sel_company
            for (var i = 0; i < contacts.length; i++) {
                if (contacts[i].contact == selected_val) {
                    sel_company = contacts[i];
                }
            }
            if (sel_company) {                
                $("#company").val(sel_company['company']);
                $("#email").val(sel_company['email']);
                $("#phone").val(sel_company['phone']);
                $("#mobile").val(sel_company['mobile']);
                $("#address").val(sel_company['address']);
                $("#insurer").val(sel_company['insurer']);
                $("#policy_num").val(sel_company['policy_num']);
                $("#broker").val(sel_company['broker']);
                $("#policy_type").val(sel_company['policy_type']);
                $("#policy_expiry").val(sel_company['policy_expiry']);
                $("#policy_notes").val(sel_company['policy_notes']);
            }
            else {
                $("#company").val('')
                $("#email").val('')
                $("#phone").val('')
                $("#mobile").val('')
                $("#address").val('')
                $("#insurer").val('');
                $("#policy_num").val('');
                $("#broker").val('');
                $("#policy_type").val('');
                $("#policy_expiry").val('');
                $("#policy_value").val('');
                $("#policy_notes").val('');
                toastr.error('This contact not defined!')
                $("#contact").val('')
            }
        }        
    });

    $("#hire_rate").keyup(function() {
        var sel_type = $("#hire_type").val()
        var hire_rate = $("#hire_rate").val()
        var monthly_rate = 0
        if (sel_type == "Weekly") {
            monthly_rate = hire_rate * 4
        } else {
            monthly_rate = (hire_rate * 52) / 12
        }
        monthly_rate = Math.round(monthly_rate * 100) / 100;
        $("#monthly_rate").val(monthly_rate)
    })

    $("#tanker_id").on('change', function () {
        var sel_id = $(this).val();
        var sel_tank;
        for (var i = 0; i < tankers.length; i++) {
            if (tankers[i].id == sel_id) {
                sel_tank = tankers[i];
            }
        }
        $("#equipment").val(sel_tank['equipment']);
        $("#make").val(sel_tank['make']);
        $("#chassis").val(sel_tank['chassis_num']);
    });
    $("#abort_btn").click(function () {

        toastr.error("<span id='confirmationRevertYes' class='pl-10'>Yes</span><span id='confirmationRevertNo' class='pl-10'>No</span>", 'Are you sure, refresh all?',
            {
                closeButton: false,
                allowHtml: true,
                onShown: function (toast) {
                    $("#confirmationRevertYes").click(function () {

                        $("#hire_create_form").find("input[type=text], input[type=range], input[type=date], select, textarea").val("")
                        $("#hire_create_form").find("input[type=radio]").prop("checked", false)

                        $("#discharge_pump_f").prop("checked", true)
                        $("#maintenance_included_f").prop("checked", true)
                        $("#tyres_included_f").prop("checked", true)

                        var now = new Date();
                        var day = ("0" + now.getDate()).slice(-2);
                        var month = ("0" + (now.getMonth() + 1)).slice(-2);
                        var today = now.getFullYear() + "-" + (month) + "-" + (day);
                        $('#tcl_sign_date').val(today);
                        $("#hirer_sign_date").val(today);

                        $("#hirer_signature-image-form").attr('value', '/img/sign.png')
                        $("#hirer_signature-image").attr('src', '/img/sign.png')
                        $("#tcl_signature-image-form").attr('value', '/img/sign.png')
                        $("#tcl_signature-image").attr('src', '/img/sign.png')
                        $("#tcl_name").val(user['name'])
                        $("#tcl_position").val(user['jobtitle'])
                        $("#tcl_behalf").val('TCL Tanker Rental Limited')
                        $("#hirer_ip").val("https://tanker.cloud")
                        $("#hirer_geo").val("TCL host")

                        toastr.success("Done! Record cleared successful.", 'Success!', { timeOut: 5000 });
                    });
                }
            });
    });
    var readURL = function (input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                var file_data = $('#document').prop('files')[0];
                var form_data = new FormData();
                form_data.append('document', file_data);
                form_data.append('_token', $("[name='_token']").val());
                console.log(form_data)
                $.ajax({
                    url: base_url + '/hires/documentUpload',
                    data: form_data,
                    cache: false,
                    contentType: false,
                    processData: false,
                    type: 'post',
                    success: function (response) {
                        // $('#user_avatar').attr('src', e.target.result);
                        console.log(response);
                    }
                });
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#but_upload").on('click', function () {
        $("#document").click();
    });
    $("#but_remove").on('click', function () {
        var html = '';
        var document_path = '';
        $('.docs-url').html(html);
        $('#document_path').val(document_path);
        toastr.success("Document Removed Successfully!", 'Success!', { timeOut: 5000 });
    });
    // $("#start_date").on('change', function () {
    //     var expiry = $("#policy_expiry").val();
    //     var startDate = $('#start_date').val();
    //     expiry = new Date(expiry);
    //     startDate = new Date(startDate);

    //     if (expiry <= startDate) {
    //         toastr.error('Policy has already expired!');
    //         $('#start_date').val('');
    //     }
    // });
    $("#document").on('change', function () {
        // readURL(this);
        var fd = new FormData();
        var files = $('#document')[0].files;
        for (var index = 0; index < files.length; index++) {
            fd.append('document[]', files[index]);
        }

        fd.append('_token', $("[name='_token']").val());
        $.ajax({
            url: base_url + '/hires/documentUpload',
            data: fd,
            dataType: 'json',
            cache: false,
            contentType: false,
            processData: false,
            type: 'post',
            success: function (response) {
                var document_path = "";
                var html = "";
                var doc_cnt = 0;
                if (editing) {
                    if (hire.attached_doc) {
                        document_path = hire.attached_doc + ';';
                        var docs_url = hire.attached_doc.split(";");
                        console.log(docs_url);
                        doc_cnt = docs_url.length;
                        for (var i = 0; i < doc_cnt; i++) {
                            console.log(docs_url[i]);
                            let index = docs_url[i].indexOf('__');
                            let index_dot = docs_url[i].indexOf('.');
                            let fn = docs_url[i].substring(index+2, index_dot);
                            if(fn.length > 10)
                                fn = fn.substring(0, 10) + '...';
                            html += `<a href="asset(${docs_url[i]})" target="_blank" class="text-sm text-blue-600 cursor-pointer">${fn}</a>`;
                        }
                    }
                }
                for (var i = 0; i < response.path.length; i++) {
                    html += `<a href="asset(${response.path[i]})" target="_blank" class="text-sm text-red-600 cursor-pointer">${response.original_name[i]}</a>`;
                    document_path += response.path[i];
                    if (i < (response.path.length - 1)) {
                        document_path += ';';
                    }
                }
                $('.docs-url').html(html);
                $('#document_path').val(document_path);
                toastr.success("Document Uploaded Successfully!", 'Success!', { timeOut: 5000 });
            }
        });
    });
});
