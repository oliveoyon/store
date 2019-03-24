<section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Minimum Stock Report</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Serial No</th>
                  <th>Product Name</th>
                  <th>Category Name</th>
                  <th>In Stock</th>
                </tr>
                </thead>
                <tbody>
                <?php $i=1; foreach ($data as $pdt) {
                  $category=$this->mdb->getData('category',array('category_id'=>$pdt['category_id']));
                  $unit_name=$this->mdb->getData('unit',array('unit_id'=>$pdt['unit_id']));
                ?>
                <tr>
                  <td><?=$i++;?></td>
                  <td><?=$pdt['product_name'];?></td>
                  <td><?=$category[0]['category_name'];?></td>
                  <td><span style="color:red; font-weight:bolder"><?=$pdt['total_qty'].' '.$unit_name[0]['unit_name'];?></span></td>
                </tr>
                <?php } ?>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

