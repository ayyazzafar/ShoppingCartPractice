<div class="row">
    <div class="col-sm-6">
        <h3>New Customer</h3><br>
        <p>Checkout Options</p>
        <div class="radioBtns">
            <input type="radio" id="radioCheckoutOptionRegister" checked="" name="radioCheckoutOption" value="register">
            <label for="radioCheckoutOptionRegister"> 
                                Register Account
                        </div>

                        <div class="radioBtns">
                            <input type="radio" id="radioCheckoutOptionGuest"  name="radioCheckoutOption" value="guest">
                            <label for="radioCheckoutOptionGuest"> 
                                Guest Account
                        </div>

                        <p class="mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                        <button type="button" class="btn btn-primary  btnStyle2">CONTINUE</button>
                    </div>


                    <div class="col-sm-6">
                        <h3>Returning Customer</h3><br>
                        <p>I'm a returning customer</p>
                         <div class="form-group">
                            <label class="control-label col-sm-3" for="email">Email*</label>
            <div class="col-sm-9">
                <input type="email" class="form-control" id="email" placeholder="Enter email">
            </div>
        </div>


        <div class="form-group">
            <label class="control-label col-sm-3" for="email">Password*</label>
            <div class="col-sm-9">
                <input type="password" class="form-control" id="password" placeholder="Enter password">
            </div>
        </div>

        <p class="mt-20"><a href="<?php echo $base_dir; ?>/pages/users/forgotPassword.php">Forgot your password?</a></p>

        <button type="button" class="btn btn-primary  btnStyle2 light">LOG IN</button>
    </div>



</div>