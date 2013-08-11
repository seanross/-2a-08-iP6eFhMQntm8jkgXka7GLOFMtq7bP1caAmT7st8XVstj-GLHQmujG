<div class="row-fluid">
    <ul class="thumbnails">
        
        <li class="span4">
            <div class="thumbnail">
                <img data-src="holder.js/300x200" alt="" src="img/upload/calling_cards.jpg">
            </div>
            <h3>Calling Cards</h3>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p>
            <a data-toggle="modal" href="#callingCardsModal" class="btn btn-primary">Edit Content</a>
            <a class="btn" href="#">Disable</a>
            </p>
        </li>

        <li class="span4">
            <div class="thumbnail">
                <img data-src="holder.js/300x200" alt="" src="img/upload/calendar.jpg">
            </div>
            <h3>Calendar</h3>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p>
            <a data-toggle="modal" href="#calendarModal" class="btn btn-primary">Edit Content</a>
            <a class="btn" href="#">Disable</a>
            </p>
        </li>

        <li class="span4">
            <div class="thumbnail">
                <img data-src="holder.js/300x200" alt="" src="img/upload/brochure.jpg">
            </div>
            <h3>Brochures</h3>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p>
            <a data-toggle="modal" href="#brochureModal" class="btn btn-primary">Edit Content</a>
            <a class="btn" href="#">Disable</a>
            </p>
        </li>
    </ul>
    <ul class="thumbnails">    
        <li class="span4">
            <div class="thumbnail">
                <img data-src="holder.js/300x200" alt="" src="img/upload/notebooks.jpg">
            </div>
            <h3>Notebooks</h3>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p>
            <a class="btn btn-primary" href="#">Edit Content</a>
            <a class="btn" href="#">Disable</a>
            </p>
        </li>

        <li class="span4">
            <div class="thumbnail">
                <img data-src="holder.js/300x200" alt="" src="img/upload/books.jpg">
            </div>
            <h3>Books</h3>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p>
            <a class="btn btn-primary" href="#">Edit Content</a>
            <a class="btn" href="#">Disable</a>
            </p>
        </li>

        <li class="span4">
            <div class="thumbnail">
                <img data-src="holder.js/300x200" alt="" src="img/upload/paper_bags.jpg">
            </div>
            <h3>Paper Bags</h3>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p>
            <a class="btn btn-primary" href="#">Edit Content</a>
            <a class="btn" href="#">Disable</a>
            </p>
        </li>
        
    </ul>
    <ul class="thumbnails">    
        <li class="span4">
            <div class="thumbnail">
                <img data-src="holder.js/300x200" alt="" src="img/upload/tarpaulins.jpg">
            </div>
            <h3>Tarpaulines</h3>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p>
            <a class="btn btn-primary" href="#">Edit Content</a>
            <a class="btn" href="#">Disable</a>
            </p>
        </li>

        <li class="span4">
            <div class="thumbnail">
                <img data-src="holder.js/300x200" alt="" src="img/upload/fliers.jpg">
            </div>
            <h3>Fliers</h3>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p>
            <a class="btn btn-primary" href="#">Edit Content</a>
            <a class="btn" href="#">Disable</a>
            </p>
        </li>
        
        <li class="span4">
            <div class="thumbnail">
                <img data-src="holder.js/300x200" alt="" src="img/upload/bir.jpg">
            </div>
            <h3>Receipt w/ BIR</h3>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p>
            <a class="btn btn-primary" href="#">Edit Content</a>
            <a class="btn" href="#">Disable</a>
            </p>
        </li>
    </ul>
</div>
















  <!-- Calendar Modal -->
  <div class="modal fade" id="calendarModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Calendar Properties</h4>
        </div>
        <div class="modal-body">
            <h2><span class="badge"><?php echo $calendar_att_length['binding_placement']; ?></span><a href="<?php echo base_url(); ?>mis/calendar_binding_placement"> Binding Placement </a></h2>
            <h2><span class="badge"><?php echo $calendar_att_length['binding']; ?></span><a href="<?php echo base_url(); ?>mis/calendar_binding"> Binding </a></h2>
            <h2><span class="badge"><?php echo $calendar_att_length['cover_paper']; ?></span><a href="<?php echo base_url(); ?>mis/calendar_cover_paper"> Cover Paper </a></h2>
            <h2><span class="badge"><?php echo $calendar_att_length['cover']; ?></span><a href="<?php echo base_url(); ?>mis/calendar_cover"> Cover </a></h2>
            <h2><span class="badge"><?php echo $calendar_att_length['hole_drilling']; ?></span><a href="<?php echo base_url(); ?>mis/calendar_hole_drilling"> Hole Drilling </a></h2>
            <h2><span class="badge"><?php echo $calendar_att_length['page_size']; ?></span><a href="<?php echo base_url(); ?>mis/calendar_page_size"> Page Size </a></h2>
            <h2><span class="badge"><?php echo $calendar_att_length['pages']; ?></span><a href="<?php echo base_url(); ?>mis/calendar_pages"> Pages </a></h2>
            <h2><span class="badge"><?php echo $calendar_att_length['paper_inside_pages']; ?></span><a href="<?php echo base_url(); ?>mis/calendar_paper_inside_pages"> Paper Inside Pages </a></h2>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  
    <!-- Brochure Modal -->
  <div class="modal fade" id="brochureModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">Brochure Properties</h4>
        </div>
        <div class="modal-body">
            <h2><span class="badge"><?php echo $brochure_att_length['folding']; ?></span><a href="<?php echo base_url(); ?>mis/brochure_folding"> Folding</a></h2>
            <h2><span class="badge"><?php echo $brochure_att_length['paper_type']; ?></span><a href="<?php echo base_url(); ?>mis/brochure_paper_type"> Paper Type</a></h2>
            <h2><span class="badge"><?php echo $brochure_att_length['printed_side']; ?></span><a href="<?php echo base_url(); ?>mis/brochure_printed_side"> Printed Side</a></h2>
            <h2><span class="badge"><?php echo $brochure_att_length['size']; ?></span><a href="<?php echo base_url(); ?>mis/brochure_size"> Size</a></h2>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->