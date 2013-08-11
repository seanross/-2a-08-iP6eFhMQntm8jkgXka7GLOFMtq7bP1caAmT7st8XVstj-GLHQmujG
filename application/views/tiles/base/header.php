<div class="row">
    <div class="span6">
        <img src="<?php echo base_url(); ?>img/logo.png"/>
    </div>
    <div class="span6">
        <h4 class="pull-right">Hello  
        <?php if($this->tank_auth->is_logged_in()): ?>
            <?php echo $this->tank_auth->get_username(); ?>
                &nbsp;&nbsp;&nbsp;
            <a href="<?php echo base_url(); ?>cart" class="btn btn-warning"><span class="icon-barcode"></span> My Cart</a>
            <?php else: ?>
        Guest!
        <?php endif; ?>
        </h4>
    </div>
</div>