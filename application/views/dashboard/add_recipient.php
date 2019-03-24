    <section class="content-header">
      <h1>
        Add Recipient
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=site_url('dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add Recipient</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="box box-info">
            <div class="box-header with-border">
              <a href="<?=site_url('dashboard/view_recipient');?>" class="btn btn-primary btn-sm"><i class="fa fa-search"></i> View Recipient</a> <br><br>
              <h3 class="box-title"><?=$msg;?></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="#">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Recipient Name</label>

                  <div class="col-sm-9">
                    <input class="form-control" id="inputEmail3" name="recipient_name" required placeholder="Recipient Name" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Personal ID</label>

                  <div class="col-sm-9">
                    <input class="form-control" id="inputEmail3" name="personal_id" required placeholder="Personal ID" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Status</label>

                  <div class="col-sm-9">
                    <select name="status" class="form-control">
                      <option value="1">Active</option>
                      <option value="0">InActive</option>
                    </select>
                  </div>
                </div>
                
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