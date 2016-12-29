$(document).ready(function(){
    $('.add-to-cart').on('click', function (e) {
        e.preventDefault();
        var id = $(this).data('id');
        $.ajax({
            url: '/cart/add',
            data: {id: id},
            type: 'GET',
            success: function(res){
                if(!res) alert('Ошибка!');
                console.log(res);
                //showCart(res);
            },
            error: function(){
                alert('Error!');
            }
        });
    });
});