var cart = new Cart();



$('#cartPage .cartItem .remove').click(function(e){

    e.preventDefault();

    var productId = $(this).closest('[data-productId]').attr('data-productId');
    
    cart.removeItem(productId);
        
});;


$('#cartPage .cartItem select.qty').change(function(e){

    e.preventDefault();
    var qty = $(this).val();
    var id = $(this).closest('.cartItem').attr('data-productid');
    cart.changeItemQty(id, qty);
        
});;