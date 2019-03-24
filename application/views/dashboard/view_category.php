<section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <div class="box">
            <div class="box-header">
              <a href="<?=site_url('dashboard/add_category');?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add Category</a> <br><br>
              <h3 class="box-title">View Category</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Serial No</th>
                  <th>Category Name</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $i=1; foreach ($data as $cat) {?>
                <tr>
                  <td><?=$i++;?></td>
                  <td><?=$cat['category_name'];?></td>
                  <td>
                    <a class="btn-sm btn-flat btn-info" href="<?=site_url('dashboard/edit_category/'.$cat['category_id']);?>"><i class="fa fa-edit"></i> Edit</a> 
                    <a class="btn-sm btn-flat btn-danger" href="<?=site_url('dashboard/delete_category/'.$cat['category_id']);?>"  onclick="return confirm('Are you sure?');"><i class="fa fa-trash"></i> Delete</a>
                  </td>
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

