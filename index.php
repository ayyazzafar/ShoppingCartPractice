<?php
$base_dir = "";
 include($base_dir."includes/header.php"); 
 include($base_dir."pages/products/products-slider.php"); 
 
 
 ?>

    <div id="homepage">
        <!-- Slider -->

        <div id="homeSlider" class="carousel slide slider" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#homeSlider" data-slide-to="0" class="active"></li>
                <li data-target="#homeSlider" data-slide-to="1"></li>
                <li data-target="#homeSlider" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="<?php echo $base_dir; ?>assets/images/slide1.jpg" class="full_width" alt="Los Angeles">
                </div>

                <div class="item">
                    <img src="<?php echo $base_dir; ?>assets/images/slide1.jpg" class="full_width" alt="Los Angeles">
                </div>

                <div class="item">
                    <img src="<?php echo $base_dir; ?>assets/images/slide1.jpg" class="full_width" alt="Los Angeles">
                </div>


            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#homeSlider" data-slide="prev">
                <img src="<?php echo $base_dir; ?>assets/images/leftArrow.png"  class="glyphicon-chevron-left"  alt="Slider left arrow">
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#homeSlider" data-slide="next">
                <img src="<?php echo $base_dir; ?>assets/images/rightArrow.png" class="glyphicon-chevron-right" alt="Slider right arrow">
                <span class="sr-only">Next</span>
            </a>
        </div>


        <?php include('includes/siteInfoBanner.php'); ?>

        <!-- Tabbed Slider start-->
        <div id="tabbedSlider">
            <div class="container">
                <div class="header">
                    <div class="row">
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#featuredTab">Featured</a></li>
                                <li><a data-toggle="tab" href="#newItemTab">New Item</a></li>
                                <li><a data-toggle="tab" href="#topSellerTab">Top Seller</a></li>
                                <li><a data-toggle="tab" href="#topRatingTab">Top Rating</a></li>

                            </ul>
                        </div>
                    </div>
                </div>

                <?php 
                require_once($base_dir."pages/products/productsDb.php");

            ?>

                <div class="content">
                    <div class="tab-content">
                        <div id="featuredTab" class="tab-pane fade in active">
                            <?php loadProductsSlider('featuredProducts', $products); ?>

                        </div>
                        <!-- Featured tab end-->


                        <div id="newItemTab" class="tab-pane fade">
                            <?php loadProductsSlider('newItemsProducts', $products); ?>
                        </div>

                        <div id="topSellerTab" class="tab-pane fade">
                            <?php loadProductsSlider('topSellerProducts', $products); ?>
                        </div>

                        <div id="topRatingTab" class="tab-pane fade">
                            <?php loadProductsSlider('topRatingProducts', $products); ?>
                        </div>

                    </div>




                </div>
            </div>
        </div>

        <!-- Tabbed slider end-->



        <div id="subscribe">
            <div class="container text-center">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title">SUBCRIBE FOR GET OFFER UPDATE</div>
                        <p>SUBCRIBE FOR GET OFFER UPDATE</p>
                        <form action="#">
                            <input type="email" required name="q" placeholder="Type your email" /><button type="submit">Lets go!</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
  

    </div>
    <?php include('includes/footer.php');