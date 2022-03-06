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
        if ($(this).attr('id') == 'company') {
            console.log('sd');
            var selected_val = $(this).val();
            var sel_company
            for (var i = 0; i < contacts.length; i++) {
                if (contacts[i].contact == selected_val) {
                    sel_company = contacts[i];
                }
            }

            if (sel_company) {
                $("#postcode").val(sel_company['postcode']);
                $("#address").val(sel_company['address']);
            }
            else {
                $("#postcode").val(sel_company['postcode']);
                $("#address").val(sel_company['address']);
                toastr.error('This company not defined!')
            }
        }        
    });
});
