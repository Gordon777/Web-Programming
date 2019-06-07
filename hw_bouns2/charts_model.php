<?php

if(!defined('BASEPATH'))
    exit('No direct script access allowed');

class charts_model extends CI_model{
    
    function get_services_has_offers()
    {
     return $this->db->query('SELECT `居住地區`,COUNT(`居住地區`) as 各地區居住人數 FROM 會員資料檔
GROUP by `居住地區`') ->result_array();  
    }
    
}