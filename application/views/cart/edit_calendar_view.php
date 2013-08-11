<h1>Edit your Calendar</h1>
<hr/>
<div class="row">
    <div class="span5">
    <?php echo form_open(base_url(). 'cart/update_calendar', array('class' => 'form-horizontal') ); ?>
    <fieldset class="row">
      <div class="control-group">
          <?php echo form_label('Binding Placement', 'calendar_binding_placement', array('class' => 'control-label')); ?>
          <div class="controls">
              <div class="row">
                  <div class="span3">
                      <select name="calendar_binding_placement" id="calendar_binding_placement">
                          <?php foreach($calendar_binding_placement as $row): ?>
                                <option value="<?php echo $row->getId(); ?>" <?php // if($row->getId() == 2) echo "selected=true"; ?>><?php echo $row->getName(); ?></option>
                          <?php endforeach;?>
                      </select>
                  </div> 
              </div>
          </div>
      </div>
      <div class="control-group">
            <?php echo form_label('Binding', 'calendar_binding_placement', array('class' => 'control-label')); ?>
            <div class="controls">
                <div class="row">
                    <div class="span3">
                        <select name="calendar_binding" id="calendar_binding">
                          <?php foreach($calendar_binding as $row): ?>
                          <option value="<?php echo $row->getId(); ?>"><?php echo $row->getName(); ?></option>
                          <?php endforeach;?>
                      </select>
                    </div> 
                </div>
            </div>
        </div>
        <div class="control-group">
            <?php echo form_label('Cover Paper', 'calendar_cover_paper', array('class' => 'control-label')); ?>
            <div class="controls">
                <div class="row">
                    <div class="span3">
                        <select name="calendar_cover_paper" id="calendar_cover_paper">
                          <?php foreach($calendar_cover_paper as $row): ?>
                          <option value="<?php echo $row->getId(); ?>"><?php echo $row->getName(); ?></option>
                          <?php endforeach;?>
                        </select>
                    </div> 
                </div>
            </div>
        </div>
        <div class="control-group">
            <?php echo form_label('Cover', 'calendar_cover', array('class' => 'control-label')); ?>
            <div class="controls">
                <div class="row">
                    <div class="span3">
                        <select name="calendar_cover" id="calendar_cover">
                          <?php foreach($calendar_cover as $row): ?>
                          <option value="<?php echo $row->getId(); ?>"><?php echo $row->getName(); ?></option>
                          <?php endforeach;?>
                      </select>
                    </div> 
                </div>
            </div>
        </div>
        <div class="control-group">
            <?php echo form_label('Hole Drilling', 'calendar_hole_drilling', array('class' => 'control-label')); ?>
            <div class="controls">
                <div class="row">
                    <div class="span3">
                        <select name="calendar_hole_drilling" id="calendar_hole_drilling">
                          <?php foreach($calendar_hole_drilling as $row): ?>
                          <option value="<?php echo $row->getId(); ?>"><?php echo $row->getName(); ?></option>
                          <?php endforeach;?>
                          </select>
                    </div> 
                </div>
            </div>
        </div>
        <div class="control-group">
          <?php echo form_label('Page Size', 'calendar_page_size', array('class' => 'control-label')); ?>
          <div class="controls">
              <div class="row">
                  <div class="span3">
                      <select name="calendar_page_size" id="calendar_page_size">
                          <?php foreach($calendar_page_size as $row): ?>
                          <option value="<?php echo $row->getId(); ?>"><?php echo $row->getName(); ?></option>
                          <?php endforeach;?>
                      </select>
                  </div> 
              </div>
          </div>
        </div>
          <div class="control-group">
              <?php echo form_label('Pages', 'calendar_pages', array('class' => 'control-label')); ?>
              <div class="controls">
                  <div class="row">
                      <div class="span3">
                          <select name="calendar_pages" id="calendar_pages">
                          <?php foreach($calendar_pages as $row): ?>
                          <option value="<?php echo $row->getId(); ?>"><?php echo $row->getName(); ?></option>
                          <?php endforeach;?>
                      </select>
                      </div> 
                  </div>
              </div>
          </div>
          <div class="control-group">
            <?php echo form_label('Paper Inside Pages', 'calendar_paper_inside_pages', array('class' => 'control-label')); ?>
            <div class="controls">
                <div class="row">
                    <div class="span3">
                        <select name="calendar_paper_inside_pages" id="calendar_paper_inside_pages">
                            <?php foreach($calendar_paper_inside_pages as $row): ?>
                            <option value="<?php echo $row->getId(); ?>"><?php echo $row->getName(); ?></option>
                            <?php endforeach;?>
                        </select>
                    </div> 
                </div>
            </div>
           </div>
        <div class="control-group">
            <?php echo form_label('Quantity', 'quantity', array('class' => 'control-label')); ?>
            <div class="controls">
                <div class="row">
                    <div class="span3">
                        <select name="quantity" id="quantity">
                            <?php for($i = 1; $i < 100; $i++): ?>
                            <option value="<?php echo $i*10; ?>"><?php echo $i*10; ?></option>
                            <?php endfor; ?>
                        </select>
                    </div> 
                </div>
            </div>
           </div>
        <div class="control-group">
            <?php echo form_label('Turn-around', 'turn-around', array('class' => 'control-label')); ?>
            <div class="controls">
                <div class="row">
                    <div class="span3">
                        <select name="turn-around" id="turn-around">
                            <option value="3">3 Business Days</option>
                            <option value="2">2 Business Days</option>
                            <option value="1">1 Business Day</option>
                        </select>
                    </div> 
                </div>
            </div>
           </div>
        <div class="modal-footer">
            <a href="#calculateBtn" class="btn btn-primary" id="calculateBtn">Calculate Price</a>
            <?php echo form_submit('submit', 'Purchase It Now!', 'class = "btn btn-success"'); ?>
        </div>
        </fieldset>
    <?php echo form_close(); ?>
    </div>
    <div class="span3">
        <img src="<?php echo base_url(); ?>img/upload/calendar.jpg"/>
        <h1 id="ajaxTotal"></h1>
    </div>
</div>
<script type="text/javascript">
    $(function(){
        $("#calculateBtn").click(function(){
            $.post("<?php echo base_url() . "product/calendar_calculation_ajax"; ?>", {
                id1 : $("#calendar_binding_placement").val() ,
                id2 : $("#calendar_binding").val() ,
                id3 : $("#calendar_cover_paper").val() ,
                id4 : $("#calendar_cover").val() ,
                id5 : $("#calendar_hole_drilling").val() ,
                id6 : $("#calendar_page_size").val() ,
                id7 : $("#calendar_pages").val() ,
                id8 : $("#calendar_paper_inside_pages").val(),
                id9 : $("#quantity").val(),
                id10 : $("#turn-around").val()
            }, function(val){
                $('#ajaxTotal').html('<br><br><br><br><div class="alert alert-info"><h4>Estimated Total Price</h4>'+val +' <small> Php</small></div>');
            }); 
        });
        
        $('.btn-success').click(function(){
            verify = confirm('Are you sure you?');
            if(!verify){
                return false;
            }
        });
    });
</script>