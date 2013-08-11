<div class="page-header">
<a data-toggle="modal" href="#addModal" class="btn btn-success pull-right">Checkout</a>
  <h1>My Cart</h1>
</div>

<?php foreach ($cart_products->getProductCalendarTb() as $row): ?>
<div class="container">
    <h3>Calendar <small><?php echo $row->getName(); ?></small></h3>
<div class="row">
    <div class="span4">
        <img src="<?php echo base_url() .'uploads/'. $row->getMisImageTb()->getFileName(); ?>"/>
    </div>
    <div class="span5">
        <table class="table table-striped">
            <tr>
                <td>Binding Placement</td>
                <td><?php echo $row->getMisCalendarBindingPlacementTb()->getName(); ?></td>
            </tr>
            <tr>
                <td>Binding</td>
                <td><?php echo $row->getMisCalendarBindingTb()->getName(); ?></td>
            </tr>
            <tr>
                <td>Cover Paper</td>
                <td><?php echo $row->getMisCalendarCoverPaperTb()->getName(); ?></td>
            </tr>
            <tr>
                <td>Cover</td>
                <td><?php echo $row->getMisCalendarCoverTb()->getName(); ?></td>
            </tr>
            <tr>
                <td>Hole Drilling</td>
                <td><?php echo $row->getMisCalendarHoleDrillingTb()->getName(); ?></td>
            </tr>
            <tr>
                <td>Page Size</td>
                <td><?php echo $row->getMisCalendarPageSizeTb()->getName(); ?></td>
            </tr>
            <tr>
                <td>Calendar Pages</td>
                <td><?php echo $row->getMisCalendarPagesTb()->getName(); ?></td>
            </tr>   
            <tr>
                <td>Paper Inside Pages</td>
                <td><?php echo $row->getMisCalendarPaperInsidePagesTb()->getName(); ?></td>
            </tr>
        </table>
    </div>
    <div class="span3">
        <div>
            <h4>Quantity</h4> <?php echo $row->getQuantity(); ?>
            <h4>Added</h4><?php echo $row->getCreatedDate()->format('Y-m-d H:i:s'); ?>
            <h4>Turn-Around</h4><?php echo $row->getTurnAround(); ?> working day/s
        </div>
        <div class="alert alert-info">
            <h4>Estimated Total Price</h4><h1><?php echo $row->getPrice(); ?> <small> Php</small></h1>
        </div>
        <div>
            <a href="#" class="btn btn-warning">Update</a>
            <a href="#" class="btn btn-danger">Remove</a>
        </div>
    </div>
</div>
<hr/>
<?php endforeach; ?>
</div>