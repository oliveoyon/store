<section class="content">
      <div class="row">
        <div class="col-xs-6">
          
          <div class="box">
            <div class="box-header">
              <a href="<?=site_url('user/add_unit');?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add New Unit</a> <br><br>
              <h3 class="box-title">View Unit</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Serial No</th>
                  <th>Unit Name</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $i=1; foreach ($data as $cat) {?>
                <tr>
                  <td><?=$i++;?></td>
                  <td><?=$cat['unit_name'];?></td>
                  <td>
                    <a class="btn-sm btn-flat btn-info" href="<?=site_url('user/edit_unit/'.$cat['unit_id']);?>"><i class="fa fa-edit"></i> Edit</a> 
                    <a class="btn-sm btn-flat btn-danger" href="<?=site_url('user/delete_unit/'.$cat['unit_id']);?>"  onclick="return confirm('Are you sure?');"><i class="fa fa-trash"></i> Delete</a>
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

