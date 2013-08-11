<?php 
$bf = array(
	'name'	=> 'brochure_folding',
	'id'	=> 'brochure_folding'
);
$bpt = array(
	'name'	=> 'brochure_paper_type',
	'id'	=> 'brochure_paper_type'
);
$bps = array(
	'name'	=> 'brochure_printed_side',
	'id'	=> 'brochure_printed_side'
);
$bs = array(
	'name'	=> 'brochure_size',
	'id'	=> 'brochure_size'
);
?>
<div class="hero-unit">
  <h1>Brochure</h1>
      <?php echo form_open(base_url(). 'mis/create_'. $this->uri->segment(2), array('class' => 'form-horizontal') ); ?>
      <fieldset class="row">
        <div class="control-group">
            <?php echo form_label('Folding', $bf['id'], array('class' => 'control-label')); ?>
            <div class="controls">
                <div class="row">
                    <div class="span3">
                        <select name="<?php echo $bf['name']; ?>" id="<?php echo $bf['id']; ?>">
                            <?php foreach($brochure_folding as $row): ?>
                            <option value="<?php echo $row->getId(); ?>"><?php echo $row->getName(); ?></option>
                            <?php endforeach;?>
                        </select>
                    </div> 
                </div>
            </div>
        </div>
        <div class="control-group">
              <?php echo form_label('Paper Type', $bpt['id'], array('class' => 'control-label')); ?>
              <div class="controls">
                  <div class="row">
                      <div class="span3">
                          <select name="<?php echo $bpt['name']; ?>" id="<?php echo $bpt['id']; ?>">
                            <?php foreach($brochure_paper_type as $row): ?>
                            <option value="<?php echo $row->getId(); ?>"><?php echo $row->getName(); ?></option>
                            <?php endforeach;?>
                        </select>
                      </div> 
                  </div>
              </div>
          </div>
          <div class="control-group">
              <?php echo form_label('Printed Side', $bps['id'], array('class' => 'control-label')); ?>
              <div class="controls">
                  <div class="row">
                      <div class="span3">
                          <select name="<?php echo $bps['name']; ?>" id="<?php echo $bps['id']; ?>">
                            <?php foreach($brochure_printed_side as $row): ?>
                            <option value="<?php echo $row->getId(); ?>"><?php echo $row->getName(); ?></option>
                            <?php endforeach;?>
                          </select>
                      </div> 
                  </div>
              </div>
          </div>
          <div class="control-group">
              <?php echo form_label('Size', $bs['id'], array('class' => 'control-label')); ?>
              <div class="controls">
                  <div class="row">
                      <div class="span3">
                          <select name="<?php echo $bs['name']; ?>" id="<?php echo $bs['id']; ?>">
                            <?php foreach($brochure_size as $row): ?>
                            <option value="<?php echo $row->getId(); ?>"><?php echo $row->getName(); ?></option>
                            <?php endforeach;?>
                        </select>
                      </div> 
                  </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <?php echo form_submit('submit', 'Save', 'class = "btn btn-success"'); ?>
          </div>
          </fieldset>
      <?php echo form_close(); ?>
  </div>
