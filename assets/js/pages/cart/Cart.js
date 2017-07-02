var Cart = function(){}

Cart.prototype.removeItem = function(id){
    this.item.remove.call(this, id);
}

Cart.prototype.item = {db:{}, remove:null, drawRemove:null};

// #Remove Step 1
Cart.prototype.item.remove = function(id){
    var self = this;

    self.item.db.remove.call(self, id).then(function(response){
        if(response.status){
            self.item.drawRemove.call(self, id);
        }
    });
}


// #Remove Step 2
Cart.prototype.item.db.remove = function(id){

    var p = new Promise(function(resolve, reject){
        let response = {status:1, data:{}};
        resolve(response);
    }); 

    return p;     
}


// #Remove Step 3
Cart.prototype.item.drawRemove = function(id){
  
   var $cartItem = $('#cartProduct'+id);
   var $cartContent = $cartItem.find('.cartContent');
    //$cartItem.css('opacity', 0);

    $cartContent.css('opacity', 0);

        $cartItem.slideUp(400);
        setTimeout(()=>{
            $cartItem.remove();
            this.adjustAmounts();
            this.adjustQty();
        }, 400);
 
}




Cart.prototype.adjustQty = function(){
   var cartQty =  $("#cartPage .cartItem").length;
   // update qty
   $('#cartPage .cartQty').text(cartQty);
};


Cart.prototype.adjustAmounts = function(){
    
    var subTotal = 0;

    $('#cartPage .cartItem').each(function(item, index){
        var $item = $(this);
        var productTotal = parseInt($item.find('.productTotal .amount').text().replace(',', ''));

        subTotal+=productTotal;
        
    });


    $('#paymentCol .subTotal .amount').html(number_format(subTotal));
    var grandTotal = subTotal + (subTotal > 0? config.shippingCost:0);

    $('#paymentCol .grandTotal .amount').html(number_format(grandTotal));
    
}