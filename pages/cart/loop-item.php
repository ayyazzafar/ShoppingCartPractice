<?php 
function generateCartProduct($product){
    global $base_dir;
    
    $cartQty        = $product->cartQty;
    $actualUnitPrice = $product->price;
    $unitPrice = ((100 - $product->discount) / 100) *$product->price;
    $totalPrice = ($cartQty * $unitPrice);
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
        <?php echo number_format($totalPrice); ?>
    </span> USD</strong>
        <br>

        <div class="unitPrice <?php echo  $cartQty<2 && $product->discount<=0?'hidden':'' ?>">
            <i class="text-muted">
            <span style="text-decoration:line-through " class="actualUnitPrice <?php if($product->discount<=0){echo 'hidden'; }?>">
                $<span class="amount"><?php echo number_format($actualUnitPrice); ?></span>
            </span> 
            <span class="unitPrice" >
                $<span class="amount">
                    <?php echo number_format($unitPrice); ?>
                </span>
            </span>
            
            </i>
            </div>


    </div>
        <br>

    </div>

</div>
<?php 
}

?>