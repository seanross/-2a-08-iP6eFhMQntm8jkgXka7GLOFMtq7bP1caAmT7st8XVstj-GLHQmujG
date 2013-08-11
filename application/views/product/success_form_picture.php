<div>
    <div><h4>Successfully uploaded photo</h4></div>
    <img src="<?php echo base_url() . 'uploads/' . $upload_data['file_name']; ?>" <?php echo $upload_data['image_size_str']; ?> />
    <hr/>
        <?php echo form_open(base_url(). 'product/'. $this->uri->segment(2) . "_details", array('class' => 'form-horizontal') ); ?>
    <input type="hidden" name="product_id" value="<?php echo $product_id; ?>"/>
    <fieldset class="row">
      <div class="control-group">
          <?php echo form_label('Title (Optional)', 'product_name', array('class' => 'control-label')); ?>
          <div class="controls">
              <div class="row">
                  <div class="span3">
                      <input type="text" name="product_name" id="product_name"/>
                  </div> 
              </div>
          </div>
      </div>
      <div class="control-group">
          <?php echo form_label('Instruction (Optional)', 'product_instruction', array('class' => 'control-label')); ?>
          <div class="controls">
              <div class="row">
                  <div class="span3">
                      <textarea name="product_instruction" id="product_instruction"></textarea>
                  </div> 
              </div>
          </div>
      </div>
    <div class="modal-footer">
        <a href="<?php echo base_url(); ?>cart" class="btn btn-primary" id="calculateBtn">Skip</a>
        <?php echo form_submit('submit', 'Save Details', 'class = "btn btn-success"'); ?>
    </div>
    </fieldset>
    <?php echo form_close(); ?>
    <h5>Image Details</h5>
    <table class="table">
    <?php foreach ($upload_data as $key => $value): ?>
        <tr>
            <td><?php echo $key; ?></td>
            <td><?php echo $value; ?></td>
        </tr>
    <?php endforeach ?>
    </table>
</div>