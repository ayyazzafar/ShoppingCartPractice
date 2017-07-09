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