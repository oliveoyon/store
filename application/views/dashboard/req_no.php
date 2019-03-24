    <section class="content-header">
      <h1>
        Insert Requisition Number
      </h1>
      
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
                  <label for="inputEmail3" class="col-sm-3 control-label">Requisition Number</label>

                  <div class="col-sm-9">
                    <input class="form-control" id="inputEmail3" name="requisition_no" required placeholder="Requisition Number" type="text">
                    
                  </div>
                </div>
                
                
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </div>
      </div>
    

    <?php if(!empty($data)){?>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $(".add-row").click(function(){
            var name = $("#name").val();
            var name1 = $("#name option:selected").text();
            var email = $("#email").val();
            var markup = "<tr><td><input type='checkbox' name='record'></td><td><select name='product_id[]' class='form-control' required><option value="+name+">" + name1 + "</option></select></td><td><input class='form-control' type='text' name='qty[]' required /></td><td><input class='form-control' type='text' name='remarks[]' /></td></tr>";
            $("table tbody").append(markup);
        });
        
        // Find and remove selected table rows
        $(".delete-row").click(function(){
            $("table tbody").find('input[name="record"]').each(function(){
              if($(this).is(":checked")){
                    $(this).parents("tr").remove();
                }
            });
        });
    });    
</script>
<script type="text/javascript">
        function xyz()
    {
      var product_id =document.getElementById("name").value;
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function()
          {
          if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
            document.getElementById("show").innerHTML=xmlhttp.responseText;
            }
          } 
        xmlhttp.open("GET","<?=site_url();?>dashboard/get_pdt_qty/"+product_id,true); 
        xmlhttp.send();
    }
</script>

    
      <div class="row">
        <div class="col-md-6">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><?=$msg;?></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="<?=site_url('dashboard/issueaction');?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Requisition Number</label>

                  <div class="col-sm-9">
                    <input type="text" name="requisition_no" class="form-control" required  value="<?=$data[0]['req_no'];?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Issue Date</label>

                  <div class="col-sm-9">
                    <input type="text" name="issue_date" class="form-control" id="datepicker" value="<?=date('Y-m-d');?>">
                    <input type="hidden" name="status" value="1">
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Issue To</label>
                  <?php 
                    $recip_name=$this->mdb->getData('recipient',array('recipient_id'=>$data[0]['recipiennt_id']));
                  ?>
                       
                  <div class="col-sm-9">
                    <select name="issue_to" class="form-control" required>
                      <option value="<?=$data[0]['recipiennt_id'];?>"><?=$recip_name[0]['recipient_name'];?></option>
                      
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Product Name</label>

                  <div class="col-sm-6">
                    <select class="selectpicker form-control" data-live-search="true" id="name" onChange="xyz();">
                      <option value="">--Select Product--</option>
                      <?php foreach ($products as $p) {?>
                        <option value="<?=$p['product_id'];?>"><?=$p['product_name'];?></option>
                      <?php } ?>
                    </select>
                    <div id="show"></div>
                  </div>
                  <div class="col-sm-3">
                    <input type="button" class="btn btn-success add-row" value="Add Row">
                  </div>
                </div>
                <br>
                
                
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Item Name</th>
                            <th width="5">Quantity</th>
                            <th>Remarks</th>
                        </tr>
                        <?php foreach ($data as $d) {
                          $pdname=$this->mdb->getData('product',array('product_id'=>$d['pdt_id']));
                        ?>
                        <tr>
                          <td><input type='checkbox' name='record'></td>
                          <td>
                            <select name='product_id[]' class='form-control' required>
                              <option value="<?=$d['pdt_id']?>"><?=$pdname[0]['product_name'];?></option>
                            </select>
                          </td>
                          <td><input class='form-control' type='text' name='qty[]' required value="<?=$d['pdt_qty']?>" /></td>
                          <td><input class='form-control' type='text' name='remarks[]' /></td>
                        </tr>
                        <?php } ?>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
                
            <!-- /.box-body -->
              <div class="box-footer">
                <button type="button" class="delete-row btn btn-danger">Delete Row</button><button type="submit" class="btn btn-info pull-right">Issue Now</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </div>
      </div>
  

   <?php } ?> 

   </section>  