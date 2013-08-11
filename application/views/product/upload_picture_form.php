<div class="hero-unit">
    <h1>Upload a Photo<small> for the <?php echo $product_name; ?> Product</small></h1>
    <hr />
    <?php echo form_open_multipart( base_url() .'product/' . $this->uri->segment(2).'_upload'); ?>

    <input type="file" name="userfile" size="20" />
    <input type="hidden" name="productid" value="<?php echo $productid; ?>">

    <input type="submit" value="upload" class="btn btn-success"/>

    </form>
<?php 
    if(isset($error)) echo $error; 
    if(isset($message)) echo $message; 
    ?>
</div>