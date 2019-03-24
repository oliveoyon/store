<section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <div class="box">
            <div class="box-header">
              <a href="<?=site_url('user/add_product');?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add Product</a> <br><br>
              <h3 class="box-title">View Product</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Serial No</th>
                  <th>Product ID</th>
                  <th>Product Name</th>
                  <th>Category Name</th>
                  <th>In Stock</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                  $i=1; foreach ($data as $pdt) {
                  $category=$this->mdb->getData('category',array('category_id'=>$pdt['category_id']));
                  $unit_name=$this->mdb->getData('unit',array('unit_id'=>$pdt['unit_id']));
                ?>
                <tr>
                  <td><?=$i++;?></td>
                  <td>PdtNo-<?=$pdt['product_id'];?></td>
                  <td><?=$pdt['product_name'];?></td>
                  <td><?=$category[0]['category_name'];?></td>
                  <td><?=$pdt['total_qty'].' '.$unit_name[0]['unit_name'];?></td>
                  <td width="20%">
                    <a class="btn-sm btn-flat btn-info" href="<?=site_url('user/edit_product/'.$pdt['product_id']);?>"><i class="fa fa-edit"></i> Edit</a> 
                    <a class="btn-sm btn-flat btn-danger" href="<?=site_url('user/delete_product/'.$pdt['product_id']);?>"  onclick="return confirm('Are you sure?');"><i class="fa fa-trash"></i> Delete</a>
                  </td>
                </tr>
                <?php } ?>
                </tbody>
              </table>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

