<script type="text/javascript">
var tableToExcel = (function() {
  var uri = 'data:application/vnd.ms-excel;base64,'
    , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
    , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
    , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
  return function(table, name) {
    if (!table.nodeType) table = document.getElementById(table)
    var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
    window.location.href = uri + base64(format(template, ctx))
  }
})()
</script>


<section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <div class="box">
            <div class="box-header">
              <a href="<?=site_url('dashboard/add_product');?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add Product</a> 
              <a class="btn btn-danger btn-sm" href="<?=site_url('report/view_product');?>">Print</a>
              <input type="button" class="btn btn-success btn-sm" onclick="tableToExcel('example1', 'Worksheet')" value="Export to Excel"><br><br>
              <h3 class="box-title">View Product</h3>

              <!-- <input type="button" onclick="tableToExcel('testTable', 'W3C Example Table')" value="Export to Excel"> -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
              <!-- <table id="testTable" class="table table-bordered table-striped"> -->
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Serial No</th>
                  <th>Product ID</th>
                  <th>Product Name</th>
                  <th>Page</th>
                  <th>Location</th>
                  <th>Category Name</th>
                  <th>In Stock</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                  $i=1; foreach ($data as $pdt) {
                  $category=$this->mdb->getData('category',array('category_id'=>$pdt['category_id']));
                  $unit_name=$this->mdb->getData('unit',array('unit_id'=>$pdt['unit_id']));
                ?>
                <tr>
                  <td><?=$i++;?></td>
                  <td>PdtNo-<?=$pdt['product_id'];?></td>
                  <td><?=$pdt['product_name'];?></td>
                  <td><?=$pdt['remarks'];?></td>
                  <td>
                    <?php 
                      $abc=explode(",",$pdt['location']);
                      $loc="";
                      foreach ($abc as $a) {
                        $arr=$this->mdb->getData('store',array('store_id'=>$a));
                        $loc.=$arr[0]['store_name'].', ';
                      }
                      echo substr($loc, 0, -2);
                    ?>
                  </td>
                  <td><?=$category[0]['category_name'];?></td>
                  <td><?=$pdt['total_qty'].' '.$unit_name[0]['unit_name'];?></td>
                  <td width="20%">
                    <a class="btn-sm btn-flat btn-info" href="<?=site_url('dashboard/edit_product/'.$pdt['product_id']);?>"><i class="fa fa-edit"></i> Edit</a> 
                    <a class="btn-sm btn-flat btn-danger" href="<?=site_url('dashboard/delete_product/'.$pdt['product_id']);?>"  onclick="return confirm('Are you sure?');"><i class="fa fa-trash"></i> Delete</a>
                  </td>
                </tr>
                <?php } ?>
                </tbody>
              </table>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

