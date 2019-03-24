<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
   		public function __construct() 
        {
            parent::__construct();
			$this->load->library('session');
            
			if($this->session->userdata('abc')){}else{redirect('login');}
            //if(!empty($sess)){redirect('login');} 
            date_default_timezone_set('Asia/Dhaka'); 
        }
		public function index()
   		{
        $send['total_cat'] = $this->mdb->row_count('category',array('status'=>'1'));
        $send['total_rec'] = $this->mdb->row_count('recipient',array('status'=>'1'));
        $send['total_item'] = $this->mdb->row_count('product',array('status'=>'1'));
        // $send['today_dom'] = $this->mdb->row_count('dom_req',array('status'=>'0'));
        $this->load->view('dashboard/header');
   			$this->load->view('dashboard/dashboard',$send);
   			$this->load->view('dashboard/footer');
   		}

   		public function add_category()
   		{
   			if($this->session->userdata('abc')[0]['status']==0){redirect('dashboard');}
        $send['msg']="Add Category";
   			if($this->input->post()){
   				$var=$this->input->post();
   				$chk=$this->mdb->getData('category',array('category_name'=>$var['category_name']));
   				if(empty($chk))
   					{$this->mdb->insert('category',$var);$send['msg']="<span style='color:green'>Category Added Successfully.</span>";}
   				else{$send['msg']="<span style='color:red'>Category Name Already Exists.</span>";}
   			}
   			$this->load->view('dashboard/header');
   			$this->load->view('dashboard/add_category',$send);
   			$this->load->view('dashboard/footer');
   		}

      public function view_category()
   		{
        $send['data']=$this->mdb->getData('category');
   			$this->load->view('dashboard/header');
   			$this->load->view('dashboard/view_category',$send);
   			$this->load->view('dashboard/footer');
   		}

   		public function edit_category($id=NULL)
   		{
   			if($this->session->userdata('abc')[0]['status']==0){redirect('dashboard');}
        $send['msg']="Edit Category Name";
   			if($this->input->post()){
   				$var=$this->input->post();
   				$this->mdb->update('category',$var,array('category_id'=>$id));
   				$send['msg']="<span style='color:green'>Category Modified.</span>";
   			}
   			$send['data']=$this->mdb->getData('category',array('category_id'=>$id));
   			$this->load->view('dashboard/header');
   			$this->load->view('dashboard/edit_category',$send);
   			$this->load->view('dashboard/footer');
   		}

   		public function delete_category($id=NULL)
   		{
   			if($this->session->userdata('abc')[0]['status']==0){redirect('dashboard');}
        $this->mdb->delete('category',array('category_id'=>$id));
   			redirect('dashboard/view_category');
   		}

      public function add_store()
      {
        if($this->session->userdata('abc')[0]['status']==0){redirect('dashboard');}
        $send['msg']="Add Store Room";
        if($this->input->post()){
          $var=$this->input->post();
          $chk=$this->mdb->getData('store',array('store_name'=>$var['store_name']));
          if(empty($chk))
            {$this->mdb->insert('store',$var);$send['msg']="<span style='color:green'>Store Room Added Successfully.</span>";}
          else{$send['msg']="<span style='color:red'>Store Name Already Exists.</span>";}
        }
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/add_store',$send);
        $this->load->view('dashboard/footer');
      }

      public function view_store()
      {
        $send['data']=$this->mdb->getData('store');
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/view_store',$send);
        $this->load->view('dashboard/footer');
      }

      public function edit_store($id=NULL)
      {
        if($this->session->userdata('abc')[0]['status']==0){redirect('dashboard');}
        $send['msg']="Edit Store Name";
        if($this->input->post()){
          $var=$this->input->post();
          $this->mdb->update('store',$var,array('store_id'=>$id));
          $send['msg']="<span style='color:green'>Store Room Name Modified.</span>";
        }
        $send['data']=$this->mdb->getData('store',array('store_id'=>$id));
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/edit_store',$send);
        $this->load->view('dashboard/footer');
      }

      public function delete_store($id=NULL)
      {
        if($this->session->userdata('abc')[0]['status']==0){redirect('dashboard');}
        $this->mdb->delete('store',array('store_id'=>$id));
        redirect('dashboard/view_store');
      }

      public function add_vendor()
      {
        if($this->session->userdata('abc')[0]['status']==0){redirect('dashboard');}
        $send['msg']="Add Vendor Detail";
        if($this->input->post()){
          $var=$this->input->post();
          $chk=$this->mdb->getData('vendor',array('vendor_name'=>$var['vendor_name']));
          if(empty($chk))
            {$this->mdb->insert('vendor',$var);$send['msg']="<span style='color:green'>Vendor Added Successfully.</span>";}
          else{$send['msg']="<span style='color:red'>Vendor Name Already Exists.</span>";}
        }
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/add_vendor',$send);
        $this->load->view('dashboard/footer');
      }

      public function view_vendor()
      {
        $send['data']=$this->mdb->getData('vendor');
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/view_vendor',$send);
        $this->load->view('dashboard/footer');
      }

      public function edit_vendor($id=NULL)
      {
        if($this->session->userdata('abc')[0]['status']==0){redirect('dashboard');}
        $send['msg']="Edit Vendor Name";
        if($this->input->post()){
          $var=$this->input->post();
          $this->mdb->update('vendor',$var,array('vendor_id'=>$id));
          $send['msg']="<span style='color:green'>Vendor Modified.</span>";
        }
        $send['data']=$this->mdb->getData('vendor',array('vendor_id'=>$id));
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/edit_vendor',$send);
        $this->load->view('dashboard/footer');
      }

      public function delete_vendor($id=NULL)
      {
        if($this->session->userdata('abc')[0]['status']==0){redirect('dashboard');}
        $this->mdb->delete('vendor',array('vendor_id'=>$id));
        redirect('dashboard/view_vendor');
      }

      public function add_unit()
      {
        if($this->session->userdata('abc')[0]['status']==0){redirect('dashboard');}
        $send['msg']="Add Unit";
        if($this->input->post()){
          $var=$this->input->post();
          $chk=$this->mdb->getData('unit',array('unit_name'=>$var['unit_name']));
          if(empty($chk))
            {$this->mdb->insert('unit',$var);$send['msg']="<span style='color:green'>Unit Added Successfully.</span>";}
          else{$send['msg']="<span style='color:red'>unit Name Already Exists.</span>";}
        }
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/add_unit',$send);
        $this->load->view('dashboard/footer');
      }

      public function view_unit()
      {
        $send['data']=$this->mdb->getData('unit');
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/view_unit',$send);
        $this->load->view('dashboard/footer');
      }

      public function edit_unit($id=NULL)
      {
        if($this->session->userdata('abc')[0]['status']==0){redirect('dashboard');}
        $send['msg']="Edit Unit Name";
        if($this->input->post()){
          $var=$this->input->post();
          $this->mdb->update('unit',$var,array('unit_id'=>$id));
          $send['msg']="<span style='color:green'>Unit Modified.</span>";
        }
        $send['data']=$this->mdb->getData('unit',array('unit_id'=>$id));
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/edit_unit',$send);
        $this->load->view('dashboard/footer');
      }

      public function delete_unit($id=NULL)
      {
        if($this->session->userdata('abc')[0]['status']==0){redirect('dashboard');}
        $this->mdb->delete('unit',array('unit_id'=>$id));
        redirect('dashboard/view_unit');
      }

      public function add_product()
      {
        if($this->session->userdata('abc')[0]['status']==0){redirect('dashboard');}
        $send['msg']="Add Product";
        $send['data']=$this->mdb->getData('category',array('status'=>1));
        $send['units']=$this->mdb->getData('unit',array('status'=>1));
        $send['stores']=$this->mdb->getData('store',array('status'=>1));
        if($this->input->post()){
          $var=$this->input->post();
          //print_r($var); exit;
          $chk=$this->mdb->getData('product',array('product_name'=>$var['product_name']));
          if(empty($chk))
            {$this->mdb->insert('product',$var);$send['msg']="<span style='color:green'>Product Added Successfully.</span>";}
          else{$send['msg']="<span style='color:red'>Product Name Already Exists.</span>";}
        }
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/add_product',$send);
        $this->load->view('dashboard/footer');
      }

      public function view_product()
      {
        $send['data']=$this->mdb->getData('product');
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/view_product',$send);
        $this->load->view('dashboard/footer');
      }

      public function edit_product($id=NULL)
      {
        if($this->session->userdata('abc')[0]['status']==0){redirect('dashboard');}
        $send['msg']="Edit product Name";
        $send['categories']=$this->mdb->getData('category',array('status'=>1));
        $send['units']=$this->mdb->getData('unit',array('status'=>1));
        $send['stores']=$this->mdb->getData('store',array('status'=>1));
        if($this->input->post()){
          $var=$this->input->post();
          $this->mdb->update('product',$var,array('product_id'=>$id));
          $send['msg']="<span style='color:green'>Product Modified.</span>";
        }
        $send['data']=$this->mdb->getData('product',array('product_id'=>$id));
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/edit_product',$send);
        $this->load->view('dashboard/footer');
      }

      public function delete_product($id=NULL)
      {
        if($this->session->userdata('abc')[0]['status']==0){redirect('dashboard');}
        $this->mdb->delete('product',array('product_id'=>$id));
        redirect('dashboard/view_product');
      }

      public function new_purchase()
      {
        if($this->session->userdata('abc')[0]['status']==0){redirect('dashboard');}
        $send['msg']="New Product";
        $send['products']=$this->mdb->getData('product',array('status'=>1));
        $send['vendors']=$this->mdb->getData('vendor',array('status'=>1));
        //$send['categories']=$this->mdb->getData('category',array('status'=>1));
        //$send['units']=$this->mdb->getData('unit',array('status'=>1));
        if($this->input->post()){
          $var=$this->input->post();
          $details=$this->mdb->getData('product',array('product_id'=>$var['product_id']));
          $var['category_id']=$details[0]['category_id'];
          $var['unit_id']=$details[0]['unit_id'];
          //print_r($var); exit;
          $chk=$this->mdb->getData('purchase',$var);
          if(empty($chk))
            {
              $this->mdb->insert('purchase',$var);
              $this->db->query("update product set total_qty=total_qty+'".$var['quantity']."' where product_id = '".$var['product_id']."'");
              $send['msg']="<span style='color:green'>Purchased Item Entry Successfully.</span>";
            }
          else{$send['msg']="<span style='color:red'>Purchased Item Already Exists.</span>";}
        }
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/new_purchase',$send);
        $this->load->view('dashboard/footer');
      }

      public function add_recipient()
      {
        if($this->session->userdata('abc')[0]['status']==0){redirect('dashboard');}
        $send['msg']="Add Recipient";
        if($this->input->post()){
          $var=$this->input->post();
          $chk=$this->mdb->getData('recipient',array('personal_id'=>$var['personal_id']));
          if(empty($chk))
            {$this->mdb->insert('recipient',$var);$send['msg']="<span style='color:green'>Recipient Added Successfully.</span>";}
          else{$send['msg']="<span style='color:red'>Recipient Already Exists.</span>";}
        }
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/add_recipient',$send);
        $this->load->view('dashboard/footer');
      }

      public function view_recipient()
      {
        $send['data']=$this->mdb->getData('recipient');
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/view_recipient',$send);
        $this->load->view('dashboard/footer');
      }

      public function edit_recipient($id=NULL)
      {
        if($this->session->userdata('abc')[0]['status']==0){redirect('dashboard');}
        $send['msg']="Edit Recipient Name";
        if($this->input->post()){
          $var=$this->input->post();
          $this->mdb->update('Recipient',$var,array('recipient_id'=>$id));
          $send['msg']="<span style='color:green'>Recipient Modified.</span>";
        }
        $send['data']=$this->mdb->getData('recipient',array('recipient_id'=>$id));
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/edit_recipient',$send);
        $this->load->view('dashboard/footer');
      }

      public function delete_recipient($id=NULL)
      {
        if($this->session->userdata('abc')[0]['status']==0){redirect('dashboard');}
        $this->mdb->delete('recipient',array('recipient_id'=>$id));
        redirect('dashboard/view_recipient');
      }

      public function issue_product1()
      {
        $send['msg']="Issue Product";
        $send['products']=$this->mdb->getData('product',array('status'=>1));
        $send['recipients']=$this->mdb->getData('recipient',array('status'=>1));
        if($this->input->post()){
          $var=$this->input->post();
          //echo "<pre>"; print_r($var); exit;
          $var['issue_date']=$var['issue_date'].' '.date('H:i:s');
          $var['issue_by']=$this->session->userdata('val');
          $var['status']=1;
          $count=count($var['product_id']);
          if(is_numeric($var['issue_to'])){
          for($i=0;$i<$count;$i++){
          $this->mdb->insert('issue',array('issue_to'=>$var['issue_to'],
                                                       'issue_date'=>$var['issue_date'],
                                                       'product_id'=>$var['product_id'][$i],
                                                       'qty_issued'=>$var['qty'][$i],
                                                       'requisition_no'=>$var['requisition_no'],
                                                       'issue_by' => 0,
                                                       'status'=>1));
          $this->db->query("update product set total_qty=total_qty-'".$var['qty'][$i]."' where product_id = '".$var['product_id'][$i]."'");
         }
         $send['msg']="<span style='color:green'>Product Issued to Recipient Successfully.</span>";
       }else{$send['msg']="<span style='color:red'>Select a Person or Product first.</span>";}

         
        }
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/issue_product',$send);
        $this->load->view('dashboard/footer');
      }

      public function issue_product()
      {
        $send['msg']="";
        $send['products']=$this->mdb->getData('product',array('status'=>1));
        if($this->input->post()){
          $var=$this->input->post();
          $chk=$this->mdb->getData('issue',array('requisition_no'=>$var['requisition_no']));
          if(empty($chk)){
            $send['data']=$this->mdb->getData('store_requisition',array('req_no'=>$var['requisition_no']));
          }
          else{
            $send['msg']="<span style='color:red'>Product Already Issued for This Requisition.</span>";
            $this->load->view('dashboard/header');
            $this->load->view('dashboard/message',$send);
            $this->load->view('dashboard/footer');
          }
        }
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/req_no',$send);
        $this->load->view('dashboard/footer');
      }

      public function issueaction()
      {
          $send['msg']="<span style='color:red'>No product issued</span>";
          if($this->input->post()){
          $var=$this->input->post();
          $var['issue_date']=$var['issue_date'].' '.date('H:i:s');
          $var['issue_by']=$this->session->userdata('val');
          $var['status']=1;
          $count=count($var['product_id']);
          if(is_numeric($var['issue_to'])){
          for($i=0;$i<$count;$i++){
          $this->mdb->insert('issue',array('issue_to'=>$var['issue_to'],
                                                       'issue_date'=>$var['issue_date'],
                                                       'product_id'=>$var['product_id'][$i],
                                                       'qty_issued'=>$var['qty'][$i],
                                                       'requisition_no'=>$var['requisition_no'],
                                                       'issue_by' => 0,
                                                       'status'=>1));
          $this->db->query("update product set total_qty=total_qty-'".$var['qty'][$i]."' where product_id = '".$var['product_id'][$i]."'");
            }
          }
          $send['msg']="<span style='color:green'>Product Successfully Issued</span>";
        }
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/message',$send);
        $this->load->view('dashboard/footer');
      }
      
      public function get_pdt_qty($id=NULL)
      {
        $total=$this->mdb->getData('product',array('product_id'=>$id));
        $unit=$this->mdb->getData('unit',array('unit_id'=>$total[0]['unit_id']));
        $txt= 'You have '.$total[0]['total_qty'].' '.$unit[0]['unit_name'].' '.$total[0]['product_name'].' in your stock' ;
        echo "<span style='color:green'>".$txt."</span>";
      }

      function backup(){
        $this->load->helper('download');
        $this->load->library('zip'); 
        $time = time(); 
        $this->zip->read_dir('D:wamp/www/cricket/');
        $this->zip->download('my_backup.'.$time.'.zip');
      }

      public function getunit($id=NULL)
      {
        //$abc=$this->Mdb->getData('product',array('product_id'=>$id));
        $abc=$this->db->query("select * from product where product_id = '".$id."'")->result_array();
        $unit=$this->db->query("select * from unit where unit_id = '".$abc[0]['unit_id']."'")->result_array();
        //$t= (isset($abc[0]['location']) ? $abc[0]['location'] : false);
        echo $unit[0]['unit_name'];
        
        //echo $pdt[0]['product_name'];
        //echo $id;
      }

      public function test()
      {
        
        $date1 = date_create("2017-04-15 03:25:00");
        $date2 = date_create(date('Y-m-d H:i:s'));

        //difference between two dates
        $diff = date_diff($date1,$date2);

        //count days
        echo 'Days Count - '.$diff->format("%a");
        
      }




      public function logout()
        {
            $this->session->sess_destroy();
            sleep(1);
            redirect('login');
        }















}
?>