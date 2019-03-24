    <section class="content-header">
      <h1>
        Product Edit Form
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=site_url('user');?>"><i class="fa fa-user"></i> Home</a></li>
        <li class="active">Product Edit</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="box box-info">
            <div class="box-header with-border">
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
                    <?php
                        foreach ($categories as $cats) { ?>
                        <option value="<?=$cats['category_id']?>"<?=$cats['category_id'] == $data[0]['category_id'] ? ' selected="selected"' : '';?>><?=$cats['category_name']?></option>
                    <?php } ?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Product Name</label>

                  <div class="col-sm-9">
                    <input class="form-control" id="inputEmail3" value="<?=$data[0]['product_name'];?>" name="product_name" required placeholder="Product Name" type="text">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Unit Name</label>

                  <div class="col-sm-9">
                    <select name="unit_id" class="form-control">
                    <?php
                        foreach ($units as $unit) { ?>
                        <option value="<?=$unit['unit_id']?>"<?=$unit['unit_id'] == $data[0]['unit_id'] ? ' selected="selected"' : '';?>><?=$unit['unit_name']?></option>
                    <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Size</label>

                  <div class="col-sm-9">
                    <input class="form-control" id="inputEmail3" name="size"  value="<?=$data[0]['size'];?>" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Minimum (Reminder)</label>

                  <div class="col-sm-9">
                    <input class="form-control" id="inputEmail3" name="min_reminder"  value="<?=$data[0]['min_reminder'];?>" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Location</label>

                  <div class="col-sm-9">
                    <select name="location" class="form-control">
                    <?php
                      foreach ($stores as $s) { ?>
                      <option value="<?=$s['store_id']?>"<?=$s['store_id'] == $data[0]['location'] ? ' selected="selected"' : '';?>><?=$s['store_name']?></option>
                    <?php } ?>
                   </select>
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
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Update</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </div>
      </div>
    </section>  