var Product = function () {
    this.product = null;
};

Product.prototype.getProduct = function (id) {


    var self = this;
    var pr = new Promise(function (resolve, reject) {
        var uniqid = Math.floor(Math.random()*100);
        var response = {status:1, data:{product:{
            'id': uniqid, 'title': "123 product",
            'price': 510,
            'rating': 2,
            'discount':10,
            'img': 'product1.jpg',
            'qty': 2, 'description': 'Short Desc'

        }}};

        self.product = response.data.product;

        resolve(response);
    });

    return pr;
}


Product.prototype.calculateDiscount = function(){

    var product = this.product;
    if(product!==null)
    {   
         var discount = ((product.discount) / 100) *product.price;
         return discount;
    }
    else 
    {
        alert("Product is not available. Please fetch product first.");
        return null;
    }

}