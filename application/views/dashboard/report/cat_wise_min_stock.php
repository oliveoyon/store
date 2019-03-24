
    <section class="content-header">
      <h1>
        Category Wise Minimum Report
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=site_url('dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Category Wise Minimum Report</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-4">
          <div class="box box-info">
            
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="#">
              <div class="box-body">
                
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Product Name</label>

                  <div class="col-sm-9">
                    <select name="category_id" class="selectpicker form-control" data-live-search="true">
                        <option value="all">All Category</option>
                      <?php foreach ($categories as $cat) {?>
                        <option value="<?=$cat['category_id'];?>"><?=$cat['category_name'];?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                
              </div>
                
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">View</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </div>
        <?php if(!empty($data)){?>
        <div class="col-md-8">
          <div class="box">
            <div class="box-header text-center">
              <h3 class="box-title text-center">Category wise minimum stock report.</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Serial No</th>
                  <th>Product Name</th>
                  <th>Category Name</th>
                  <th>In Stock</th>
                </tr>
                </thead>
                <tbody>
                <?php $i=1; foreach ($data as $pdt) {
                  $category=$this->mdb->getData('category',array('category_id'=>$pdt['category_id']));
                  $unit_name=$this->mdb->getData('unit',array('unit_id'=>$pdt['unit_id']));
                ?>
                <tr>
                  <td><?=$i++;?></td>
                  <td><?=$pdt['product_name'];?></td>
                  <td><?=$category[0]['category_name'];?></td>
                  <td><span style="color:red; font-weight:bolder"><?=$pdt['total_qty'].' '.$unit_name[0]['unit_name'];?></span></td>
                </tr>
                <?php } ?>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <?php } ?>
      </div>
    </section>  