</div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.1.0
    </div>
    <strong><a href="#">GIZ-Rule of Law</a>.</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?=base_url();?>assets/dashboard/js/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url();?>assets/dashboard/js/bootstrap.min.js"></script>
<script src="<?=base_url();?>assets/dashboard/js/bootstrap-select.js"></script>
<script src="<?=base_url();?>assets/dashboard/js/bootstrap-datepicker.min.js"></script>
<!-- DataTables -->
<script src="<?=base_url();?>assets/dashboard/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url();?>assets/dashboard/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?=base_url();?>assets/dashboard/js/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?=base_url();?>assets/dashboard/js/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url();?>assets/dashboard/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url();?>assets/dashboard/js/demo.js"></script>
<!-- page script -->
<script src="<?=base_url();?>assets/dashboard/ckeditor/ckeditor.js"></script>
<script>
  $(document).ready(function() {
    $('#example1').DataTable();
    
} );

  
</script>
<script>
  $(function () {
    CKEDITOR.replace('editor1')
    $('.textarea').wysihtml5()
  })
</script>

<script>
  $(function () {
    CKEDITOR.replace('editor2')
    $('.textarea').wysihtml5()
  })
</script>
<script>
  $(function () {
    
    //Date picker
    $('#datepicker').datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true
    })
  })
</script>
<script>
  $(function () {
    
    //Date picker
    $('#datepicker1').datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true
    })
  })
</script>


<script>
var url = window.location;
$('ul.treeview-menu a').filter(function () {
   return this.href == url;
}).parents('li').addClass('active');

</script>
</body>
</html>