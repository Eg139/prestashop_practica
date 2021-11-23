$(document).ready(function(){
    $('#get_products').click(function(){
        $.ajax({
            url:'../modules/deadpool/ajax.php',
            data:{
                action:'getproducts',
                token:new Date().getTime(),
                id_category:$('#id_category').val()
            },
            method:'POST',
            success:function(data){
                $('#category_products').html(data);
            }
        })
    });
});