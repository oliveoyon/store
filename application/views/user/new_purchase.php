<script type="text/javascript">
        function xyz()
    {
      var product_id =document.getElementById("product_id").value;
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function()
          {
          if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
            document.getElementById("show1").innerHTML=xmlhttp.responseText;
            }
          } 
        xmlhttp.open("GET","<?=site_url();?>user/getunit/"+product_id,true); 
        xmlhttp.send();
    }
</script>

<script type="text/javascript">
        function xyz1()
    {
      var product_id =document.getElementById("product_id").value;
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function()
          {
          if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
            document.getElementById("show").innerHTML=xmlhttp.responseText;
            }
          } 
        xmlhttp.open("GET","<?=site_url();?>user/get_pdt_qty/"+product_id,true); 
        xmlhttp.send();
    }
</script>

    <section class="content-header">
      <h1>
        New Purchase Entry Form
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=site_url('user');?>"><i class="fa fa-user"></i> Home</a></li>
        <li class="active">New Purchase Entry Form</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><?=$msg;?></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="#">
              <div class="box-body">
                

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Product Name</label>

                  <div class="col-sm-9">
                    <select name="product_id" class="selectpicker form-control" data-live-search="true" onChange="xyz1(); xyz()" id="product_id">
                        <option value="">--Please Select an Item--</option>
                      <?php foreach ($products as $pdt) {?>
                        <option value="<?=$pdt['product_id'];?>"><?=$pdt['product_name'];?></option>
                      <?php } ?>
                    </select>
                    <div id="show"></div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Unit Rate</label>

                  <div class="col-sm-9">
                    <input type="text" name="unit_rate" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Quantity</label>

                  <div class="col-sm-6">
                    <input class="form-control" type="text" name="quantity" >
                  </div>
                  <div id="show1"></div>
                </div>

                <!-- <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Date Arrival</label>

                  <div class="col-sm-9">
                    <input type="text" name="date_arrival" class="form-control" id="datepicker">
                  </div>
                </div> -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Purchase Date</label>

                  <div class="col-sm-9">
                    <input type="text" name="date_purchased" class="form-control" id="datepicker1">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Invoice Number</label>

                  <div class="col-sm-9">
                    <input type="text" name="invoice_no" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Requisition No.</label>

                  <div class="col-sm-9">
                    <input type="text" name="purchase_requisition_no" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Purchase From</label>

                  <div class="col-sm-9">
                    <select name="shop_name" class="form-control">
                      <?php foreach ($vendors as $v) {?>
                      <option value="<?=$v['vendor_id'];?>"><?=$v['vendor_name'];?></option>
                      <?php } ?>
                    </select>
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