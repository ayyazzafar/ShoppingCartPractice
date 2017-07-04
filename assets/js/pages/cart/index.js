var cart = new Cart();



$('body').on('click', '#cartPage .cartItem .remove', function(e){

    e.preventDefault();

    var productId = $(this).closest('[data-productId]').attr('data-productId');
    
    cart.removeItem(productId);
        
});;


$('body').on('change', '#cartPage .cartItem select.qty',function(e){

    e.preventDefault();
    var qty = $(this).val();
    var id = $(this).closest('.cartItem').attr('data-productid');
    cart.changeItemQty(id, qty);
        
});;


$("body").on('click', '#cartPage #similarProducts .addToCartBtn', function(e){
    e.preventDefault();
   var id =  $(this).closest('[data-productId]').attr('data-productId');
   
    cart.addProduct(id);
});