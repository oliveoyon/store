    <section class="content-header">
      <h1>
        Vendor Detail Edit Form
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=site_url('dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Vendor Detail Edit</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-8">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><?=$msg;?></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="#">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Vendor Name</label>

                  <div class="col-sm-9">
                    <input class="form-control" id="inputEmail3" value="<?=$data[0]['vendor_name'];?>" required name="vendor_name"  type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Vendor Address</label>

                  <div class="col-sm-9">
                    <textarea name="vendor_address" id="" cols="30" rows="10"><?=$data[0]['vendor_address'];?></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Vendor Phone</label>

                  <div class="col-sm-9">
                    <input class="form-control" id="inputEmail3" value="<?=$data[0]['vendor_phone'];?>" name="vendor_phone"  type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Vendor Email</label>

                  <div class="col-sm-9">
                    <input class="form-control" id="inputEmail3" value="<?=$data[0]['vendor_email'];?>" name="vendor_email"  type="email">
                  </div>
                </div>
                
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