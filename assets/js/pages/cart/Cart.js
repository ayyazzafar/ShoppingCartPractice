var Cart = function(){}

Cart.prototype.item = {db:{}, remove:null, drawRemove:null};

Cart.prototype.removeItem = function(id){
    this.item.remove.call(this, id);
}

Cart.prototype.changeItemQty = function(id, qty){

    this.item.changeQty.call(this, id, qty);

}

Cart.prototype.item.changeQty = function(id, qty){

    var self = this;
    this.item.db.updateQty(id, qty).then(response=>{
            self.item.drawChangeQty.call(self, id, qty);
    });
    
}

Cart.prototype.item.drawChangeQty = function(id, qty){

    qty = parseInt(qty);
    var $cartItem = $('#cartProduct'+id);
    var unitPrice = parseInt($cartItem.find('.unitPrice .amount').text().trim().split(',').join(''));
    
    var total = number_format(qty * unitPrice);


    $cartItem.find('.productTotal .amount').text(total);

    if(qty>1)
    {
        $cartItem.find('.unitPrice').removeClass('hidden');
    }
    else 
    {
        $cartItem.find('.unitPrice').addClass('hidden');
    }
    console.log(this);
    this.adjustAmounts();
    
}


Cart.prototype.item.db.updateQty = (id, qty)=>{

    var promise = new Promise(function(resolve, reject){
        resolve({status:1});
    });
    return promise;

}


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