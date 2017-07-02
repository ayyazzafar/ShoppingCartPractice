<?php 
function generateCartProduct($product){
    global $base_dir;
?>
<div class="row cartItem" id="cartProduct<?php echo $product->id;  ?>" data-productId="<?php echo $product->id; ?>">
    <div class="cartContent">
        <div class="col-sm-3">
            <img src="<?php echo " {$base_dir}assets/uploads/{$product->img}"; ?>" class="img-responsive" />
            <br>

        </div>

        <div class="col-sm-5 description">
            <p>
                <?php echo $product->description; ?>
            </p>
            <a href="" class="remove"><i class="fa fa-trash"></i> Remove</a>
        </div>
        <div class="col-sm-2 col-xs-3">
            <select name="qty" id="" class="qty form-control">
            <?php for($i=1; $i<=$product->qty; $i++ ): ?>
            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
            <?php endfor; ?>
        </select>
            <br>
        </div>
        <div class=" col-sm-2 col-xs-8 text-right">
            <strong class="productTotal">
                $
    <span class="amount">
        <?php echo number_format($product->price * $product->cartQty); ?>
    </span> USD</strong>
        <br>

        <div class="unitPrice <?php echo  $product->cartQty<2?'hidden':'' ?>">
            <i class="text-muted">
            USD <span class="amount"><?php echo number_format($product->price); ?></span>
            </i>
            </div>


    </div>
        <br>

    </div>

</div>
<?php 
}

?>