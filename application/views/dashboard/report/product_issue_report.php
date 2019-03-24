
    <section class="content-header">
      <h1>
        Product Issue Report
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=site_url('dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Product Issue Report</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-4">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Product Issue Report</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="#">
              <div class="box-body">
                

                
                
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">From Date</label>

                  <div class="col-sm-9">
                    <input type="text" name="from_date" class="form-control" id="datepicker">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">To Date</label>

                  <div class="col-sm-9">
                    <input type="text" name="to_date" class="form-control" id="datepicker1">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Product Name</label>

                  <div class="col-sm-9">
                    <select name="product_id" class="selectpicker form-control" data-live-search="true">
                        <option value="all">All Product</option>
                      <?php foreach ($products as $pdt) {?>
                        <option value="<?=$pdt['product_id'];?>"><?=$pdt['product_name'];?></option>
                      <?php } ?>
                    </select>
                  </div>
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
        <?php if(!empty($data)){?>
        <div class="col-md-8">
          <div class="box">
            <div class="box-header text-center">
              <h3 class="box-title text-center">Product Issued From <?=date("d-m-Y", strtotime($d1));?> To <?=date("d-m-Y", strtotime($d2));?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sl</th>
                  <th>Issue To</th>
                  <th>Product Name</th>
                  <th>Qty</th>
                  <th>Date</th>
                  <th>Req. No</th>
                </tr>
                </thead>
                <tbody>
                <?php $i=1; foreach ($data as $d) {
                    $reci=$this->mdb->getData('recipient',array('recipient_id'=>$d['issue_to']));
                    $pdt=$this->mdb->getData('product',array('product_id'=>$d['product_id']));
                    $unit=$this->mdb->getData('unit',array('unit_id'=>$pdt[0]['unit_id']));
                ?>
                <tr>
                  <td><?=$i++;?></td>
                  <td><?=$reci[0]['recipient_name'];?></td>
                  <td><?=$pdt[0]['product_name'];?></td>
                  <td><?=$d['qty_issued'].' '.$unit[0]['unit_name'];?></td>
                  <td><?=date("F j, Y", strtotime($d['issue_date']));?></td>
                  <td><?=$d['requisition_no']?></td>
                 
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