var cart = new Cart();



$('#cartPage .cartItem .remove').click(function(e){

    e.preventDefault();

    var productId = $(this).closest('[data-productId]').attr('data-productId');
    
    cart.removeItem(productId);
        
});;