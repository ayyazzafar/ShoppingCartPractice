<?php 
    $base_dir = "../../";
    include($base_dir.'includes/header.php'); 
    $product = (object) array(
                                    'title'=>  "1 Smart Phone V1",
                                    'price' =>  102323, 
                                    'rating' => 2,
                                    'img'    => 'product1.jpg', 
                                    'discount'=>20
                                )

                             
                                

                                
                           
?>
<div id="singleProductPage" class="mt-20">
    <div class="container">

        <div class="row">
            <div class="col-sm-12">
                <div class="breadcrumbs">

                    <a href="<?php echo $base_dir; ?>">Home</a> / <a href="<?php echo $base_dir."pages/products/"; ?>">Desktop</a> / Samsung Galaxy S8 +
                </div>


                <div class="content mt-50">
                    <div class="row">
                        <div class="col-sm-9">
                            

                        </div>

                        <div class="col-sm-3">
                            <div class="vMenu">
                                <div class="heading">Category</div>

                                <ul>
                                    <?php for($i=0; $i<=5; $i++): ?>
                                    <li>
                                        <a href="">
                                            <i class="fa fa-caret-right"></i> Smart Phone
                                        </a>
                                    </li>
                                    <?php endfor; ?>
                                </ul>
                            </div>


                            <div class="vMenu checkboxes">
                                <div class="heading">By Brand</div>

                                <ul>
                                    <?php for($i=0; $i<=5; $i++): ?>
                                    <li>
                                        <input class="hidden" type="checkbox" name="brand" id="brand<?php echo $i; ?>" />
                                        <label class="text" for="brand<?php echo $i; ?>"> Smart Phone </label>


                                    </li>
                                    <?php endfor; ?>
                                </ul>
                            </div>


                            <div class="vMenu">
                                <div class="heading">By Price</div>

                                <ul>
                                    <?php for($i=1; $i<=5; $i++): ?>
                                    <li>
                                        <a href="">
                                            <i class="fa fa-caret-right"></i> 
                                            <?php echo "$".$i."0,000 - $".($i+1)."0,000"; ?>
                                        </a>

                                    </li>
                                    <?php endfor; ?>
                                </ul>
                            </div>


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