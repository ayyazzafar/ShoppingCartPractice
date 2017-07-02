<p class="paymentHeading"><strong>How you'll pay</strong></p>
<div>
    <input type="radio" id="chbxCreditCard" checked name="paymentMethod" value="creditCard">
    <label for="chbxCreditCard"> 
    <img width="90%" src="<?php echo $base_dir."assets/images/paymentMethodsIcons.png"; ?>" /> </label>
</div>
<div>
    <input type="radio" id="chbxPaypal" name="paymentMethod" value="paypal" />
    <label for="chbxPaypal"> <img src="<?php echo $base_dir."assets/images/paypalIcon.png"; ?>" width="80" /> </label>
</div>
<br><br>
<div class="row">
    <div class="col-xs-6">Item(s) total</div>
    <div class="col-xs-6 text-right subTotal">USD <span class="amount"><?php echo number_format($subTotal); ?></span></div>
</div>
<br>
<div class="row">
    <div class="col-xs-6">Shipping</div>
    <div class="col-xs-6 text-right shippingCharges">USD <span class="amount"><?php 
        
        $grandTotal = $subTotal + $shipping_cost;
        echo $shipping_cost; 
    ?></span></div>
</div>


<hr>

<div class="row">
    <div class="col-xs-6"><strong>Total (<span class="cartQty"><?php echo count($cartProducts); ?></span> item)</strong></div>
    <div class="col-sm-6 text-right grandTotal">
        <strong>USD <span class="amount"><?php echo number_format($grandTotal); ?></span></strong>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <button type="submit" class="btn btn-primary btn-block btnStyle2">Proceed to Checkout</button>

        <p class="text-muted small text-center">
            Local taxes included (where applicable). Additional duties and taxes may apply.
        </p>
    </div>


</div>