<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Request extends CI_Controller {
	
   		public function __construct() 
        {
            parent::__construct();
            if($this->session->userdata('abc')){}else{redirect('login');}
            date_default_timezone_set('Asia/Dhaka'); 
        }
		public function index()
   		{
        
        $send['msg']="Product Request Form";
        if($this->input->post()){
          $var=$this->input->post();
          //echo "<pre>"; print_r($var);exit;
        }
        $send['products']=$this->mdb->getData('product',array('status'=>1));
        $send['recipients']=$this->mdb->getData('recipient',array('status'=>1));
        $this->load->view('request/header');
   			$this->load->view('request/request_form',$send);
   			$this->load->view('request/footer');
   		}

    public function request_action()
    {
        $var=$this->input->post();
        $t= $this->mdb->max_value();
        $req_no= $t[0]['id']+1;
        $count1=count($var);
        $count=count($var['product_id']);
        //echo $count1; exit;
        if($count1 == 5){

        for($i=0;$i<$count;$i++){
          $this->mdb->insert('store_requisition',array('recipiennt_id'=>$var['issue_to'],
                                                       'pdt_id'=>$var['product_id'][$i],
                                                       'pdt_qty'=>$var['qty'][$i],
                                                       'remarks'=>$var['remarks'][$i],
                                                       'submission_date'=>date('Y-m-d H:i:s'),
                                                       'status'=>1,
                                                       'req_no'=>$req_no));
        }
       
       redirect('request/print_request/'.$req_no);
        }else{echo "error";}
    }



    public function print_request($id=NULL)
        {
            $this->load->library('fpdf');

            $data=$this->mdb->getData('store_requisition',array('req_no'=>$id));
            $username=$this->mdb->getData('recipient',array('recipient_id'=>$data[0]['recipiennt_id']));
            $this->fpdf->AddPage('P','A4');
            $this->fpdf->SetLeftMargin(15);
            $this->fpdf->SetRightMargin(2);
            $this->fpdf->AliasNbPages();
            $this->fpdf->SetFont('Times','',15);
            $this->fpdf->Image('assets/giz.jpg',170,10,20,15);
            //$this->fpdf->Image('assets/images/students_img/'.$reg[0]['picture'],160,10,30,30);
            // $this->fpdf->SetX(68);
            // $this->fpdf->SetX(10); 
           // $this->fpdf->cell(180,6,'Available Production Store Products as on '.date('d-m-Y'),0,1,'C');
            
            $this->fpdf->SetFont('Times','IB',10);
            $this->fpdf->SetX(10);
            $this->fpdf->cell(180,20,'',0,1,'L');
            $this->fpdf->cell(5,0,'',0,0,'L');
            $this->fpdf->cell(143,6,'Requisition No: '.$data[0]['req_no'],0,0,'L');
            $this->fpdf->cell(25,6,'Date: '.date("d-m-Y", strtotime($data[0]['submission_date'])),0,1,'L');
            $this->fpdf->SetFont('Times','',12);
            //$this->fpdf->cell(5,0,'',0,0,'L');
            $this->fpdf->cell(5,0,'',0,0,'L');$this->fpdf->cell(175,6,'To: Manager, Admin',0,1,'L');
            $this->fpdf->cell(5,0,'',0,0,'L');$this->fpdf->cell(175,6,'From: '.$username[0]['recipient_name'],0,1,'L');
            $this->fpdf->cell(5,0,'',0,0,'L');$this->fpdf->cell(175,15,'The following items are required as per following details:',0,1,'L');
            

            //$this->fpdf->Line(10,50,200,50);
            //$this->fpdf->SetXY(10,60);
            $this->fpdf->SetX(20);
            $this->fpdf->SetFont('Times','B',9);
            $this->fpdf->cell(10,6,'S/N','L,T,R',0,'C');
            $this->fpdf->cell(60,6,'Description of Goods','L,T,R',0,'C');
            $this->fpdf->cell(30,6,'Last Issued',1,0,'C');
            $this->fpdf->cell(15,6,'Held','L,T,R',0,'C');
            $this->fpdf->cell(20,6,'Required','L,T,R',0,'C');
            $this->fpdf->cell(35,6,'Remarks','L,T,R',1,'C');
            $this->fpdf->SetX(20);
            $this->fpdf->cell(10,6,'','L,B,R','L,B,T','C');
            $this->fpdf->cell(60,6,'','L,B,R',0,'C');
            $this->fpdf->cell(18,6,'Date',1,0,'C');
            $this->fpdf->cell(12,6,'Qty',1,0,'C');
            $this->fpdf->cell(15,6,'','L,B,R',0,'C');
            $this->fpdf->cell(20,6,'','L,B,R',0,'C');
            $this->fpdf->cell(35,6,'','L,B,R',1,'C');
            //$this->fpdf->cell(20,6,'',1,1,'C');
            $this->fpdf->SetFont('Times','',9);

            $i=1;
            foreach ($data as $d) {
              $this->fpdf->SetX(20);
              $pdtname=$this->mdb->getData('product',array('product_id'=>$d['pdt_id']));
              $unit=$this->mdb->getData('unit',array('unit_id'=>$pdtname[0]['unit_id']));
              $issue=$this->mdb->getDatadesc('issue',array('issue_to'=>$d['recipiennt_id'],'product_id'=>$d['pdt_id']),'issue_date');
              if(!empty($issue)){$date=date("d-m-Y", strtotime(@$issue[0]['issue_date']));}else{$date="";}
            $this->fpdf->cell(10,6,$i++,1,'L,B,T','L');
            $this->fpdf->cell(60,6,$pdtname[0]['product_name'],1,0,'L');
            $this->fpdf->cell(18,6,$date,1,0,'C');  
            $this->fpdf->cell(12,6,@$issue[0]['qty_issued'],1,0,'C');
            $this->fpdf->cell(15,6,'',1,0,'C');
            $this->fpdf->cell(20,6,$d['pdt_qty'].' '.$unit[0]['unit_name'],1,0,'C');
            $this->fpdf->cell(35,6,$d['remarks'],1,1,'C');
            }
            
            
            
            $this->fpdf->SetXY(10,$this->fpdf->GetY()+30);
            //$this->fpdf->SetX(10);
            //$this->fpdf->cell(180,5,'Authorized Signature.......................................',0,1,'R');
            $this->fpdf->cell(10,0,'',0,0,'L');$this->fpdf->cell(75,6,'Requisition By',0,0,'L');
            $this->fpdf->cell(60,6,'Checked By',0,0,'L');
            $this->fpdf->cell(40,6,'Approved By',0,1,'L');
            $this->fpdf->cell(5,0,'',0,0,'L');$this->fpdf->cell(75,6,'Date',0,0,'L');
            $this->fpdf->cell(60,6,'Date',0,0,'L');
            $this->fpdf->cell(40,6,'Date',0,1,'L');
            $this->fpdf->Output('assets/report.pdf');
            $info['file']='assets/report.pdf';
            $this->load->view('request/header');
            $this->load->view('request/pdfView',$info);     
            $this->load->view('request/footer');
        }










}
?>