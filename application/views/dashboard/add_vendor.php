    <section class="content-header">
      <h1>
        Add Vendor Detail
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=site_url('dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add Vendor Detail</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="box box-info">
            <div class="box-header with-border">
              <a href="<?=site_url('dashboard/view_vendor');?>" class="btn btn-primary btn-sm"><i class="fa fa-search"></i> View Vendor</a> <br><br>
              <h3 class="box-title"><?=$msg;?></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="#">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Vendor Name</label>

                  <div class="col-sm-9">
                    <input class="form-control" id="inputEmail3" name="vendor_name" required placeholder="Vendor Name" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Vendor Address</label>

                  <div class="col-sm-9">
                    <textarea class="form-control" name="vendor_address" id="" cols="30" rows="5"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Vendor Phone</label>

                  <div class="col-sm-9">
                    <input class="form-control" id="inputEmail3" name="vendor_phone"  placeholder="017xxxxxxxxx, 018xxxxxxx" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Vendor email</label>

                  <div class="col-sm-9">
                    <input class="form-control" id="inputEmail3" name="vendor_email"  placeholder="Vendor Email" type="email">
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