
var base_url = 'http://localhost:2222/lucky-star/';

jQuery(document).ready(function() {
        
    // Date Picker
    jQuery('#datepicker').datepicker({
        format: "yyyy-mm-dd",
        startView: 2,
        autoclose: true
    });

})

$(document).ready(function() {
    $('#save-user').on('click', function(e){
        e.preventDefault();
        swal({
            title : "Done!",
            text : "User has been updated.",
            type : "success",
            timer : 2000,
            showConfirmButton : false
        }, function() {
            $("#update-form").submit();
        });
    });
});

function confirmDelete(id){
    swal({
        title: "Are you sure?",
        text: "You won't be able to delete this!",
        type: "warning",
        showCancelButton: true,
        closeOnConfirm: false,
        showLoaderOnConfirm: true,
        },
        function(){
        setTimeout(function(){
            $.ajax({
                url: base_url + "admin/user/delete/" + id,
                type: "DELETE",
                dataType:"HTML",
                success: function () {
                    swal({
                        title : "Done!",
                        text : "It was succesfully deleted!",
                        type : "success",
                        timer : 1000,
                        showConfirmButton : false
                    }, function() {
                         window.location.href = '';
                    });
                   
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    swal("Error deleting!", "Please try again", "error");
                }
            });
        }, 2000);
    });
}
