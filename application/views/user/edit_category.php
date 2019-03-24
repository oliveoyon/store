    <section class="content-header">
      <h1>
        Category Edit Form
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=site_url('user');?>"><i class="fa fa-user"></i> Home</a></li>
        <li class="active">Category Edit</li>
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
                  <label for="inputEmail3" class="col-sm-3 control-label">Category Name</label>

                  <div class="col-sm-9">
                    <input class="form-control" id="inputEmail3" value="<?=$data[0]['category_name'];?>" name="category_name" required placeholder="Category Name" type="text">
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