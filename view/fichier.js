
$(document).on("click",".btn",function(){

    var email=$(this).data('email'), prenom=$(this).data('name');

    $(".modal-body #confirm").val(email)
document.getElementById('text').innerHTML=prenom
});


