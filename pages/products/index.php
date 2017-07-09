<?php 
    $base_dir = "../../";
    include($base_dir.'includes/header.php'); 
    include($base_dir.'pages/products/productsDb.php');
?>
<div id="productsPage">
    <div class="container">

        <div class="row">
            <div class="col-sm-12">
                <div class="breadcrumbs">

                    <a href="<?php echo $base_dir; ?>">Home</a> / Desktop
                </div>


                <div class="content">
                    <div class="row">
                        <div class="col-sm-9">
                            <img src="<?php echo $base_dir.'assets/images/banner.jpg'; ?>" alt="banner" class="full_width">
                            <br><br>
                            <div id="products">
                                <div class="row">
                                    <?php 
                                    include($base_dir."/pages/products/loop-item.php");
                                    foreach($products as $product):
                                    $product = (object) $product;
                                    ?>
                                    <div class="col-sm-4">
                                        <?php
                                            generateProductTile($product);
                                          ?>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>


                        </div>

                        <div class="col-sm-3">
                            <?php include($base_dir."/includes/sideBar.php"); ?>


                        </div>
                    </div>


                   
                </div> <!-- .content end-->

            </div>
        </div>
    </div>
    <!-- .container end-->

     <?php include($base_dir."/includes/siteInfoBanner.php"); ?>

</div>


<?php include($base_dir."includes/footer.php");