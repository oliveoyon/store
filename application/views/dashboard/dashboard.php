    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=site_url('dashboard');?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <a href="<?=site_url('dashboard/view_recipient');?>">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-user"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Recipient</span>
              <span class="info-box-number"><?=$total_rec;?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          </a>
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <a href="<?=site_url('dashboard/view_product');?>">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-shopping-basket"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Individual Item</span>
              <span class="info-box-number"><?=$total_item;?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          </a>
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <a href="<?=site_url('dashboard/view_category');?>">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-bars"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Categories</span>
              <span class="info-box-number"><?=$total_cat;?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          </a>
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12"> 
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-calendar"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Issue Product</span>
              <!-- <span class="info-box-number">0</span> -->
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12"> 
          <div class="info-box">
            <span class="info-box-icon bg-purple"><i class="fa fa-book"></i></span>

            <div class="info-box-content">
              <!-- <span class="info-box-number">0</span> -->
              <span>
                <div class="btn-group">
                  <span class="info-box-text" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Reports <span class="caret"></span></span>
                  <ul class="dropdown-menu">
                    <li><a href="<?=site_url('dashboard/view_product');?>"><i class="fa fa-circle-o"></i> View All Product</a></li>
                    <li><a href="<?=site_url('report/min_stock_report');?>"><i class="fa fa-circle-o"></i> Minimum Stock Report</a></li>
                    <li><a href="<?=site_url('report/cat_wise_min_stock');?>"><i class="fa fa-circle-o"></i> Category Wise Stock</a></li>
                    <li><a href="<?=site_url('report/product_issue_report');?>"><i class="fa fa-circle-o"></i> Product Issue Report</a></li>
                    <li><a href="<?=site_url('dashboard/issue_product');?>"><i class="fa fa-circle-o"></i> Cost Compirison Report</a></li>
                    <li><a href="<?=site_url('report/recipient_report');?>"><i class="fa fa-circle-o"></i> Recipient Wise Report</a></li>
                    <li><a href="<?=site_url('report/recipient_wise_report');?>"><i class="fa fa-circle-o"></i> Recipient Wise Report (Advance)</a></li>
                  </ul>
                </div>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>  
    </section>  