
<div class="panel-group" id="accordion">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
        <strong>Step 1: </strong> Check Out Information</a>
            </h4>
        </div>
        <div id="collapse1" class="panel-collapse collapse in">
            <div class="panel-body form-horizontal">

                <?php include($base_dir."pages/checkout/collapse/step1.php"); ?>

            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
        <strong>Step 2:</strong> Billing Information</a>
            </h4>
        </div>
        <div id="collapse2" class="panel-collapse collapse">
            <div class="panel-body">
                
                <?php include($base_dir."pages/checkout/collapse/step2.php"); ?>

            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
        <strong>Step 3: </strong> Dilivery Information</a>
            </h4>
        </div>
        <div id="collapse3" class="panel-collapse collapse">
            <div class="panel-body"><?php include($base_dir."pages/checkout/collapse/step3.php"); ?></div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
        <strong>Step 4: </strong> Payment Methods</a>
            </h4>
        </div>
        <div id="collapse4" class="panel-collapse collapse">
            <div class="panel-body"><?php include($base_dir."pages/checkout/collapse/step4.php"); ?></div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
        <strong>Step 5: </strong> Confirm Order</a>
            </h4>
        </div>
        <div id="collapse5" class="panel-collapse collapse">
            <div class="panel-body"><?php include($base_dir."pages/checkout/collapse/step5.php"); ?></div>
        </div>
    </div>
</div>

