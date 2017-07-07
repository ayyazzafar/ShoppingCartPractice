var Cart = function () {

    var self = this;
    this.importProductClass('../../assets/js/pages/products/Product.js');
}

Cart.prototype.importProductClass = function (src) {



    var promise = new Promise(function (resolve, reject) {
        var el = document.createElement('script');
        el.src = src;
        document.getElementsByTagName('body')[0].appendChild(el);

        el.onload = function () {
            resolve();
        };


    });

    return promise;


};

Cart.prototype.item = { db: {}, remove: null, drawRemove: null };

Cart.prototype.removeItem = function (id) {
    this.item.remove.call(this, id);
}

Cart.prototype.changeItemQty = function (id, qty) {

    this.item.changeQty.call(this, id, qty);

}

Cart.prototype.item.changeQty = function (id, qty) {

    var self = this;
    this.item.db.updateQty(id, qty).then(response => {
        self.item.drawChangeQty.call(self, id, qty);
    });

}

Cart.prototype.item.drawChangeQty = function (id, qty) {

    qty = parseInt(qty);
    var $cartItem = $('#cartProduct' + id);
    var unitPrice = parseInt($cartItem.find('.unitPrice .amount').text().trim().split(',').join(''));

    var total = number_format(qty * unitPrice);


    $cartItem.find('.productTotal .amount').text(total);

    if (qty > 1) {
        $cartItem.find('.unitPrice').removeClass('hidden');
    }
    else {
        $cartItem.find('.unitPrice').addClass('hidden');
    }
    console.log(this);
    this.adjustAmounts();

}


Cart.prototype.item.db.updateQty = (id, qty) => {

    var promise = new Promise(function (resolve, reject) {
        resolve({ status: 1 });
    });
    return promise;

}


// #Remove Step 1
Cart.prototype.item.remove = function (id) {
    var self = this;

    self.item.db.remove.call(self, id).then(function (response) {
        if (response.status) {
            self.item.drawRemove.call(self, id);
        }
    });
}


// #Remove Step 2
Cart.prototype.item.db.remove = function (id) {

    var p = new Promise(function (resolve, reject) {
        let response = { status: 1, data: {} };
        resolve(response);
    });

    return p;
}


// #Remove Step 3
Cart.prototype.item.drawRemove = function (id) {

    var $cartItem = $('#cartProduct' + id);
    var $cartContent = $cartItem.find('.cartContent');
    //$cartItem.css('opacity', 0);

    $cartContent.css('opacity', 0);

    $cartItem.slideUp(400);
    setTimeout(() => {
        $cartItem.remove();
        this.adjustAmounts();
        this.adjustQty();
    }, 400);

}




Cart.prototype.adjustQty = function () {
    var cartQty = $("#cartPage .cartItem").length;
    // update qty
    $('#cartPage .cartQty').text(cartQty);
};


Cart.prototype.adjustAmounts = function () {

    var subTotal = 0;

    $('#cartPage .cartItem').each(function (item, index) {
        var $item = $(this);
        var productTotal = parseInt($item.find('.productTotal .amount').text().replace(',', ''));

        subTotal += productTotal;

    });


    $('#paymentCol .subTotal .amount').html(number_format(subTotal));
    var grandTotal = subTotal + (subTotal > 0 ? config.shippingCost : 0);

    $('#paymentCol .grandTotal .amount').html(number_format(grandTotal));

}


Cart.prototype.drawAddProduct = function (productClObj) {


    var product = productClObj.product;


    var $template = $("#cartItemTemplate").find('.cartItem');

    $template.attr('data-productId', product.id);
    $template.attr('id', "cartProduct" + product.id);
    $template.find('.cartContent img').attr('src', base_dir + "assets/uploads/" + product.img);
    $template.find('.cartContent .description p').html(product.description);

    $selectElement = $template.find('.cartContent select[name="qty"]');

    $selectElement.html('');
    for (var i = 1; i <= product.qty; i++) {
        $selectElement.html($selectElement.html() + "<option value='" + i + "'>" + i + "</option>");
    }

    var discount = productClObj.calculateDiscount();
    var actualUnitPrice, unitPrice, totalPrice;

    actualUnitPrice = product.price;
    unitPrice = product.price - discount;
    totalPrice = unitPrice * product.qty;


    $template.find('.cartContent .productTotal .amount').html(totalPrice);
    $template.find('.cartContent .unitPrice .amount').html(unitPrice);
    $template.find('.cartContent .actualUnitPrice .amount').html(actualUnitPrice);

    if (product.cartQty < 2 && product.discount <= 0) {
        $template.find('.cartContent .unitPrice').addClass('hidden');
    }
    else {
        $template.find('.cartContent .unitPrice').removeClass('hidden');
    }

    if (product.discount <= 0) {
        $template.find('.cartContent .actualUnitPrice').addClass('hidden');
    }
    else {
        $template.find('.cartContent .actualUnitPrice').removeClass('hidden');
    }

    var cartItem = $template.clone();

    $('#cartPage .cartItems').prepend(cartItem);

    this.adjustAmounts();
    this.adjustQty();

}



Cart.prototype.addProduct = function (id) {

    var self = this;
    var pr = new Promise(function (resolve, reject) {
        if (Product) {
            var product = new Product();

            product.getProduct(id).then(function (response) {

                if (response.status) {
                    self.drawAddProduct(product);
                    resolve(id);
                }
                else {
                    alert(response.message);
                }
            });

        }
        else {
            alert('Product class not found.')
        }
    });


    return pr;

}


Cart.prototype.removeSimilarProduct = function(id){
    var self = this;
    $("#cartPage #product"+id+" .product").fadeOut(800, function(){
        $("#cartPage #product"+id).animate({width:0, padding:0, margin:0}, 300);
    });

    setTimeout(function(){
        $("#cartPage #product"+id).remove();
    }, 2100)
    
}

