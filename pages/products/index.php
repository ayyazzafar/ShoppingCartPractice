<?php 
    $base_dir = "../../";
    include($base_dir.'includes/header.php'); 
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


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


</div>


<?php include($base_dir."includes/footer.php");