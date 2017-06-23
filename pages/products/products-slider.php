<?php 
 require_once($base_dir."pages/products/loop-item.php");
function loadProductsSlider($sliderId, $products){

    global $base_dir;
?>

<div id="<?php echo $sliderId; ?>" class="carousel slide" data-ride="carousel">
                            

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">

                                
                                <div class="item active">
                                    <?php 
                                    $j=0;
                                    $totalProducts = count($products);
                                    foreach($products as $product):

                                        $j++;
                                        $product = (object) $product; 
                                        
                                    ?>

                                    <div class="col-sm-4">
                                        <?php generateProductTile($product); ?>
                                    </div>
                                    <?php

                                        // close and start slide item after 3rd product
                                        if($j%3==0 && $j<$totalProducts):

                                            echo "</div><div class='item'>";

                                        endif;

                                    endforeach; 
                                    ?>
                                </div>

                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#<?php echo $sliderId; ?>" data-slide="prev">
    
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#<?php echo $sliderId; ?>" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>

<?php 
}

