
var base_url = 'http://localhost:2222/lucky-star-computer-php';

jQuery(document).ready(function() {
        
    // Date Picker
    jQuery('#datepicker').datepicker({
        format: "yyyy-mm-dd",
        startView: 2,
        autoclose: true
    });

})

$(document).ready(function(){
  $('#save-user').on('click',function(e) {  
      e.preventDefault();
      swal({
            title : "Success!",
            text : "User has been inserted.",
            type : "success",
            timer : 2000,
            showConfirmButton : false
      }, function() {
          window.location.href =  base_url + "/admin/user/viewuser";
      });
  });
});
