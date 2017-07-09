<?php
    $base_dir = "../../";
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



    <div id="checkoutPage" class="mt-20">
        <div class="container">

            <div class="row">
                <div class="col-sm-12">
                    <div class="breadcrumbs">

                        <a href="<?php echo $base_dir; ?>">Home</a> / Checkout
                    </div>

                    <h1 class="mt-20"> Checkout Information</h1>
                    <hr>
                    
                    <div class="content">
                        <div class="row">
                            <div class="col-sm-9">
                                <?php include($base_dir."/pages/checkout/collapse/collapse.php"); ?>
                            </div>

                            <div class="col-sm-3">
                                <?php include($base_dir."/includes/sideBar.php");  ?>
                            </div>
                        </div>
                    </div>

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
    <?php include($base_dir."includes/footer.php");?>
    





    