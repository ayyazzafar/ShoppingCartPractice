var cart = new Cart();
cart.name = 'ayyaz';
var cart = new Cart();

var cart = new Cart();


$('#cartPage .cartItem .remove').click(function(e){

    e.preventDefault();

    var productId = $(this).closest('[data-productId]').attr('data-productId');
    
    cart.removeItem(productId);
        
});;