<section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <div class="box">
            <div class="box-header">
              <a href="<?=site_url('user/add_vendor');?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add Vendor</a> <br><br>
              <h3 class="box-title">View Store</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Serial No</th>
                  <th>Vendor Name</th>
                  <th>Vendor Address</th>
                  <th>Vendor Phone</th>
                  <th>Vendor Email</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $i=1; foreach ($data as $cat) {?>
                <tr>
                  <td><?=$i++;?></td>
                  <td><?=$cat['vendor_name'];?></td>
                  <td><?=$cat['vendor_address'];?></td>
                  <td><?=$cat['vendor_phone'];?></td>
                  <td><?=$cat['vendor_email'];?></td>
                  <td>
                    <a class="btn-sm btn-flat btn-info" href="<?=site_url('user/edit_vendor/'.$cat['vendor_id']);?>"><i class="fa fa-edit"></i> Edit</a> 
                    <a class="btn-sm btn-flat btn-danger" href="<?=site_url('user/delete_vendor/'.$cat['vendor_id']);?>"  onclick="return confirm('Are you sure?');"><i class="fa fa-trash"></i> Delete</a>
                  </td>
                </tr>
                <?php } ?>
                </tbody>
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

