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

    $cartItem.css('opacity', 0);
    
    setTimeout(()=>{
        $cartItem.remove();
    }, 400);

    /////


  this.adjustAmounts();

    
}


Cart.prototype.adjustAmounts = function(){
    
}