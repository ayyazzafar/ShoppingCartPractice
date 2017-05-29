<div class="product">
    <div class="img" style="background-image:url(<?php 
        
    echo $base_dir; ?>assets/uploads/<?php 

    echo $product->img; ?>)">

        <?php if(isset($product->discount) && $product->discount > 0): ?>
        <div class="discountBadge">
            <span class="percent"><?php echo $product->discount; ?>%</span>
        </div>
        <?php endif; ?>

        <div class="title"><?php echo $product->title; ?></div>
    </div>

    <div class="price <?php echo $product->discount>0?"discounted":'';  ?>   ">
        $<?php echo number_format($product->price); ?>
    </div>
    <?php if(isset($product->discount) && $product->discount > 0):
    $discount = ($product->discount * $product->price) / 100;
     ?>
        <div class="newPrice">
            $<?php echo number_format($product->price - $discount); ?>
        </div>
    <?php endif; ?>

    <div class="rating">
        <?php for($i=1; $i<=5; $i++): ?>
        <div class="star <?php 

        if($i<=$product->rating): 
            echo "active";

        endif;
        
        ?>"></div>
        <?php endfor; ?>
        
    </div>
    
</div>