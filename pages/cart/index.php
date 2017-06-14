<?php
    $base_dir = "../../";
    include($base_dir.'includes/header.php');
          
?>
    <div id="cartPage" class="mt-20">
        <div class="container">

            <div class="row">
                <div class="col-sm-12">
                    <div class="breadcrumbs">

                        <a href="<?php echo $base_dir; ?>">Home</a> / Cart
                    </div>

                    <h1> 2 items in your cart</h1>
                    <div class="content mt-50">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <img src="<?php echo $base_dir."assets/uploads/z.jpg "; ?>" class="img-responsive" />
                                        <br>

                                    </div>

                                    <div class="col-sm-5">
                                        <p> Turquoise Tassel Necklace in Silver with Grey Druzy. Long Turquoise Tassel Druzy
                                            Necklace in Silver. Long Bohemian Style Tasssel Necklace.</p> <br>
                                    </div>
                                    <div class="col-sm-2 col-xs-3">
                                        <select name="qty" id="" class="qty form-control">
                                            <option value=""></option>
                                        </select>
                                         <br>
                                    </div>
                                    <div class="col-sm-2 col-xs-8 text-right">$52,133 USD</div>
                                     <br>
                                </div>
                            </div>


                            <div class="col-sm-4 radioBtns paymentCol">
                                
                                <p class="paymentHeading"><strong>How you'll pay</strong></p>
                                <div>
                                    <input type="radio" id="chbxCreditCard" checked name="paymentMethod" value="creditCard">
                                    <label for="chbxCreditCard"> 
                                        <img width="90%" src="<?php echo $base_dir."assets/images/paymentMethodsIcons.png"; ?>" /> </label>
                                </div>
                                <div>
                                    <input type="radio" id="chbxPaypal" name="paymentMethod" value="paypal" />
                                    <label for="chbxPaypal"> <img src="<?php echo $base_dir."assets/images/paypalIcon.png"; ?>" width="80" /> </label>
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