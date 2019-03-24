<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backup extends CI_Controller {
    public function __construct() 
            {
            parent::__construct();
            date_default_timezone_set('Asia/Dhaka');
            }

    public function index()
        {
            
        }

     	public function Export_Database()
                {
                    date_default_timezone_set('GMT');
                   // Load the file helper in codeigniter
                    $this->load->helper('file');


            $con = mysqli_connect("localhost","root","","crickets"); //add your own

            $tables = array();
            $query = mysqli_query($con, 'SHOW TABLES');
            while($row = mysqli_fetch_row($query)){
                 $tables[] = $row[0];
            }

            $result = 'SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";';
            $result .= 'SET time_zone = "+00:00";';

            foreach($tables as $table){
            $query = mysqli_query($con, 'SELECT * FROM `'.$table.'`');
            $num_fields = mysqli_num_fields($query);

            $result .= 'DROP TABLE IF EXISTS '.$table.';';
            $row2 = mysqli_fetch_row(mysqli_query($con, 'SHOW CREATE TABLE `'.$table.'`'));
            $result .= "\n\n".$row2[1].";\n\n";

            for ($i = 0; $i < $num_fields; $i++) {
            while($row = mysqli_fetch_row($query)){
               $result .= 'INSERT INTO `'.$table.'` VALUES(';
                 for($j=0; $j<$num_fields; $j++){
                   $row[$j] = addslashes($row[$j]);
                   $row[$j] = str_replace("\n","\\n",$row[$j]);
                if(isset($row[$j])){
                       $result .= '"'.$row[$j].'"' ; 
                    }else{ 
                        $result .= '""';
                    }
                    if($j<($num_fields-1)){ 
                        $result .= ',';
                    }
                }
                $result .= ");\n";
            }
            }
            $result .="\n\n";
            }

            //Create Folder
            $folder = 'database/';
            if (!is_dir($folder))
            mkdir($folder, 0777, true);
            chmod($folder, 0777);

            $date = date('m-d-Y'); 
            $filename = $folder."db_filename_".$date; 

            $handle = fopen($filename.'.sql','w+');
            fwrite($handle,$result);
            fclose($handle);
            redirect('scoring/score');           


        } // end Export_Database function
    
         
}
