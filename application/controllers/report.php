<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Report extends CI_Controller {
	
   		public function __construct() 
        {
            parent::__construct();
            if($this->session->userdata('abc')){}else{redirect('login');}
            date_default_timezone_set('Asia/Dhaka'); 
        }
		

    public function min_stock_report()
   		{
   			$send['data']=$this->db->query("SELECT * FROM product WHERE total_qty < min_reminder")->result_array();
        $this->load->view('dashboard/header');
   			$this->load->view('dashboard/report/min_stock_report',$send);
   			$this->load->view('dashboard/footer');
   		}

    public function product_issue_report() 
      {
        $send['data']='';
        if($this->input->post()){
          $var=$this->input->post();
          $send['d1']=$var['from_date'];
          $send['d2']=$var['to_date'];
          if($var['product_id']=='all'){
            $send['data']=$this->db->query("SELECT * FROM issue WHERE DATE(issue_date) BETWEEN '".$var['from_date']."' AND '".$var['to_date']."'")->result_array();
          }else{
            $send['data']=$this->db->query("SELECT * FROM issue WHERE (product_id=".$var['product_id'].") AND DATE(issue_date) BETWEEN '".$var['from_date']."' AND '".$var['to_date']."'")->result_array();
          }
        }
        $send['products']=$this->mdb->getData('product',array('status'=>1));
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/report/product_issue_report',$send);
        $this->load->view('dashboard/footer');
      }

      public function recipient_wise_report() 
      {
        $send['data']='';
        if($this->input->post()){
          $var=$this->input->post();
          $send['d1']=$var['from_date'];
          $send['d2']=$var['to_date'];
          if($var['product_id']=='all'){
            $send['data']=$this->db->query("SELECT * FROM issue WHERE (issue_to=".$var['recipient_id'].") AND DATE(issue_date) BETWEEN '".$var['from_date']."' AND '".$var['to_date']."'")->result_array();
          }else{
            $send['data']=$this->db->query("SELECT * FROM issue WHERE (issue_to=".$var['recipient_id'].") AND (product_id=".$var['product_id'].") AND DATE(issue_date) BETWEEN '".$var['from_date']."' AND '".$var['to_date']."'")->result_array();
          }
        }
        $send['products']=$this->mdb->getData('product',array('status'=>1));
        $send['recipient']=$this->mdb->getData('recipient',array('status'=>1));
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/report/recipient_wise_report',$send);
        $this->load->view('dashboard/footer');
      }

      public function recipient_report() 
      {
        $send['data']='';
        if($this->input->post()){
          $var=$this->input->post();
          if($var['product_id']=='all'){
            $send['data']=$this->db->query("SELECT * FROM issue WHERE (issue_to=".$var['recipient_id'].")")->result_array();
          }else{
            $send['data']=$this->db->query("SELECT * FROM issue WHERE (issue_to=".$var['recipient_id'].") AND (product_id=".$var['product_id'].") ")->result_array();
          }
        }
        $send['products']=$this->mdb->getData('product',array('status'=>1));
        $send['recipient']=$this->mdb->getData('recipient',array('status'=>1));
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/report/recipient_report',$send);
        $this->load->view('dashboard/footer');
      }

      public function cat_wise_min_stock()
      {
        $send['msg']="Categolry Wise Minimum Stock";
        
        if($this->input->post()){
          $var=$this->input->post();
          if($var['category_id']=='all'){
           $send['data']=$this->db->query("SELECT * FROM product WHERE total_qty < min_reminder")->result_array(); 
          }else{
          $send['data']=$this->db->query("SELECT * FROM product WHERE (category_id=".$var['category_id'].") AND total_qty < min_reminder")->result_array();
          }
          //$send['data']=$this->mdb->getData('product',$var,array('category_id'=>$var['category_id']));
          //$send['msg']="<span style='color:green'>Recipient Modified.</span>";
        }
        $send['categories']=$this->mdb->getData('category',array('status'=>1));
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/report/cat_wise_min_stock',$send);
        $this->load->view('dashboard/footer');
      }

      public function view_product()
        {
            $this->load->library('pdf');
            //$this->load->library('custompdf');
            // $d=array('t');
            // $this->pdf->Header($d);
            $data=$this->mdb->getData('product');
            $this->pdf->AddPage('P','A4');
            $this->pdf->SetLeftMargin(15);
            $this->pdf->SetRightMargin(2);
            //$this->custompdf->Header();
            $this->pdf->AliasNbPages();
            
            //$this->pdf->cell(20,6,'',1,1,'C');
            $this->pdf->SetFont('Times','',9);

            $i=1;
            foreach ($data as $pdt) {
            $category=$this->mdb->getData('category',array('category_id'=>$pdt['category_id']));
            $unit_name=$this->mdb->getData('unit',array('unit_id'=>$pdt['unit_id'])); 
            $abc=explode(",",$pdt['location']);
                      $loc="";
                      foreach ($abc as $a) {
                        $arr=$this->mdb->getData('store',array('store_id'=>$a));
                        $loc.=$arr[0]['store_name'].', ';
                      }

            $this->pdf->SetX(15);
            $this->pdf->SetFont('Times','',9);
            $this->pdf->cell(10,6,$i++,'1',0,'C');
            $this->pdf->cell(50,6,$pdt['product_name'],'1',0,'L');
            $this->pdf->cell(25,6,$category[0]['category_name'],'1',0,'L');
            $this->pdf->cell(60,6,substr($loc, 0, -2),'1',0,'L');
            $this->pdf->cell(15,6,$pdt['remarks'],'1',0,'L');
            $this->pdf->cell(20,6,$pdt['total_qty'].' '.$unit_name[0]['unit_name'],'1',1,'L');
            }
            
            
            
            $this->pdf->SetXY(10,$this->pdf->GetY()+30);
            
            $this->pdf->Output('assets/report.pdf');
            $info['file']='assets/report.pdf';
            $this->load->view('request/header');
            $this->load->view('request/pdfView',$info);     
            $this->load->view('request/footer');
        }

   		

}
?>