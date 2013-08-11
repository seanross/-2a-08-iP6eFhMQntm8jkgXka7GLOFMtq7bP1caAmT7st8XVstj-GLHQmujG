<div class="page-header">
<a data-toggle="modal" href="#addModal" class="btn btn-primary pull-right">Add New</a>
  <h1><?php echo $product; ?><small><?php echo $name; ?></small></h1>
</div>
<table class="table table-striped">
    <tr>
        <th>Name</th>
        <th>Virtual Price</th>
        <th>Created By</th>
        <th>Updated By</th>
        <th>Created Date</th>
        <th>Updated Date</th>
        <th>Enabled</th>
        <th>Option</th>
    </tr>
<?php foreach($product_attribute as $row): ?>
    <tr>
        <td><?php echo $row->getName(); ?></td>
        <td><?php echo $row->getVirtualPrice(); ?></td>
        <td><?php echo $row->getCreatedBy(); ?></td>
        <td><?php echo $row->getUpdatedBy(); ?></td>
        <td><?php echo $row->getCreatedDate()->format('Y-m-d H:i:s'); ?></td>
        <td><?php echo $row->getUpdatedDate()->format('Y-m-d H:i:s'); ?></td>
        <td><?php echo $row->getEnabled(); ?></td>
        <td>
            <a data-toggle="modal" href="#editModal" class="btn btn-warning populate-trigger" id="<?php echo $row->getId();?>">Edit</a>
            <a href="<?php echo base_url() . "mis/delete_". $this->uri->segment(2) . "/". $row->getId(); ?>" class="btn btn-danger">Delete</a>
        </td>
    </tr>
<?php endforeach; ?>
</table>

<?php 
$att = array(
	'name'	=> 'attName',
	'id'	=> 'attId',
	'value' => set_value('attName'),
	'maxlength'	=> 80,
	'size'	=> 30,
);  
$vir = array(
	'name'	=> 'virName',
	'id'	=> 'virId',
	'value' => set_value('vir'),
	'maxlength'	=> 80,
	'size'	=> 30,
);
$u_att = array(
	'name'	=> 'u_attName',
	'id'	=> 'u_attId',
	'value' => set_value('u_attName'),
	'maxlength'	=> 80,
	'size'	=> 30,
);  
$u_vir = array(
	'name'	=> 'u_virName',
	'id'	=> 'u_virId',
	'value' => set_value('u_virName'),
	'maxlength'	=> 80,
	'size'	=> 30,
);
?>

    <!-- Adding Modal -->
<?php echo form_open(base_url(). 'mis/create_'. $this->uri->segment(2), array('class' => 'form-horizontal') ); ?>
<div class="modal fade" id="addModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Add New <?php echo $name; ?></h4>
      </div>
      <div class="modal-body">
          <fieldset class="row">
              <div class="control-group">
                  <?php echo form_label('Attribute Name', $att['id'], array('class' => 'control-label')); ?>
                  <div class="controls">
                      <div class="row">
                          <div class="span3">
                              <?php echo form_input($att); ?>
                          </div>
                          <div class="span3 text-error">
                              <?php echo form_error($att['name']); ?>
                              <?php echo isset($errors[$att['name']])?$errors[$att['name']]:''; ?>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="control-group">
                  <?php echo form_label('Virtual Price', $vir['id'], array('class' => 'control-label')); ?>
                  <div class="controls">
                      <div class="row">
                          <div class="span3">
                              <?php echo form_input($vir); ?>
                          </div>
                          <div class="span3 text-error">
                              <?php echo form_error($vir['name']); ?>
                              <?php echo isset($errors[$vir['name']])?'<span class="label label-important">' + $errors[$vir['name']] + '</span>':''; ?>
                          </div>
                      </div>
                  </div>
              </div>
          </fieldset>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <?php echo form_submit('submit', 'Save', 'class = "btn btn-success"'); ?>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php echo form_close(); ?>

    <!-- Editing Modal -->
<?php echo form_open(base_url(). 'mis/update_'. $this->uri->segment(2), array('class' => 'form-horizontal') ); ?>
<input type="hidden" value="<?php echo "";?>" id="u_id" name="u_id"/>
<div class="modal fade" id="editModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Edit <?php echo $name; ?></h4>
      </div>
      <div class="modal-body">
          <fieldset class="row">
              <div class="control-group">
                  <?php echo form_label('Attribute Name', $u_att['id'], array('class' => 'control-label')); ?>
                  <div class="controls">
                      <div class="row">
                          <div class="span3">
                              <?php echo form_input($u_att); ?>
                          </div>
                          <div class="span3 text-error">
                              <?php echo form_error($u_att['name']); ?>
                              <?php echo isset($errors[$u_att['name']])?$errors[$u_att['name']]:''; ?>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="control-group">
                  <?php echo form_label('Virtual Price', $u_vir['id'], array('class' => 'control-label')); ?>
                  <div class="controls">
                      <div class="row">
                          <div class="span3">
                              <?php echo form_input($u_vir); ?>
                          </div>
                          <div class="span3 text-error">
                              <?php echo form_error($u_vir['name']); ?>
                              <?php echo isset($errors[$u_vir['name']])?'<span class="label label-important">' + $errors[$u_vir['name']] + '</span>':''; ?>
                          </div>
                      </div>
                  </div>
              </div>
          </fieldset>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <?php echo form_submit('submit', 'Save', 'class = "btn btn-success"'); ?>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php echo form_close(); ?>

<script type="text/javascript">
$(function(){
    $('.populate-trigger').click(function(){
        idval = $(this).attr("id");
        $.post("<?php echo base_url() . "mis/edit_" . $this->uri->segment(2) . "_form_ajax"; ?>", {id : idval}, function(data){
            $('#u_id').val(idval);
            $("#u_attId").val(data.name);
            $("#u_virId").val(data.price);
        }, 'json');
    });
    $(".btn-danger").click(function(){
        verify = confirm('Are you sure you want to do that?');
        if(!verify){
            return false;
        }
    });
});
</script>