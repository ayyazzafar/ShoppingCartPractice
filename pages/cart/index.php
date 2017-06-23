<?php
    $base_dir = "../../";
    
    include($base_dir.'includes/header.php');
    include($base_dir.'pages/products/productsDb.php');

    for($i = 0; $i<=2; $i++)
    {
         $product = (object) $products[$i];
        $product->cartQty = 1;
        $cartProducts[] = $product;  
    }
   
 
?>
    <div id="cartPage" class="mt-20">
        <div class="container">

            <div class="row">
                <div class="col-sm-12">
                    <div class="breadcrumbs">

                        <a href="<?php echo $base_dir; ?>">Home</a> / Cart
                    </div>

                    <h1> <?php echo count($cartProducts); ?>  items in your cart</h1>
                    <div class="content mt-50">
                        <div class="row">
                            <div class="col-sm-8 cartCol">
                                <?php 
                                require_once("{$base_dir}pages/cart/loop-item.php");
                                $subTotal = 0;
                                foreach($cartProducts as $product):
                                    $totalPrice = $product->price * $product->cartQty; 
                                    $subTotal += $totalPrice;
                                    generateCartProduct($product);
                                 ?>
                                
                                <?php endforeach; ?>
                            </div>


                            <div class="col-sm-4 radioBtns paymentCol">
                                <?php require_once("{$base_dir}pages/cart/paymentCol.php"); ?>
                            </div>

                        </div>
                        <!-- .row end-->

                        <div class="row">
                            <div class="col-sm-12">
                                <br><br>
                                <hr>
                                <h2>You might also like...</h2>
                                <hr><br><br>
                            </div>
                            <?php 
                            include($base_dir."pages/products/loop-item.php");
                            $index = 0;
                            foreach($products as $product):
                            
                            if($index==8) break;

                           
                                $product = (object) $product;
                             ?>
                            <div class="col-sm-3">
                                <?php 
                                generateProductTile($product);
                                 ?>
                            </div>
                            <?php 
                            $index++;
                            endforeach; ?>
                        </div>


                    </div>
                    <!-- .content end-->

                </div>
            </div>
        </div>
        <!-- .container end-->

        <?php include($base_dir."/includes/siteInfoBanner.php"); ?>

    </div>

<script src="<?php echo $base_dir; ?>assets/js/pages/cart/Cart.js"></script> 
<script defer src="<?php echo $base_dir; ?>assets/js/pages/cart/index.js"></script> 
    <?php include($base_dir."includes/footer.php");