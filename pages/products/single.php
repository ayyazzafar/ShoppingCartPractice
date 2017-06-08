<?php
    $base_dir = "../../";
    include($base_dir.'includes/header.php');
    $product = (object) array(
        'title'=>  "1 Smart Phone V1",
        'price' =>  102323,
        'rating' => 2,
        'img'    => 'product1.jpg',
        'discount'=>20,
        'gallery' =>  array(

            (object) array(
                'id'=>1,
                'img'=>'product1.jpg',
            ),

            (object) array(
                'id'=>2,
                'img'=>'product1.jpg',
            ),

            (object) array(
                'id'=>3,
                'img'=>'product1.jpg',
            )
            
        )
    )
                   
?>
    <div id="singleProductPage" class="mt-20">
        <div class="container">

            <div class="row">
                <div class="col-sm-12">
                    <div class="breadcrumbs">

                        <a href="<?php echo $base_dir; ?>">Home</a> / <a href="<?php echo $base_dir." pages/products/
                            "; ?>">Desktop</a> / Samsung Galaxy S8 +
                    </div>


                    <div class="content mt-50">
                        <div class="row">
                            <div class="col-md-9">

                                <div class="row">
                                    <div class="col-sm-6">

                                        <div data-interval="false" id="gallerySlider" class="carousel slide" data-ride="carousel">

                                            <div class="saleBadge <?php  echo $product->discount?' active ':''; ?>"></div>
                                            <!-- Wrapper for slides -->
                                            <div class="carousel-inner">

                                                <?php
                                                $index = 0;
                                            foreach ($product->gallery as $image) : ?>

                                                    <div class="item <?php
                                            
                                            
                                            echo $index==0?'active':''; ?>">


                                                        <img src="<?php echo $base_dir.'assets/uploads/'.$image->img; ?>" alt="Gallery Image - <?php echo $product->title; ?> ">
                                                    </div>
                                                    <?php
                                            $index++;
                                            endforeach;
                                            ?>

                                            </div>

                                            <!-- Left and right controls -->
                                            <a class="left carousel-control" href="#gallerySlider" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                            <a class="right carousel-control" href="#gallerySlider" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right"></span>
                                            <span class="sr-only">Next</span>
                                        </a>






                                            <!-- Indicators -->
                                            <ol class="carousel-indicators">
                                                <?php
                                                $index = 0;
                                            foreach ($product->gallery as $image) : ?>

                                                    <li data-target="#gallerySlider" data-slide-to="<?php echo $index; ?>" class=" <?php echo $index==0?'active':''; ?>">
                                                        <img class="img-responsive" src="<?php echo $base_dir.'assets/uploads/'.$image->img; ?>" alt="Gallery Image - <?php echo $product->title; ?> ">
                                                    </li>


                                                    <?php
                                            $index++;
                                            endforeach; ?>
                                                        <div class="clearfix"></div>
                                            </ol>
                                        </div>
                                        <!-- slider end-->

                                        <div class="socialIcons2">
                                            <div class="text">
                                                Share This
                                            </div>

                                            <a href="https://facebook.com" class="facebook"><i class="fa fa-facebook"></i></a>

                                            <a href="https://facebook.com" class="twitter"><i class="fa fa-twitter"></i></a>

                                            <a href="https://facebook.com" class="googlePlus"><i class="fa fa-google-plus"></i></a>

                                            <a href="https://facebook.com" class="pinterest"><i class="fa fa-pinterest"></i></a>
                                        </div>

                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-sm-6 details">
                                        <h1>
                                            <?php echo $product->title; ?>
                                        </h1>
                                        <div class="rating2">
                                            <div class="star active"></div>
                                            <div class="star active"></div>
                                            <div class="star active"></div>
                                            <div class="star"></div>
                                            <div class="star "></div>
                                            <div class="text">
                                                1 Review
                                            </div>

                                            <div class="clearfix"></div>
                                        </div>

                                        <hr> Menufecturer: Chanel<br> Availability: In Stock 20 item(s)<br> Product Code: PC03<br><br>
                                        <strong>Product Dimensions and Weight</strong><br> Product Length: 10.0000m<br> Product
                                        Weight: 10.0000kg
                                        <hr>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vehicula condimentum porttitor. Donec ullamcorper


                                        </p>

                                        <hr>

                                        <div class="price discounted">$50,231.00</div>&nbsp; &nbsp;
                                        <div class="newPrice price">$10,452.00</div>
                                        <br>

                                        <a class="btn  btnStyle2">
                                        <i class="glyphicon glyphicon-shopping-cart
                                "></i> Add to Cart
                                    </a>
                                    </div>
                                </div>


                                <div id="tabs" class="row">
                                    <div class="col-sm-12">
                                        <ul class="nav nav-tabs" role="tablist">

                                            <li role="presentation" class="active"><a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">Reviews</a></li>

                                        </ul>

                                        <div class="tab-content">


                                            <div role="tabpanel" class="tab-pane fade in active" id="reviews">
                                                <div class="title">
                                                    Last Review
                                                </div>

                                                <div class="content">
                                                    <header>
                                                        <name>By Bin Burhan</name>

                                                        <div class="timeframe">
                                                            <div class="fa fa-clock-o"></div> 10:05pm &nbsp;
                                                            <div class="fa fa-bell"></div> Sunday &nbsp;
                                                            <fa class="fa fa-calendar"></fa> 26 December &nbsp;

                                                        </div>

                                                        <div class="rating2 pull-right">
                                                            <div class="star active"></div>
                                                            <div class="star active"></div>
                                                            <div class="star active"></div>
                                                            <div class="star active"></div>
                                                            <div class="star"></div>
                                                        </div>
                                                    </header>

                                                    <content-container>
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                                        text ever since the 1500s, when an unknown printer took a galley
                                                        of type and scrambled it to make a type specimen book Lorem Ipsum
                                                        is simply dummy text of the printing and typesetting industry. Lorem
                                                        Ipsum has been the industry's standard dummy text ever since the
                                                        1500s, when an unknown printer took a galley of type and scrambled
                                                        it to make a type specimen book
                                                    </content-container>


                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3 hidden-sm">
                                <div class="vMenu">
                                    <div class="heading">Category</div>

                                    <ul>
                                        <?php for ($i=0; $i<=5; $i++) : ?>
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
                                        <?php for ($i=0; $i<=5; $i++) : ?>
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
                                        <?php for ($i=1; $i<=5; $i++) : ?>
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



                    </div>
                    <!-- .content end-->

                </div>
            </div>
        </div>
        <!-- .container end-->

        <?php include($base_dir."/includes/siteInfoBanner.php"); ?>

    </div>


    <?php include($base_dir."includes/footer.php");