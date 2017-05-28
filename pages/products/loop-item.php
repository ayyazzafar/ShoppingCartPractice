<div class="product">
    <div class="img" style="background-image:url(<?php 

    echo $base_dir; ?>assets/uploads/<?php 

    echo $product->img; ?>)">
        <div class="title"><?php echo $product->title; ?></div>
    </div>

    <div class="price">
        $<?php echo number_format($product->price); ?>
    </div>

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