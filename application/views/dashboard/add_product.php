<?php
$a=$this->mdb->getData('product');
?>
    <section class="content-header">
      <h1>
        Add Product
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=site_url('dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add Product</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="box box-info">
            <div class="box-header with-border">
              <a href="<?=site_url('dashboard/view_product');?>" class="btn btn-primary btn-sm"><i class="fa fa-search"></i> View Product</a> <br><br>
              <h3 class="box-title"><?=$msg;?></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="#">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Category Name</label>

                  <div class="col-sm-9">
                    <select name="category_id" class="form-control">
                      <?php foreach ($data as $cat) {?>
                      <option value="<?=$cat['category_id']?>"><?=$cat['category_name'];?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Product Name</label>

                  <div class="col-sm-9">
                    <input class="form-control" list="pname" name="product_name" required placeholder="Product Name" type="text">
                    <datalist id="pname">
                      <?php foreach ($a as $b) {?>
                      <option><?=$b['product_name'];?></option>
                      <?php } ?>
                    </datalist>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Unit</label>

                  <div class="col-sm-9">
                    <select name="unit_id" class="form-control">
                      <option>--Select an Unit--</option>
                      <?php foreach ($units as $unit) {?>
                        <option value="<?=$unit['unit_id'];?>"><?=$unit['unit_name'];?></option>
                      <?php }?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Size</label>

                  <div class="col-sm-9">
                    <input class="form-control" id="inputEmail3" name="size"  placeholder="Product Size" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Minimum (Reminder)</label>

                  <div class="col-sm-9">
                    <input class="form-control" id="inputEmail3" name="min_reminder"  placeholder="Minimum Reminder ex: 10" type="text">
                  </div>
                </div>
				<div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Page No</label>

                  <div class="col-sm-9">
                    <input class="form-control" id="inputEmail3" name="remarks"  placeholder="Page Number" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Location</label>

                  <div class="col-sm-9">
                    <select name="location" class="form-control">
                      <?php foreach ($stores as $s) {?>
                      <option value="<?=$s['store_id'];?>"><?=$s['store_name'];?></option>
                      <?php } ?>
                    </select>
                    <input type="hidden" name="status" value="1">
                  </div>
                </div>
                <!-- <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Status</label>

                  <div class="col-sm-9">
                    <select name="status" class="form-control">
                      <option value="1">Active</option>
                      <option value="0">InActive</option>
                    </select>
                  </div>
                </div> -->
                
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Insert</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </div>
      </div>
    </section>  