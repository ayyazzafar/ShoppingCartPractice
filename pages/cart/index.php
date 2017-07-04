<?php
    $base_dir = "../../";
     require_once("{$base_dir}pages/cart/loop-item.php");
     include($base_dir.'includes/header.php');
     include($base_dir.'pages/products/productsDb.php');

     
    $shipping_cost = 14;
    $config = (object) array(
        'shippingCost' => $shipping_cost
    );

    

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

                    <h1> <span class="cartQty"><?php echo count($cartProducts); ?></span>  items in your cart</h1>
                    <div class="content mt-50">
                        <div class="row">
                            <div class="col-sm-8 cartCol cartItems">
                                <?php 
                               
                                $subTotal = 0;
                                foreach($cartProducts as $product):
                                    $totalPrice = $product->price * $product->cartQty; 
                                    $subTotal += $totalPrice;
                                    generateCartProduct($product);
                                 ?>
                                
                                <?php endforeach; ?>
                            </div>


                            <div id="paymentCol" class="col-sm-4 radioBtns paymentCol">
                                <?php require_once("{$base_dir}pages/cart/paymentCol.php");

                                    generatePaymentCol($subTotal, $shipping_cost, $cartProducts);

                                 ?>
                            </div>

                        </div>
                        <!-- .row end-->

                        <div class="row" id="similarProducts">
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
<script>

    var config = JSON.parse('<?php echo json_encode($config); ?>');
    var base_dir = '<?php echo $base_dir; ?>';

</script>
<script src="<?php echo $base_dir; ?>assets/js/pages/cart/Cart.js"></script> 
<script defer src="<?php echo $base_dir; ?>assets/js/pages/cart/index.js"></script> 
    <?php include($base_dir."includes/footer.php");?>
    




    <div id="cartItemTemplate" class="hidden">
<?php 

$product =  (object) array(
        'id'=>1111, 'title'=>  "1 Smart Phone V1",
        'price' =>  102323, 
        'rating' => 2,
        'img'    => 'product1.jpg', 
        'qty'=> 5,
        'discount'=> 0,
        'cartQty' => 1,
          'description' => 'Turquoise Tassel Necklace in Silver with Grey Druzy. Long Turquoise Tassel Druzy                                             Necklace in Silver. Long Bohemian Style Tasssel Necklace.' );

generateCartProduct($product); ?>
</div>

    